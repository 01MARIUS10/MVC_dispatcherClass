<?php
class Router{

    static function parse($url,$request){
        $url = trim($url,"/");
        $Url = explode("/",$url);

        $request->controller = $Url[0];
        $request->action = isset($Url[1]) ? $Url[1] : 'view';

        if(!empty($Url[2])){
            $request->params = array_slice($Url,2);
        }
        return true;
    }
}