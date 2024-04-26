<?php

namespace ContainerL2OfwPn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_920S_YmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.920S.Ym' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.920S.Ym'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'translator' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
