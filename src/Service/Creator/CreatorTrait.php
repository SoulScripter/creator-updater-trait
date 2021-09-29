<?php

namespace Epubli\CreatorUpdaterBundle\Service\Creator;

trait CreatorTrait
{
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