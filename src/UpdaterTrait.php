<?php

namespace SoulScripter\OrmTrait;

use ApiPlatform\Core\Annotation as ApiPlatform;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\PreUpdate;
use Epubli\PermissionBundle\Service\AccessToken;
use Symfony\Component\Serializer\Annotation\Groups;

trait UpdaterTrait
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @Groups("get")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    private int $updaterId;

    /**
     * @PreUpdate
     */
    public function setUpdaterId(AccessToken $accessToken): object
    {
        $this->updaterId = $accessToken->getUserId();

        return $this;
    }

    public function getUpdaterId(): int
    {
        return $this->updaterId;
    }
}