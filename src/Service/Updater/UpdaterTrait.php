<?php

namespace Epubli\CreatorUpdaterBundle\Service\Updater;

use ApiPlatform\Core\Annotation\ApiProperty;
use Doctrine\ORM\Mapping as ORM;

trait UpdaterTrait
{
    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     * @ApiProperty(writable=false)
     */
    private ?int $updaterId = null;

    public function setUpdaterId(int $updaterId): self
    {
        $this->updaterId = $updaterId;

        return $this;
    }

    public function getUpdaterId(): int
    {
        return $this->updaterId;
    }
}