<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'agmakaira',
    'title'        => 'Aggrosoft Makaira Erweiterungen',
    'description'  => array(
        'de' => 'Schließt Händler Gruppe für die Makira Suche aus.'
    ),
    'version'      => '0.0.2',
    'author'       => 'Aggrosoft GmbH',
    'email'        => 'coding@aggrosoft.de',
    'url'          => 'https://www.aggrosoft.de',
    'extend'       => array(
        \OxidEsales\Eshop\Core\Config::class => \Aggrosoft\Makaira\Core\Config::class,
    ),
    'controllers' => array(

    ),
    'events'       => array(

    ),
    'templates' => array(

    ),
    'blocks' => array(

    ),
    'settings' => array(

    )
);
