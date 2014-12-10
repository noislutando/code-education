<?php

namespace Products\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ProductsRepository extends EntityRepository
{
    // usando QueryBuilder
    public function findAllOrderByName()
    {
        return $this
            ->createQueryBuilder('p')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // usando DQL
    public function findAllOrderByValue()
    {
        $dql = "SELECT p FROM Products\Entity\ProductsApi p ORDER BY p.value ASC";
        return $this->getEntityManager()
            ->createQuery($dql)
            ->getResult();
    }

//    public function pagination()
//    {
//        $dql = "SELECT p, c FROM Products\Entity\ProductsApi p JOIN p.id c";
//        $query = $this->getEntityManager()
//            ->createQuery($dql)
//            ->setFirstResult(0)
//            ->setMaxResults(3);
//
//        $paginator = new Paginator($query, $fetchJoinCollection = true);
//
//        $c = count($paginator);
//        foreach ($paginator as $post) {
//            echo $post->getHeadline() . "\n";
//        }
//    }
//        $dql = "SELECT COUNT(p.id) FROM Products\Entity\ProductsApi p";
//        $query = $this->getEntityManager()
//            ->createQuery($dql)
//            ->setFirstResult(3 * (1-1))
//            ->setMaxResults(3);
//
//
//
//        $paginator = new Paginator($query, $fetchJoinCollection = true);
//
//        //var_dump($paginator);die;
//
//        $c = count($paginator);
//        foreach ($paginator as $post) {
//            echo $post->getHeadline() . "\n";
//        }
//
//
//        return $c;

    function pagination($pageSize, $currentPage)
    {


        $dql = "SELECT p FROM Products\Entity\ProductsApi p";
        $query = $this->getEntityManager()
            ->createQuery($dql)
            ->setFirstResult($pageSize * ($currentPage-1))
            ->setMaxResults($pageSize);
//            ->getResult();

        $paginator = new Paginator($query, $fetchJoinCollection = true);
        $paginator->count();



        return $paginator;
    }
} 