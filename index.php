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

if(!defined("SEO")) {
    define('SEO', PLUGINS_ROOT.'/seo');
}

Plugin::setInfos(array(
    'id'                    =>    'seo',
    'title'                 =>    __('Search Engine Optimization'),
    'description'           =>    __('Plugin for Search Engine Optimization in Wolf CMS.'),
    'type'                  =>    'both',
    'author'                =>    'Nic Wortel',
    'version'               =>    '0.2.0',
    'website'               =>    'http://www.wolfcms.org/',
    'require_wolf_version'  =>    '0.7.4'
));

Plugin::addController('seo', __('SEO'), 'admin_view', true);

AutoLoader::addFolder(SEO.'/models');

Dispatcher::addRoute(array(
    '/robots.txt' => '/plugin/seo/robotsTxt',
    '/sitemap.xml' => '/plugin/seo/sitemapXml'
));