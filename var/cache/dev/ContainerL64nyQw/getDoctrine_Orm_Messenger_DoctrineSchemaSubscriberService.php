<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Messenger_DoctrineSchemaSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.messenger.doctrine_schema_subscriber' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/SchemaListener/MessengerTransportDoctrineSchemaSubscriber.php';

        return $container->privates['doctrine.orm.messenger.doctrine_schema_subscriber'] = new \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaSubscriber(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['messenger.transport.pimcore_core'] ?? $container->load('getMessenger_Transport_PimcoreCoreService'));
            yield 1 => ($container->privates['messenger.transport.pimcore_maintenance'] ?? $container->load('getMessenger_Transport_PimcoreMaintenanceService'));
            yield 2 => ($container->privates['messenger.transport.pimcore_image_optimize'] ?? $container->load('getMessenger_Transport_PimcoreImageOptimizeService'));
        }, 3));
    }
}
