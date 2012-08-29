<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

require_once 'task/AbstractClonefishPDOTask.php';
require_once 'config/GeneratorConfig.php';
require_once 'builder/ClonefishElementBuilder.php';

/**
 * This class generates an XML schema of an existing database from
 * the database metadata.
 *
 * @author     Hans Lellelid <hans@xmpl.org>
 * @version    $Revision$
 * @package    propel.generator.task
 */
class BuildElementTask extends AbstractClonefishPDOTask
{

    /**
     * @throws BuildException
     */
    public function main()
    {
        $config = $this->getGeneratorConfig();
        $con = $this->getConnection();
		
		$stmt = $con->query("select * from SYS_FrmElement where blnactive=1");
		
		// get validation codes from database
		while ($row = $stmt->fetch()) {

			$phpPage = new ClonefishElementBuilder();
			$phpPage->setName($row["strClassName"]);
			if ($row["strExtends"]!="") {
				$phpPage->setExtends($row["strExtends"]);
			}
			$phpPage->setInclude($row["strIncludes"]);
			$phpPage->setVariables($row["strVariables"]);
			$phpPage->setConstructor($row["strConstructor"]);
			$phpPage->setConstructorArgs($row["strConstructorArgs"]);
			$phpPage->setGetHTMLCode($row["strGetHTML"]);
			$phpPage->setGetHTMLRowCode($row["strGetHTMLRow"]);
			$phpPage->setGetValueCode($row["strGetValue"]);
			$phpPage->setSetValueCode($row["strSetValue"]);
			$phpPage->setGetScriptCode($row["strGetScripts"]);
			$phpPage->setOtherCode($row["strOtherCode"]);
			$filename = "element.".strtolower($row["strClassName"]).".php";
			$filelocation = $this->getOutputDirectory()."/".$filename;
			
			$this->log("Writing PHP Code to file: " . $filelocation);
			$out = new FileWriter($filelocation);
			$out->write(str_replace("\r","",$phpPage->buildForFile()));
			$out->close();
		}
		
        $this->log("Building Clonefish Element Files Completed...");
    }

}


