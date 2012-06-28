<?php
namespace Patrick\ElevageBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ConcoursRepository extends EntityRepository
{

	public function getConcours($race)
	{
		$conn = $this->_em->getConnection('database_connection');

		$sql = "
			SELECT *, c.id AS idc FROM Concours c
			   LEFT JOIN ImagesConcours ic ON c.id = ic.concour_id
				  WHERE c.race = :race
				      GROUP BY ic.concour_id
					     ORDER BY c.titre ASC
		";

		return $conn->fetchAll($sql, array('race' => $race));
	}
}