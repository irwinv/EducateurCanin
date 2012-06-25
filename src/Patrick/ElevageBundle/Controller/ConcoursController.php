<?php

namespace Patrick\ElevageBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware,
       Symfony\Component\HttpFoundation\RedirectResponse;

//Entity
use Patrick\ElevageBundle\Entity\Concours;
use Patrick\ElevageBundle\Entity\ImagesConcours;

//Formulaire
use Patrick\ElevageBundle\Form\ConcoursForm;

class ConcoursController extends ContainerAware
{

	public function editAction($id = null){

		$msg = "";

		$em = $this->container->get('doctrine')->getEntityManager();

		if(isset($id)){
			$concours = $em->find('PatrickElevageBundle:Concours', $id);
		}

		else{
			$concours = new Concours();
		}

		$form = $this->container->get('form.factory')->create(new ConcoursForm(), $concours);

		$request = $this->container->get('request');

		if($request->getMethod() == 'POST'){

			$form->bindRequest($request);

			if (!is_null($request->files->get('img'))){

				$path 				= __DIR__."/../../../../web/uploads";
				$thumbpath 	= __DIR__."/../../../../web/uploads/thumbs";

				if(isset($id)){

					//SUpprimer l'image déjà existante
					$img_sup = $em->getRepository('PatrickElevageBundle:ImagesConcours')->findOneBy(
						array('concour' => $id)
					);

					if($img_sup){

						@unlink($path.'/'.$img_sup->getImg());
						@unlink($thumbpath.'/'.$img_sup->getThumb());

						$em->remove($img_sup);
						$em->flush();
					}
				}

				$file = $request->files->get('img')->getClientOriginalName();

				//Des images liée au concour.
				$img = new ImagesConcours();
				$img->setImg($file);
				$img->setThumb('thumb_'.$file);

				//OneToMany
				$concours->addImagesConcours($img);

				//Faire la relation entre les 2 tables
				$img->setConcour($concours);

				$em->persist($img);

				$request->files->get('img')->move($path, $file);

				ConcoursController::PowerFullResizer($path.'/'.$file, 120, $thumbpath.'/thumb_'.$file);

			}

			//Enregistrement du concour.
			$em->persist($concours);

			$em->flush();

			$msg = "Concours ajouté avec succès";
		}

		return $this->container->get('templating')->renderResponse('PatrickElevageBundle:Concours:editer.html.twig',
			array('form' => $form->createView(),
				'msg' => $msg
			)
		);

	}

	public function showAction($race = 1){

		$msg = "";

		$em = $this->container->get('doctrine')->getEntityManager();

		$conn = $this->container->get('database_connection');

		$concours = $conn->fetchAll("
			SELECT *, c.id AS idc FROM Concours c
			   LEFT JOIN ImagesConcours ic ON c.id = ic.concour_id
				  WHERE c.race = $race
				      GROUP BY ic.concour_id
					     ORDER BY c.titre ASC
		");

		if(!$concours){
			$msg = "Il n'y a pas de concour disponible pour cette race";
		}

		return $this->container->get('templating')->renderResponse('PatrickElevageBundle:Concours:show.html.twig',
			array(
				'concours' => $concours,
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
