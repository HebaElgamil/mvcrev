<?php
namespace MVCREV\core;

class controller{
    function view($path, $data){
        require_once (VIEWS . $path . '.php');
       
        extract($data);
    }
}