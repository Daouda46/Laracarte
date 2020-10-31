<?php

if(!function_exists('page_title')){
    function page_title($title){
        $base_title = config('app.name'). ' - list of artisans';

        return empty($title)? $base_title : $title. ' | '.$base_title;
        // if($title ==''){
        //     return $base_title;
        // }else{
        //     return $title. ' | '.$base_title;
        // }
    }
}

if(!function_exists('set_route_active')){
    function set_route_active($route){
       return Route::is($route)? 'active':'';
    }
}