<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'shared-package-level-one' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/shared-hosting/standard-package',
                    'defaults' => array(
                        'controller' => 'Application\Controller\SharedHosting',
                        'action'     => 'level-one-package-details',
                    ),
                ),
            ),
            'shared-package-level-two' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/shared-hosting/xl-package',
                    'defaults' => array(
                        'controller' => 'Application\Controller\SharedHosting',
                        'action'     => 'level-two-package-details',
                    ),
                ),
            ),
            'shared-package-compare' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/shared-hosting/compare',
                    'defaults' => array(
                        'controller' => 'Application\Controller\SharedHosting',
                        'action'     => 'compare-packages',
                    ),
                ),
            ),
            'shared-package-addons' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/shared-hosting/addons',
                    'defaults' => array(
                        'controller' => 'Application\Controller\SharedHosting',
                        'action'     => 'package-addons',
                    ),
                ),
            ),
            'vps-compare' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/vps/compare',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Vps',
                        'action'     => 'compare-vps',
                    ),
                ),
            ),
            'vps-level-one-details' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/vps/standard-server',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Vps',
                        'action'     => 'level-one-details',
                    ),
                ),
            ),
            'dedicated-compare' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/dedicated-server/compare',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Dedicated',
                        'action'     => 'compare-dedicated',
                    ),
                ),
            ),
            'dedicated-level-one-details' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/dedicated-server/standard-server',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Dedicated',
                        'action'     => 'level-one-details',
                    ),
                ),
            ),
            'domain-landing' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/domain-names/info',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Domain',
                        'action'     => 'index',
                    ),
                ),
            ),
            'domain-search' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/domain-names/search',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Domain',
                        'action'     => 'search',
                    ),
                ),
            ),
            'domain-deal-one' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/domain-names/welsh-deal',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Domain',
                        'action'     => 'deal-one',
                    ),
                ),
            ),
            'domain-dns' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/domain-names/dns-management',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Domain',
                        'action'     => 'dns-management',
                    ),
                ),
            ),
            'encrypted-storage-landing' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/encrypted-storage',
                    'defaults' => array(
                        'controller' => 'Application\Controller\EncryptedStorage',
                        'action'     => 'index',
                    ),
                ),
            ),
            'encrypted-email-landing' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/encrypted-email-hosting',
                    'defaults' => array(
                        'controller' => 'Application\Controller\EncryptedEmail',
                        'action'     => 'index',
                    ),
                ),
            ),
            'contact-landing' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/support/contact-us',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Contact',
                        'action'     => 'index',
                    ),
                ),
            ),
            'support-tickets' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/support/tickets',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Support',
                        'action'     => 'tickets',
                    ),
                ),
            ),
            'support-faqs' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/support/faqs',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Support',
                        'action'     => 'faqs',
                    ),
                ),
            ),
            'support-local' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/support/local',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Support',
                        'action'     => 'local-support',
                    ),
                ),
            ),
            'legal-terms' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/terms-of-business',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Legal',
                        'action'     => 'terms',
                    ),
                ),
            ),
            'legal-privacy' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/privacy-policy',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Legal',
                        'action'     => 'privacy',
                    ),
                ),
            ),
            'control-panel-info' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/control-panel/info',
                    'defaults' => array(
                        'controller' => 'Application\Controller\ControlPanel',
                        'action'     => 'index',
                    ),
                ),
            ),
            'control-panel-demo' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/control-panel/demo',
                    'defaults' => array(
                        'controller' => 'Application\Controller\ControlPanel',
                        'action'     => 'demo',
                    ),
                ),
            ),
            'data-centres' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/service/data-centres',
                    'defaults' => array(
                        'controller' => 'Application\Controller\ServiceGeneral',
                        'action'     => 'data-centres',
                    ),
                ),
            ),
            'flexible-service' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/service/flexibility',
                    'defaults' => array(
                        'controller' => 'Application\Controller\ServiceGeneral',
                        'action'     => 'flexible-service',
                    ),
                ),
            ),
            'deal-web-starter-one' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/deal99',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Deal',
                        'action'     => 'web-starter-one',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index'            => 'Application\Controller\IndexController',
            'Application\Controller\SharedHosting'    => 'Application\Controller\SharedHostingController',
            'Application\Controller\Vps'              => 'Application\Controller\VpsController',
            'Application\Controller\Dedicated'        => 'Application\Controller\DedicatedController',
            'Application\Controller\Dns'              => 'Application\Controller\DnsController',
            'Application\Controller\Domain'           => 'Application\Controller\DomainController',
            'Application\Controller\EncryptedStorage' => 'Application\Controller\EncryptedStorageController',
            'Application\Controller\EncryptedEmail'   => 'Application\Controller\EncryptedEmailController',
            'Application\Controller\Contact'          => 'Application\Controller\ContactController',
            'Application\Controller\Legal'            => 'Application\Controller\LegalController',
            'Application\Controller\Support'          => 'Application\Controller\SupportController',
            'Application\Controller\ControlPanel'     => 'Application\Controller\ControlPanelController',
            'Application\Controller\ServiceGeneral'   => 'Application\Controller\ServiceGeneralController',
            'Application\Controller\Deal'             => 'Application\Controller\DealController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
