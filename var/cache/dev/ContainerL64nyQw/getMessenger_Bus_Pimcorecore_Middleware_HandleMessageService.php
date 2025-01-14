<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Bus_Pimcorecore_Middleware_HandleMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.bus.pimcore-core.middleware.handle_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/HandleMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocator.php';

        $container->privates['messenger.bus.pimcore-core.middleware.handle_message'] = $instance = new \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware(new \Symfony\Component\Messenger\Handler\HandlersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.b5gnOyR'] ?? $container->load('get_Messenger_HandlerDescriptor_B5gnOyRService'));
        }, 1), 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.FfT.5qT'] ?? $container->load('get_Messenger_HandlerDescriptor_FfT_5qTService'));
        }, 1), 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.zx9oaWq'] ?? $container->load('get_Messenger_HandlerDescriptor_Zx9oaWqService'));
        }, 1), 'Symfony\\Component\\Notifier\\Message\\PushMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.E_X9Rag'] ?? $container->load('get_Messenger_HandlerDescriptor_EX9RagService'));
        }, 1), 'Presta\\SitemapBundle\\Messenger\\DumpSitemapMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.lJQKkYe'] ?? $container->load('get_Messenger_HandlerDescriptor_LJQKkYeService'));
        }, 1), 'Pimcore\\Messenger\\SendNewsletterMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.0bApt95'] ?? $container->load('get_Messenger_HandlerDescriptor_0bApt95Service'));
        }, 1), 'Pimcore\\Messenger\\VideoConvertMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.B4ixLmb'] ?? $container->load('get_Messenger_HandlerDescriptor_B4ixLmbService'));
        }, 1), 'Pimcore\\Messenger\\CleanupThumbnailsMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.ZPdV2Ak'] ?? $container->load('get_Messenger_HandlerDescriptor_ZPdV2AkService'));
        }, 1), 'Pimcore\\Messenger\\AssetUpdateTasksMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.iHsnMy7'] ?? $container->load('get_Messenger_HandlerDescriptor_IHsnMy7Service'));
        }, 1), 'Pimcore\\Messenger\\AssetPreviewImageMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.x4c3Tw8'] ?? $container->load('get_Messenger_HandlerDescriptor_X4c3Tw8Service'));
        }, 1), 'Pimcore\\Messenger\\MaintenanceTaskMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.VzVjqdo'] ?? $container->load('get_Messenger_HandlerDescriptor_VzVjqdoService'));
        }, 1), 'Pimcore\\Messenger\\SearchBackendMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.663c47w'] ?? $container->load('get_Messenger_HandlerDescriptor_663c47wService'));
        }, 1), 'Pimcore\\Messenger\\OptimizeImageMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.AyyS7I7'] ?? $container->load('get_Messenger_HandlerDescriptor_AyyS7I7Service'));
        }, 1), 'Pimcore\\Messenger\\GeneratePagePreviewMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.ZO6JJgE'] ?? $container->load('get_Messenger_HandlerDescriptor_ZO6JJgEService'));
        }, 1), 'Pimcore\\Messenger\\GenerateWeb2PrintPdfMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.OyBxp7U'] ?? $container->load('get_Messenger_HandlerDescriptor_OyBxp7UService'));
        }, 1), 'Pimcore\\Messenger\\VersionDeleteMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.haPKtJc'] ?? $container->load('get_Messenger_HandlerDescriptor_HaPKtJcService'));
        }, 1), 'Pimcore\\Messenger\\SanityCheckMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.v.ooHDP'] ?? $container->load('get_Messenger_HandlerDescriptor_V_OoHDPService'));
        }, 1)]));

        if ($container->has('monolog.logger.messenger')) {
            $instance->setLogger(($container->services['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));
        }

        return $instance;
    }
}
