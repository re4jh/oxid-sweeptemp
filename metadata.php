<?php
/**
 * Created by oxid-module-skeleton.
 * Module: <MODULE_NAME>
 * Autor: <AUTHOR_NAME> <<AUTHOR_EMAIL>>
 *
 * @see https://github.com/OXIDprojects/oxrun
 */

$sMetadataVersion = '2.1';

$aModule = array(
    'id'            => '<MODULE_ID>',
    'title'         => "<MODULE_NAME>",
    'description'   => 'OXID eShop Module <MODULE_DESCRIPTION>',
    'thumbnail'     => '',
    'version'       => '0.0',
    'author'        => '<AUTHOR_NAME>',
    'url'           => '',
    'email'         => '<AUTHOR_EMAIL>',

    'extend'                  => [],
    'controllers'             => [],
    'templates'               => [],
    'smartyPluginDirectories' => [],
    'blocks'                  => [],
    'events'                  => [
        'onActivate'      => '<MODULE_NAMESPACE>\Helper\InitEvents::onModuleActivation',
        'onDeactivate'    => '<MODULE_NAMESPACE>\Helper\InitEvents::onModuleDeactivation',
    ],
    'settings'                => [],
);
