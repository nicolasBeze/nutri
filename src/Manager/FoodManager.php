<?php

namespace App\Manager;

use App\Entity\Food;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class FoodManager
 *
 * @package App\Manager
 */
class FoodManager extends BaseManager
{
    /**
     * FoodManager constructor.
     *
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em);
    }

    /**
     * @param Food $food
     */
    public function persist(Food $food): void
    {
        $this->em->persist($food);
    }

    /**
     * @param Food|null $food
     */
    public function save(Food $food = null): void
    {
        if ($food) {
            $this->persistAndFlush($food);
        }
        $this->flush();
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getRepository() {
        return $this->em->getRepository(Food::class);
    }
}