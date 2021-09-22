<?php

namespace SoulScripter\ApiPlatform\OrmTrait;

use ApiPlatform\Core\Annotation as ApiPlatform;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\PrePersist;
use Epubli\PermissionBundle\Service\AccessToken;
use Symfony\Component\Serializer\Annotation\Groups;

trait CreatorTrait
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @Groups("get")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    private int $creatorId;

    /**
     * @PrePersist
     */
    public function setCreatorId(AccessToken $accessToken): object
    {
        $this->creatorId = $accessToken->getUserId();

        return $this;
    }

    public function getCreatorId(): int
    {
        return $this->creatorId;
    }
}