<?php

namespace ContainerYiVAFEB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewOrderServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\NewOrderService' shared autowired service.
     *
     * @return \App\Service\NewOrderService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/NewOrderService.php';

        return $container->privates['App\\Service\\NewOrderService'] = new \App\Service\NewOrderService(($container->privates['App\\Repository\\NewOrderRepository'] ?? $container->load('getNewOrderRepositoryService')), ($container->privates['App\\Repository\\StockRepository'] ?? $container->load('getStockRepositoryService')));
    }
}
