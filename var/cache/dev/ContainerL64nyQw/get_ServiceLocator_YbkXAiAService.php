<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YbkXAiAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ybkXAiA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ybkXAiA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'exportService' => ['privates', 'Pimcore\\Translation\\ExportService\\ExportServiceInterface', 'getExportServiceInterfaceService', true],
        ], [
            'exportService' => 'Pimcore\\Translation\\ExportService\\ExportServiceInterface',
        ]);
    }
}
