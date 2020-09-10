<?php

    require_once("view.php");
    class Controller {


       protected function render_template_with_content($title, $content){
            $data = array("title"=>$title,"content"=>$content);
            $view = new View("template.php");
            echo $view->render($data);
       }
    }




?>