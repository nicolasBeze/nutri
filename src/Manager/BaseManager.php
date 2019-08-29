<?php

namespace App\Manager;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Class BaseManager
 *
 * @package App\Manager
 */
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
        $this->flush();
    }

    protected function flush(): void
    {
        $this->em->flush();
    }
}