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
 * @version     0.1.0
 */

class SeoController extends PluginController {
    const PLUGIN_NAME = 'seo';
    
    public function __construct() {
        if (defined('CMS_BACKEND')) {
            define('VIEWS', self::PLUGIN_NAME . '/views');
            $this->setLayout('backend');
        }
        else {
            define('VIEWS', '../../plugins/' . self::PLUGIN_NAME . '/views');
        }
    }
    
    /**
    * Displays a robots.txt file
    */
    public function robotsTxt() {
        echo new View('../../plugins/seo/views/robots_txt', array(
            'user_agents' => Robot::findAll()
        ));
    }
    
    /**
    * Displays a sitemap.xml file
    * 
    */
    public function sitemapXml() {
        echo new View('../../plugins/seo/views/sitemap_xml', array(
            //'pages' => Page::findAll(array('where' => 'page.needs_login <> 1'))
        ));
    }
}