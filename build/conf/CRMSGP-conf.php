<?php
// This file generated by Propel 1.6.7-dev convert-conf target
// from XML runtime conf file /Applications/XAMPP/xamppfiles/htdocs/crm/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'CRMSGP' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'classname' => 'DebugPDO',
        'dsn' => 'mysql:host=localhost;dbname=CRMSGP',
        'user' => 'root',
      ),
    ),
    'default' => 'CRMSGP',
  ),
  'generator_version' => '1.6.7-dev',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-CRMSGP-conf.php');
return $conf;