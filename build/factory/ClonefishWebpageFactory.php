<?php

include "vendor/clonefish/runtime/clonefish.php";
include "vendor/clonefish/runtime/messages_en.php";

class ClonefishWebpageFactory extends BasicWebpageFactory {
			
	public static function run($id, $controller, $html=null) {
		$query = new SysWebpageQuery();
		if ($webpage = $query->findPK($id)) {
			
			$configtxt = $webpage->getClonefishConfig();
			
			if ($webpage->getClonefishParentid()>0) {
				$q1 = new SysWebpageQuery();
				if ($parentwebpage = $query->findPK($webpage->getClonefishParentid())) {
					$configtxt .= $parentwebpage->getClonefishConfig(); 
					$html .= $parentwebpage->getCommonjs();
				}
			} 
			
			eval("\$config = array(".$configtxt.");");
			
			// create the form object
			$clonefish = new clonefish( str_replace(' ', '', $webpage->getName())."_form" , $_SERVER["REQUEST_URI"], 'POST', NULL, 'Propel' );
			
			// setup codepage so your data will be handled
			// perfectly by the appropriate string functions
			$clonefish->codepage         = 'utf-8';
			$clonefish->multibytesupport = 'multibyteutf8';
						
			// add the form elements (fields) pre-filled with
			// values from $_POST
			$clonefish->addElements( $config, $_POST, get_magic_quotes_gpc() ); 
			$clonefish->layouts[$clonefish->layout]["button"] = "<input type='submit' value='Submit' />&nbsp;<input type='button' value='Cancel' onclick=\"window.location.href='".$webpage->getSuccRedirect()."';\" />";
			
			//if have controller parameters "id" then load data from database
			if (!count($_POST)) {
				if (array_key_exists("id",$controller->getParams())!=null) {
					eval("\$query = new ". $webpage->getORMClass()."Query;");
					if ($model = $query->findPK($controller->getParam("id"))) {
						//load values via default from clonefish config
						foreach (array_keys($config) as $element) {
							$clonefish->setValue($element, $model->getByName($element), get_magic_quotes_gpc() );
						}
						//load values via db model mapping
					
					} else {
						return false;
					}
				} else {
					echo "new record";
				}
			} else if ($clonefish->validate()) {
				
				if (array_key_exists("id",$controller->getParams())!=null) {
					// do update
					eval("\$query = new ". $webpage->getORMClass()."Query;");
					$model = $query->findPK($controller->getParam("id"));
					if ($model===null) {
						return false;
					} 
				} else {
					// do insert
					eval("\$model = new ". $webpage->getORMClass().";");
				}
				
				foreach (array_keys($config) as $element) {
					$model->setByName($element, $clonefish->getValue($element, false));
				}
				$model->save();
				
				if ($webpage->getSuccRedirect()!=null){
					//redirect to other pages if form is successfully submitted
					$controller->getRouter()->redirect($webpage->getSuccRedirect());
				}
				
			}
			parent::run($id,$controller,$clonefish->gethtml().$webpage->getHtml().$webpage->getCommonjs().$html);
			return true;
			
		} else {
			return false;
		}
	}
	
}
	
?>