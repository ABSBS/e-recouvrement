<?php

namespace Recover\ErecoverBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\OrderBy;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * FactureRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FactureRepository extends EntityRepository
{
	public function getFactures($nombreParPage,$Page)
	{
		$query =$this->createQueryBuilder('a')
					 ->OrderBy('a.dateedition','DESC')
					 ->getQuery();
		// On définit l'article à partir duquel commencer la liste
		$query->setFirstResult(($Page-1) * $nombreParPage) // Ainsi que le nombre d'articles à afficher
		->setMaxResults($nombreParPage);
		// Enfin, on retourne l'objet Paginator correspondant à la requête construite
		// (n'oubliez pas le use correspondant en début de fichier)
		return new Paginator($query);
		#return $query->getResult();
	}
}
