<?php

/**
 * Контроллер приложения
 *
 * @version 1.0
 * @author Ibragimov "MpaK" Renat <info@mrak7.com>
 * @copyright Copyright (c) 2009-2012 AOmega <http://aomega.ru>
 */
class MainController extends MY_Controller{
    protected
        $view = 'main/'
    ;

    public function __construct(){
		parent::__construct();
        $this->load->model('user');
	}

	public function index(){
        if( !empty($_POST['token']) ){
            $this->load->library( 'LoginzaAPI');
            $user = $this->loginzaapi->getAuthInfo( $_POST['token'] );
            // $this->template->set( 'content', TextDump($user) );
			
            if($user->provider == 'http://twitter.com/'){
                $data['uid'] = $user->uid;
                $data['provider'] = $user->provider;
                $data['first_name'] = $user->name->full_name;
                $data['identity'] = $user->identity;
            }else{
                $data['uid'] = $user->uid;
                $data['provider'] = $user->provider;
                $data['first_name'] = $user->name->first_name;
                $data['last_name'] = $user->name->last_name;
                $data['email'] = $user->email;
                $data['identity'] = $user->identity;                
            }

            $this->check_uniq();

            $this->keep_user( $data );
            redirect( 'interest');
        }else{
			$this->template->render_to( 'content', $this->view.'index', $this->data );
		}
		$this->draw();
	}

    public function who(){
        $this->data['users'] = $this->user->order_by('id', 'DESC')->find();
        $this->template->render_to( 'content', $this->view.'who', $this->data );
        $this->draw();
    }

    public function interest(){
        $this->check_uniq();

        $this->data['user'] = $this->get_user();
        if( empty($this->data['user']) ){
            set_flash_error( 'Что-то вы не прошли авторизацию социальными сетями' );
            redirect( '' );
        }

        $this->load->library('form_validation');
        $config = array(
           array(
                 'field'   => 'interest',
                 'label'   => 'Интересы',
                 'rules'   => 'required|trim|max_length[512]'
           ),
        );
        $this->form_validation->set_rules($config);

        if( $this->form_validation->run($this) === FALSE ){
            $this->template->render_to( 'content', $this->view.'interest', $this->data );
        }else{
            $this->data['user']['interest'] = param( 'interest' );
            $this->user->save( $this->data['user'] );
            set_flash_ok( 'Спасибо, что вы с нами!' );
            redirect( 'who' );
        }
        $this->draw();
    }

    protected function check_uniq(){
        $user = $this->get_user();
        $user_isset = $this->user->where( array('uid'=>$user->uid, 'provider'=>$user->provider) )->find( NULL, 1 );
        if( !empty($user_isset) ) {
            set_flash_error( 'Спасибо, но вы уже зарегистрировались на это мероприятие' );
            redirect( '' );
        }        
    }
    protected function get_user( ){
        return $this->session->userdata('user');
    }
    protected function keep_user( $user ){
        $this->session->set_userdata( 'user', $user );        
    }

    /**
    * 
    */
    public function page( $page ){
        $this->template->render_to( 'content', $this->view.$page );
        $this->draw();
    }

}