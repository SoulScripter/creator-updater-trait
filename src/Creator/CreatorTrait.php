<?php

namespace SoulScripter\OrmTrait\Creator;

use ApiPlatform\Core\Annotation as ApiPlatform;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait CreatorTrait
{
    /**
     * @ORM\Column(type="integer")
     * @Groups("get")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    private ?int $creatorId = null;

    public function setCreatorId(int $creatorId): object
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    public function getCreatorId(): ?int
    {
        return $this->creatorId;
    }
}