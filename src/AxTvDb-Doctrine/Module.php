<?php

namespace AxTvDbDoctrine;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * Service factory to instantiate the AxTvDb Client
 *
 * @category AxTvDbDoctrine
 * @package  AxTvDbDoctrine\Module
 * @author   Michel Maas <michel@michelmaas.com>
 * @license  http://opensource.org/licenses/GPL-3.0 GPL-3.0
 * @link     https://github.com/AxaliaN/AxTvDb
 */
class Module implements ConfigProviderInterface
{

    /**
     * Gets the module's config
     *
     * @return array|mixed|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}