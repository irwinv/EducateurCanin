<?php

namespace Patrick\ElevageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

//Entity
use Patrick\ElevageBundle\Entity\Chiens;
use Patrick\ElevageBundle\Entity\Images;

//Formulaire
use Patrick\ElevageBundle\Form\ChiensForm;

class ChiensController extends Controller
{

	public function editAction($id = null){

		$msg = "";

		$em = $this->get('doctrine')->getEntityManager();

		if(isset($id)){
			$chiens = $em->find('PatrickElevageBundle:Chiens', $id);
		}

		else{
			$chiens = new Chiens();
		}

		$form = $this->get('form.factory')->create(new ChiensForm(), $chiens);

		$request = $this->get('request');

		if($request->getMethod() == 'POST'){

			$form->bindRequest($request);

			if (!is_null($request->files->get('img'))){

				$path 				= __DIR__."/../../../../web/uploads";
				$thumbpath 	= __DIR__."/../../../../web/uploads/thumbs";

				if(isset($id)){

					//SUpprimer l'image déjà existante
					$img_sup = $em->getRepository('PatrickElevageBundle:Images')->findOneBy(
						array('chien' => $id)
					);

					if($img_sup){

						@unlink($path.'/'.$img_sup->getImg());
						@unlink($thumbpath.'/'.$img_sup->getThumb());

						$em->remove($img_sup);
						$em->flush();
					}
				}

				$file = $request->files->get('img')->getClientOriginalName();

				//Des images liée au chien.
				$img = new Images();
				$img->setImg($file);
				$img->setThumb('thumb_'.$file);

				//OneToMany
				$chiens->addImages($img);

				//Faire la relation entre les 2 tables
				$img->setChien($chiens);

				$em->persist($img);

				$request->files->get('img')->move($path, $file);

				ChiensController::PowerFullResizer($path.'/'.$file, 120, $thumbpath.'/thumb_'.$file);

			}

			//Enregistrement du chien
			$em->persist($chiens);

			$em->flush();

			$msg = "Chien ajouté avec succès";
		}

		return $this->get('templating')->renderResponse('PatrickElevageBundle:Chiens:editer.html.twig',
			array('form' => $form->createView(),
				'msg' => $msg
			)
		);

	}

	public function showAction($race = 1, $chiot = 0){

		$msg = "";

		$em = $this->get('doctrine')->getEntityManager();

		$conn = $this->get('database_connection');

		$chiens = $conn->fetchAll("
			SELECT *, c.id AS idc FROM Chiens c
			   LEFT JOIN Images i ON c.id = i.chien_id
				  WHERE c.chiot = $chiot
				   && c.race = $race
				      GROUP BY i.chien_id
					     ORDER BY c.nom ASC
		");

		if(!$chiens){
			$msg = "Il n'y a pas de chien disponible pour cette race	";
		}

		return $this->get('templating')->renderResponse('PatrickElevageBundle:Chiens:show.html.twig',
			array(
				'chiens' => $chiens,
				'msg' => $msg
			)
		);

	}

	 /**************************\
	 *@author villamizar Irwin
	 *@acces : public
	 *@package : PowerFullResizer
	 *@description : Gére un fichier image à partir d'un autre tout en gardant la qualité d'origine.
	 * (la taille ne sera plus un problème :)
	 **/
	public function PowerFullResizer($img, $thumb_width, $newfilename)
	{

		//Si le fichier existe cool on continue l'execution du script
		//Autrement on s'arrte sans rien faire.

		if (is_file($img) && file_exists($img)){

			$max_width = $thumb_width;

			//Check si l'extension GD est charg鮍
			if (!extension_loaded('gd') && !extension_loaded('gd2')){

				trigger_error("GD n&#39;est pas charg&eacute; ", E_USER_WARNING);
				return false;
			}

			//Recup les infos de l'image.
			list($width_orig, $height_orig, $image_type) = getimagesize($img);

			switch ($image_type){

				case 1: $im = imagecreatefromgif($img); break;
				case 2: $im = imagecreatefromjpeg($img);  break;
				case 3: $im = imagecreatefrompng($img); break;
				default:  trigger_error('Type de fichier non support&eacute;', E_USER_WARNING);  break;
			}

			/*** Calcule les dimension de l'image ***/
			$aspect_ratio = (float) $height_orig / $width_orig;

			/*** Calcule de la largeur par rapport ࡬a hauteur ***/
			$thumb_height = round($thumb_width * $aspect_ratio);


			while($thumb_height>$max_width){

				$thumb_width-=10;
				$thumb_height = round($thumb_width * $aspect_ratio);
			}

			$newImg = imagecreatetruecolor($thumb_width, $thumb_height);

			/* Check si l'image est PNG ou GIF et si on les a appliqu고une transparence. */
			if(($image_type == 1) OR ($image_type==3)){

				imagealphablending($newImg, false);
				imagesavealpha($newImg,true);
				$transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
				imagefilledrectangle($newImg, 0, 0, $thumb_width, $thumb_height, $transparent);
			}

			imagecopyresampled($newImg, $im, 0, 0, 0, 0, $thumb_width, $thumb_height, $width_orig, $height_orig);

			//Generer le fichier et on le renome comme on veux en $newfilename.
			switch ($image_type){

				case 1: imagegif($newImg,$newfilename); break;
				case 2: imagejpeg($newImg,$newfilename);  break;
				case 3: imagepng($newImg,$newfilename); break;
				default:  trigger_error('Le redimensionnement a &eacute;chou&eacute; !', E_USER_WARNING);  break;
			}

			return $newfilename;
		}
	}
}
