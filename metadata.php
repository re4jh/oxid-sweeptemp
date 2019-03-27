<?php
/**
 * Module: Revier Temp-Dir Sweeper
 * Author: Jonas Hess <jonas.hess@revier.de>
 *
 */

$sMetadataVersion = '0.1';

$aModule = array(
    'id'          => 're4-sweeptemp',
    'title'       => "Revier Temp-Dir Sweeper",
    'description' => 'OXID eShop Module: Clean Template Directory',
    'thumbnail'   => '',
    'version'     => '0.1',
    'author'      => 'Jonas Hess',
    'url'         => 'https://www.revier.de',
    'email'       => 'jonas.hess@revier.de',

    'extend' => [
        'navigation' => "revier/sweeptemp/Controller/Admin/sweepTemp",
    ],
    'controllers' => [],
    'templates' => [
        're4header.tpl' => "revier/sweeptemp/views/admin/tpl/re4header.tpl",
    ],
    'smartyPluginDirectories' => [],
    'blocks' => array(
        array('template' => 're4header.tpl', 'block' => 'admin_header_links', 'file' => 'backend_admin_headitem_sweep.tpl'),
    ),
    'settings' => [],
);
