<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KLoB9ADService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KLoB9AD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KLoB9AD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'workflowManager' => ['services', 'Pimcore\\Workflow\\Manager', 'getManagerService', true],
        ], [
            'workflowManager' => 'Pimcore\\Workflow\\Manager',
        ]);
    }
}
