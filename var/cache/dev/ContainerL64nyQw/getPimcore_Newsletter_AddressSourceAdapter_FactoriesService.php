<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Newsletter_AddressSourceAdapter_FactoriesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.newsletter.address_source_adapter.factories' shared autowired service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['pimcore.newsletter.address_source_adapter.factories'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'csvList' => ['privates', 'pimcore.document.newsletter.factory.csv', 'getPimcore_Document_Newsletter_Factory_CsvService', true],
            'defaultAdapter' => ['privates', 'pimcore.document.newsletter.factory.default', 'getPimcore_Document_Newsletter_Factory_DefaultService', true],
            'reportAdapter' => ['privates', 'pimcore.document.newsletter.factory.report', 'getPimcore_Document_Newsletter_Factory_ReportService', true],
        ], [
            'csvList' => '?',
            'defaultAdapter' => '?',
            'reportAdapter' => '?',
        ]);
    }
}
