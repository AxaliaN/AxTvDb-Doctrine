<?php

return array(
    // Doctrine config
    'doctrine' => array(
        'driver' => array(
            'AxTvDb-Doctrine-Entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => __DIR__ . '/../src/AxTvDb-Doctrine/Entity',
            ),
            'orm_default' => array(
                'drivers' => array(
                    'AxTvDbDoctrine\Entity' => 'AxTvDb-Doctrine-Entity',
                )
            )
        )
    ),
);