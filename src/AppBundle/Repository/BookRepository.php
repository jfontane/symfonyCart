<?php

namespace AppBundle\Repository;

/**
 * BookRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BookRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Retrieve books ordered alphabetically by name
     */
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT b FROM AppBundle:Book b ORDER BY b.name ASC'
            )
            ->getResult();
    }
}