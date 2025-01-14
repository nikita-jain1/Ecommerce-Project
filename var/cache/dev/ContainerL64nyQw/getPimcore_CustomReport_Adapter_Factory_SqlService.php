<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_CustomReport_Adapter_Factory_SqlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.custom_report.adapter.factory.sql' shared autowired service.
     *
     * @return \Pimcore\Model\Tool\CustomReport\Adapter\DefaultCustomReportAdapterFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/Tool/CustomReport/Adapter/CustomReportAdapterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/Tool/CustomReport/Adapter/DefaultCustomReportAdapterFactory.php';

        return $container->privates['pimcore.custom_report.adapter.factory.sql'] = new \Pimcore\Model\Tool\CustomReport\Adapter\DefaultCustomReportAdapterFactory('Pimcore\\Model\\Tool\\CustomReport\\Adapter\\Sql');
    }
}
