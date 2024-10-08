<?php

namespace ContainerGuXJN1k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOldSoundRabbitMq_DeleteCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'old_sound_rabbit_mq.delete_command' shared service.
     *
     * @return \OldSound\RabbitMqBundle\Command\DeleteCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-amqplib/rabbitmq-bundle/Command/BaseRabbitMqCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-amqplib/rabbitmq-bundle/Command/BaseConsumerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-amqplib/rabbitmq-bundle/Command/ConsumerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-amqplib/rabbitmq-bundle/Command/DeleteCommand.php';

        $container->privates['old_sound_rabbit_mq.delete_command'] = $instance = new \OldSound\RabbitMqBundle\Command\DeleteCommand();

        $instance->setContainer($container);
        $instance->setName('rabbitmq:delete');

        return $instance;
    }
}
