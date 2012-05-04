<?php
error_reporting( E_ALL ^ E_NOTICE );

class MY_Controller extends CI_Controller{
    protected
        $data     = array(),
        $settings = array(),
            
        $current_user = array()
    ;
    public function __construct() {
        parent::__construct();
//        $this->current_user = current_user();
    }

    protected function initialize( $layout='index' ){
        $this->template->set_layout( $layout );
    }
    
    protected function draw(){
        // check user logined and by the type of user will show him the menu
        $this->template->show();
    }
    
    protected function load_config( $name ){
        $this->config->load( $name );
        $this->settings = $this->config->item( $name );                
    }
    
}