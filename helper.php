<?php

namespace HereToHelp;

class Helper {
    static $controllers = array("call", "journey", "resident");
    static $fake_users = array("ar"=>"Annalivia Ryan", "bd"=>"Ben Dalton", "lt"=>"Liudvikas T", "mw"=>"Marten Wetterberg");
    static $support_type = array("hr"=>"Help Request", "cev"=>"CEV", "welfare"=>"Welfare", "shield"=>"Shielding", "ct"=>"Contact tracing");

    function __construct($view = false) {
        if(!$view) $view = "start";
        self::initialize();

        foreach(self::$controllers as $controller) {
            $controller = "\\HereToHelp\\Controller\\".$controller;
            if(method_exists($controller, $view)) {
                $controller = new $controller;
                $controller->$view();
            }
        }
    }

    static function initialize() {
        foreach(self::$controllers as $controller) {
            include("controllers/".$controller.".php");
        }
    }

    static function render($folder, $file, $content, $id, $layout = false) {
        if($layout) {
            $folder = array("layout", $folder);
            $file = array("html", $file);
        }

        include("views/".current((array)$folder)."/".current((array)$file).".php");
    }
}