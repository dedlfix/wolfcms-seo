<?php
if (!defined('IN_CMS')) { exit(); }

/**
 * SEO
 * 
 * Plugin for Search Engine Optimalization in Wolf CMS
 * 
 * @package     Plugins
 * @subpackage  SEO
 * 
 * @author      Nic Wortel <nd.wortel@gmail.com>
 * @copyright   Nic Wortel, 2012
 * @version     0.2.1
 */

Plugin::setAllSettings(array(
    'min_title_length' => 4,
    'max_title_length' => 80,
    'min_descr_length' => 20,
    'max_descr_length' => 170
), 'seo');