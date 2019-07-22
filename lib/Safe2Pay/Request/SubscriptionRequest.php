<?php

namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;

include_once(__DIR__.'/../Core/Client.php');
include_once(__DIR__.'/../Models/Response/Response.php');

/**
 * Class Subscription
 *
 * @package Safe2Pay\Api
 */
class Subscription{

 /**
     * Add a Subscription Register
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Add($data){

        $request = Client:: HttpClient('POST','v2/subscription', json_encode($data), false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }

    /**
     * Get a Subscription Register
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Get($Id){

        $request = Client:: HttpClient('GET',"v2/subscription/get?id={$Id}", null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 

    }

}