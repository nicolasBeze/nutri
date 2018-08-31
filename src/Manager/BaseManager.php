<?php

namespace App\Manager;

use Doctrine\ORM\EntityManagerInterface;

abstract class BaseManager
{
    protected $em;

    /**
     * BaseManager constructor.
     *
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param $entity
     */
    protected function persistAndFlush($entity): void
    {
        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param $entity
     */
    public function persist($entity): void
    {
        $this->em->persist($entity);
    }

    protected function flush(): void
    {
        $this->em->flush();
    }
}