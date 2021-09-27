<?php

namespace SoulScripter\OrmTrait\Updater;

use ApiPlatform\Core\Annotation as ApiPlatform;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait UpdaterTrait
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("get")
     * @ApiPlatform\ApiProperty(writable=false)
     */
    private ?int $updaterId = null;

    public function setUpdaterId(int $updaterId): object
    {
        $this->updaterId = $updaterId;

        return $this;
    }

    public function getUpdaterId(): int
    {
        return $this->updaterId;
    }
}