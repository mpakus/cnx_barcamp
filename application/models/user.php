<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users model
 * 
 * @version
 * @access ALL
 * @author Ibragimov "MpaK" Renat <info@mrak7.com>
 * @copyright Copyright (c) 2009-2012, AOmega.ru
 */
class User extends MY_Model {
    protected
        $table          = 'users',
        $user           = array()
    ;

    public function __construct() {
        parent::__construct();
    }
        
}