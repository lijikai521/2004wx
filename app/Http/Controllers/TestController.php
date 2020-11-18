<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;


class TestController extends Controller
{
    public function test1(){
    	// echo __METHOD__;

    	// $list = DB::table('p_users')->limit(5)->get();
    	// dd($list);
    	// 
    	$key = 'wx2004';
    	Redis::set($key,time());
    	echo Redis::get($key);
    }

     public function test2(){
    	{
    		echo __METHOD__;
    	}
    }

    
    public function AccessToken()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $token ="TOKEN";
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
        
        if( $tmpStr == $signature ){
            echo $_GET('echostr');
        }else{
            echo "111";
        }
    }
}
  