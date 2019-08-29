<?php

namespace App\Manager;

use App\Entity\FoodCategory;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class FoodCategoryManager
 *
 * @package App\Manager
 */
class FoodCategoryManager extends BaseManager
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
     * @param FoodCategory $foodCategory
     */
    public function persist(FoodCategory $foodCategory): void
    {
        $this->em->persist($foodCategory);
    }

    /**
     * @param FoodCategory|null $foodCategory
     */
    public function save(FoodCategory $foodCategory = null): void
    {
        if ($foodCategory) {
            $this->persistAndFlush($foodCategory);
        }
        $this->flush();
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getRepository()
    {
        return $this->em->getRepository(FoodCategory::class);
    }
}