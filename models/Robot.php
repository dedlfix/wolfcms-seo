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

class Robot extends Record {
    const TABLE_NAME = 'seo_robot';
    
    public $user_agent;
    public $allowed;
    public $path;
    
    /*
     * Temporary finder, should be replaced in the future
     * 
     * @todo    replace with database model
     */
    public static function findAll() {
        $user_agents = Array();
        
        $user_agents[0] = new Robot();
        
        $user_agents[0]->user_agent = '*';
        $user_agents[0]->allowed    = TRUE;
        $user_agents[0]->path       = '/';
        
        return $user_agents;
    }
}