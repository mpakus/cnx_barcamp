<?php

/**
 * Is it user logined or not?
 * 
 * @return type 
 */
function user_signed_in(){
    $user = CI()->user->profile();    
    return ( !empty($user['id']) ) ? TRUE : FALSE;
}

/**
 * Return logined user profile
 * 
 * @return type 
 */
function current_user(){
    return CI()->user->profile();
}

/**
 * Is it admin?
 * 
 * @param type $user
 * @return type 
 */
function user_is_admin( $user=array() ){
    if( empty($user) ) $user = current_user();
    return ( $user['role'] == 'admin' ) ? TRUE : FALSE;
}