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
    public function persistFood(Food $food): void
    {
        $this->persist($food);
    }

    /**
     * @param Food|null $food
     */
    public function saveFood(Food $food = null): void
    {
        if ($food) {
            $this->persistAndFlush($food);
        }
        $this->flush();
    }
}