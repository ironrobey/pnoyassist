<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_usermetas')){

    function get_usermeta( $id, $key ){
    	$CI =& get_instance();

    	$CI->load->model( 'm_common' );

    	$value = $CI->m_common->getMeta( $id, $key, 'user_id', 'pas_usermetas' );

    	return ( count( $value ) > 0 ? $value->meta_value : '' ) ;

    }
}

if ( ! function_exists('get_refmeta')){

    function get_refmeta( $id, $key ){
    	$CI =& get_instance();

    	$CI->load->model( 'm_common' );

        $value = $CI->m_common->getMeta( $id, $key, 'referral_id', 'pas_refmetas' );

    	return ( count( $value ) > 0 ? $value->meta_value : '' ) ;

    }
}

if ( ! function_exists('get_othersmeta')){

    function get_othersmeta( $id, $key ){
        $CI =& get_instance();

        $CI->load->model( 'm_common' );

        $value = $CI->m_common->getMeta( $id, $key, 'other_id', 'pas_othersmeta' );

        return ( count( $value ) > 0 ? $value->meta_value : '' ) ;

    }
}

if ( ! function_exists('get_loanmeta')){

    function get_loanmeta( $id, $key ){
        $CI =& get_instance();

        $CI->load->model( 'm_common' );

        $value = $CI->m_common->getMeta( $id, $key, 'loan_application_id', 'pas_loanmeta' );

        return ( count( $value ) > 0 ? $value->meta_value : '' ) ;

    }
}

if ( ! function_exists('getOthersData')){

    function getOthersData( $id ){
        $CI =& get_instance();

        $CI->load->model( 'm_members' );

        $others = $CI->m_members->getOthers( $id );

        return $others;

    }
}

if ( ! function_exists('getOthersViaPrincipal')){

    function getOthersViaPrincipal( $id, $relationship ){
        $CI =& get_instance();

        $CI->load->model( 'm_members' );

        $others = $CI->m_members->getOthersViaPrincipal( $id, $relationship );

        return $others;

    }
}

if ( ! function_exists('get_loanmetas')){

    function get_loanmetas( $id ){
        $CI =& get_instance();

        $CI->load->model( 'm_common' );

        return $CI->m_common->getMetas( $id, 'pas_loanmeta','loan_application_id' );
    }
}