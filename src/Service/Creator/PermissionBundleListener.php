<?php

namespace Epubli\CreatorUpdaterBundle\Service\Creator;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use Epubli\PermissionBundle\Service\AccessToken;

class PermissionBundleListener
{
    private AccessToken $accessToken;

    public function __construct(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function prePersist(LifecycleEventArgs $lifecycleEventArgs): void
    {
        $entity = $lifecycleEventArgs->getObject();
        if($entity->getCreatorId() === null){
            $entity->setCreatorId($this->accessToken->getUserId());
        }
    }
}