<?php

use Carbon\Carbon;

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertYmdToMdy')) {
    function convertYmdToMdy($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m-d-Y');
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertMdyToYmd')) {
    function convertMdyToYmd($date)
    {
        return Carbon::createFromFormat('m-d-Y', $date)->format('Y-m-d');
    }
}

if (! function_exists('activeMenu')) {
    function activeMenu($uri = '', $strToreturn = null)
    {
        if ( Request::is($uri) ) {
            // $active = 'active';
            return ( $strToreturn == null ) ? 'active' : $strToreturn ;
        }
        return false;
        // if($strToreturn == null) { return $strToreturn; }
        // else { return $active;}
    }
}
