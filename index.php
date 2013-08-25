<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    require "global.php";
    require "Slim/Slim.php";
    \Slim\Slim::registerAutoloader();
   
    //load slim
    $app = new \Slim\Slim(array('debug' => true));
	
    $app->get('/hello/:name', function ($name) {
        echo "Hello, $name";
    });
    
    $app->router()->map('/:dept/:module(/:action(/:id(/:params+)))', 
        function ($dept,$module) use ($app) {
            //checking pagelist
            $found=true;
            $params = $app->router()->getCurrentRoute()->getParams();
            $location = $params["dept"] . "/" . $params["module"];
            if (!array_key_exists('action',$params)) {
                $found=false;
            } else if ($params["action"]==null || $params["action"]=="") {
                $found=false;
            } else {
                $action = $params["action"];
            }
            
            //set default actions for post and get
            if (!$found) {
                switch ($_SERVER["REQUEST_METHOD"]) {
                    case "GET":
                        $action="LIST";
                        break;
                    case "POST":
                        $action="EDIT";
                        break;
                }
            }
            
            //check page exist in pagelist
            $sql = "select * from sys_pagelist left join sys_pagelistaction on sys_pagelist.pagelist_id = sys_pagelistaction.pagelist_id left join sys_pageaction on sys_pagelistaction.pageaction_id = sys_pageaction.pageaction_id where url='".escapesql($location)."' and sys_pageaction.name='".escapesql($action)."'";
            $result = mysql_query($sql);
            if (mysql_num_rows($result)>0) {
                $row = mysql_fetch_array($result);

                //load page
                $moduleclass = $params["module"].ucfirst(strtolower($row["type"]));
                require $params["dept"]."/$moduleclass.php";
                
                //$webpage = call_user_func_array(new $moduleclass, array("app"=>$app));
                $ref = new ReflectionClass ($moduleclass);
                $webpage = $ref->newInstanceArgs(array("app"=>$app,"pagelist"=>$row["pagelist_id"]));
                
                if (!is_subclass_of($webpage, ucfirst($row["type"]))) {
                    $app->notFound();
                } else {
                    $webpage->run();
                }
                
            } else {
                $app->notFound();
            }
        }
    )->name("defaultroute")->via('GET','POST');
            
    $app->run();
?>
