<?php

namespace Epubli\CreatorUpdaterBundle\Service\Creator;

use ApiPlatform\Core\Annotation\ApiProperty;
use Doctrine\ORM\Mapping as ORM;

trait CreatorTrait
{
    /**
     * @var int|null
     * @ORM\Column(type="integer")
     * @ApiProperty(writable=false)
     */
    private ?int $creatorId;

    public function setCreatorId(int $creatorId): self
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    public function getCreatorId(): ?int
    {
        return $this->creatorId;
    }
}