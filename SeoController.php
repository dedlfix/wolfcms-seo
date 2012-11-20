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
 * @author      Nic Wortel <nic.wortel@nth-root.nl>
 * @copyright   Nic Wortel, 2012
 * @version     0.2.1
 */

class SeoController extends PluginController {
    const PLUGIN_NAME = 'seo';
    
    public function __construct() {
        if (defined('CMS_BACKEND')) {
            define('VIEWS', self::PLUGIN_NAME . '/views');
            $this->setLayout('backend');
            $this->assignToLayout('sidebar', new View('../../plugins/seo/views/sidebar'));
        }
        else {
            define('VIEWS', '../../plugins/' . self::PLUGIN_NAME . '/views');
        }
    }
    
    public function index() {
        $this->suggestions();
    }
    
    /**
    * Displays a robots.txt file
    */
    public function robotsTxt() {
        echo new View('../../plugins/seo/views/robots_txt', array(
            'user_agents' => Robot::findAll()
        ));
    }
    
    public function settings() {
        if (isset($_POST['save']) && $_POST['save'] == __('Save Settings')) {
            Plugin::setAllSettings($_POST['setting'], self::PLUGIN_NAME);
            Flash::setNow('success', __('Settings have been saved!'));
        }
        
        $this->display('seo/views/settings', array(
            'settings' => Plugin::getAllSettings(self::PLUGIN_NAME)
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
    
    public function suggestions() {
        $suggestions = Suggestion::findAll();
        
        $this->display('seo/views/suggestions', array(
            'suggestions' => $suggestions
        ));
    }
}