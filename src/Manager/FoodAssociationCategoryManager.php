<?php

namespace App\Manager;

use App\Entity\FoodAssociationCategory;
use Doctrine\ORM\EntityManagerInterface;

class FoodAssociationCategoryManager extends BaseManager
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
     * @param FoodAssociationCategory $foodAssociationCategory
     */
    public function persist(FoodAssociationCategory $foodAssociationCategory): void
    {
        $this->em->persist($foodAssociationCategory);
    }

    /**
     * @param FoodAssociationCategory|null $foodAssociationCategory
     */
    public function save(FoodAssociationCategory $foodAssociationCategory = null): void
    {
        if ($foodAssociationCategory) {
            $this->persistAndFlush($foodAssociationCategory);
        }
        $this->flush();
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getRepository()
    {
        return $this->em->getRepository(FoodAssociationCategory::class);
    }
}