<?php

namespace SoulScripter\OrmTrait\Creator;

use Doctrine\ORM\Event\LifecycleEventArgs;
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
        $entity = $lifecycleEventArgs->getEntity();
        if($entity->getCreatorId() === null) {
            $entity->setCreatorId($this->accessToken->getUserId());
        }
    }
}