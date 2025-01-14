<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Retry_SendFailedMessageForRetryListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.retry.send_failed_message_for_retry_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/SendFailedMessageForRetryListener.php';

        return $container->privates['messenger.retry.send_failed_message_for_retry_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener(($container->privates['.service_locator.U4iQVQO'] ?? $container->load('get_ServiceLocator_U4iQVQOService')), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pimcore_core' => ['privates', 'messenger.retry.multiplier_retry_strategy.pimcore_core', 'getMessenger_Retry_MultiplierRetryStrategy_PimcoreCoreService', true],
            'pimcore_image_optimize' => ['privates', 'messenger.retry.multiplier_retry_strategy.pimcore_image_optimize', 'getMessenger_Retry_MultiplierRetryStrategy_PimcoreImageOptimizeService', true],
            'pimcore_maintenance' => ['privates', 'messenger.retry.multiplier_retry_strategy.pimcore_maintenance', 'getMessenger_Retry_MultiplierRetryStrategy_PimcoreMaintenanceService', true],
        ], [
            'pimcore_core' => '?',
            'pimcore_image_optimize' => '?',
            'pimcore_maintenance' => '?',
        ]), ($container->services['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
