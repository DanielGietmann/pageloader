<?php
namespace dgpageloader;

class PageController {
    public function getPageName() {
        $request = explode("/",$_SERVER['REQUEST_URI']);
        $request = end($request);
        if (strpos($request,"?")!==false) {
            //here you can change the path to the 404-page file. Change /views/ to your folder and $request ="404" to your page name
            $request = explode("?", $request);
            $requestPage = getcwd() . '/views/' . $request[0] . '.php';
            if(file_exists($requestPage) == false){
                if($request[0] != ""){
                    $request = "404";
                }
            }
        } else {
            //here you can change the path to the 404-page file. Change /views/ to your folder and $request ="404" to your page name
            $requestPage = getcwd() . '/views/' . $request . '.php';
            if(file_exists($requestPage) == false){
                if($request != ""){
                    $request = "404";
                }
            }
        }
        return $request;
    }

    public function showPage($request) {
        //here you can change the standard page to show change $request = "index"; to your own page
        if ($request == "") { $request = "index"; }
        if (is_array($request)) {
            //here you can change the path to view files Change /views/ to your folder
            require getcwd() . '/views/' . $request[0] . '.php';
        } else {
            //here you can change the path to view files Change /views/ to your folder
            require getcwd() . '/views/' . $request . '.php';
        }
    }
}