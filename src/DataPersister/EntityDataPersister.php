<?php

namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use App\Entity\Entity;
use App\Service\EntityService;

class EntityDataPersister implements ContextAwareDataPersisterInterface
{
    /**
     * @var EntityService
     */
    private $entityService;

    public function __construct(EntityService $entityService)
    {
        $this->entityService = $entityService;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Entity;
    }

    public function persist($data, array $context = [])
    {
        // call your persistence layer to save $data
//        dump($data);

        return $data;
    }

    public function remove($data, array $context = [])
    {
        // call your persistence layer to delete $data
    }
}
