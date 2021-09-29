<?php

namespace Epubli\CreatorUpdaterBundle\Service\Updater;

trait UpdaterTrait
{
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