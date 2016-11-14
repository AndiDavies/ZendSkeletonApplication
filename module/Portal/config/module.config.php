<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'IndexController' => 'Portal\Controller\IndexController'
        )
    ),

    'router' => array(
        'routes' => array(
           'portal' => array(
               'type'    => 'Literal',
               'options' => array(
                   'route'    => '/home',
                   'defaults' => array(
                       'controller'    => 'IndexController',
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

    'view_manager' => array(
        'template_map' => array(

        ),
        'template_path_stack' => array(
            'portal' => __DIR__ . '/../view'
        ),
    ),
);