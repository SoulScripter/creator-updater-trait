<?php

namespace Epubli\CreatorUpdaterBundle\Updater;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Epubli\PermissionBundle\Service\AccessToken;

class PermissionBundleListener
{
    private AccessToken $accessToken;

    public function __construct(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function preUpdate(LifecycleEventArgs $lifecycleEventArgs): void
    {
        $entity = $lifecycleEventArgs->getEntity();
        if($entity->getUpdaterId() === null) {
            $entity->setUpdaterId($this->accessToken->getUserId());
        }
    }
}