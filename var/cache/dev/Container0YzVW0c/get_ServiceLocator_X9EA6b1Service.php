<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.x9EA6b1' shared service.

return $this->privates['.service_locator.x9EA6b1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'serv' => ['privates', 'App\\Repository\\ServiceRepository', 'getServiceRepositoryService.php', true],
], [
    'serv' => 'App\\Repository\\ServiceRepository',
]);
