<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MzERhnwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mzERhnw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mzERhnw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cache' => ['services', 'Pimcore\\Cache\\Core\\CoreCacheHandler', 'getCoreCacheHandlerService', false],
        ], [
            'cache' => 'Pimcore\\Cache\\Core\\CoreCacheHandler',
        ]);
    }
}
