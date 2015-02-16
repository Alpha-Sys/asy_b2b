<?php
/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>   
 * @copyright   (C) Alpha-Sys 2008-2015
 * @module      asy_b2b
 * @oxidversion OXID eShop CE, PE, EE
 * @version     10.02.2015  1.0
 */

/**
 * Module information
 */
$aModule = array(
    'id'           => 'asy_b2b',
    'title'        => '<img src="../modules/asy/module_logo.png" alt="Alpha-Sys" title="Alpha-Sys"> B2B Erweiterungen (Netto-Preise, etc.)',
    'description'  => 'Diese Modul erweitert um wesentliche B2B Features wie die Anzeige von Netto-Preisen.',
    'thumbnail'    => 'module_logo.png',
    'version'      => '1.0',
    'author'       => 'Alpha-Sys',
    'email'        => 'fabian.kunkler@alpha-sys.de',
    'url'          => 'http://www.alpha-sys.de',
    'extend'       => array(
        'oxconfig'          => 'asy/asy_b2b/core/asy_b2b__oxconfig',
    ),
    'files' => array (
    ),
    'templates' => array(
    ),
    'settings' => array(
    ),
    'blocks' => array(
    )
);