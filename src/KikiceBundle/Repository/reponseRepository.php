<?php

namespace KikiceBundle\Repository;

/**
 * reponseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class reponseRepository extends \Doctrine\ORM\EntityRepository
{
    public function findReponseInQuestion($question)
    {
        $query = $this->createQueryBuilder('r')
            ->where('r.question=:categ')
            ->setParameter('categ', $question)
            ->getQuery();
        return $query->getResult();
    }
}
