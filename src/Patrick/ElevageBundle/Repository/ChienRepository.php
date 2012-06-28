<?php
namespace Patrick\ElevageBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ChienRepository extends EntityRepository
{

	public function getChiensParRace($chiot, $race){

		$conn = $this->_em->getConnection('database_connection');
		$sql = "
			SELECT *, c.id AS idc FROM Chiens c
			   LEFT JOIN Images i ON c.id = i.chien_id
				  WHERE c.chiot = :chiot
				   && c.race = :race
				      GROUP BY i.chien_id
					     ORDER BY c.nom ASC
		";

		return  $conn->fetchAll($sql, $params = array('chiot' => $chiot, 'race' => $race));
	}
}