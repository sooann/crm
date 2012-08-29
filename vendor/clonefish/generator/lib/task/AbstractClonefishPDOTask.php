<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

//include_once 'phing/tasks/ext/CapsuleTask.php';
require_once 'phing/tasks/ext/pdo/PDOTask.php';
include_once 'config/GeneratorConfig.php';
require_once 'autoloader/autoloader.php';

/**
 * An abstract base Propel task to perform work related to the XML schema file.
 *
 * The subclasses invoke templates to do the actual writing of the resulting files.
 *
 * @author     Hans Lellelid <hans@xmpl.org> (Propel)
 * @author     Jason van Zyl <jvanzyl@zenplex.com> (Torque)
 * @author     Daniel Rall <dlr@finemaltcoding.com> (Torque)
 * @package    propel.generator.task
 */
abstract class AbstractClonefishPDOTask extends PDOTask
{

    /**
     * The target database(s) we are generating SQL
     * for. Right now we can only deal with a single
     * target, but we will support multiple targets
     * soon.
     */
    protected $targetDatabase;

    /**
     * Destination directory for results of template scripts.
     * @var        PhingFile
     */
    protected $outputDirectory;


    /**
     * An initialized GeneratorConfig object containing the converted Phing props.
     *
     * @var        GeneratorConfig
     */
    private $generatorConfig;

    /**
     * Get the current target database.
     *
     * @return String target database(s)
     */
    public function getTargetDatabase()
    {
        return $this->targetDatabase;
    }

    /**
     * Set the current target database. (e.g. mysql, oracle, ..)
     *
     * @param      v target database(s)
     */
    public function setTargetDatabase($v)
    {
        $this->targetDatabase = $v;
    }

    /**
     * [REQUIRED] Set the output directory. It will be
     * created if it doesn't exist.
     * @param  PhingFile      $outputDirectory
     * @return void
     * @throws BuildException
     */
    public function setOutputDirectory(PhingFile $outputDirectory)
    {
        try {
            if (!$outputDirectory->exists()) {
                $this->log("Output directory does not exist, creating: " . $outputDirectory->getPath(),Project::MSG_VERBOSE);
                if (!$outputDirectory->mkdirs()) {
                    throw new IOException("Unable to create Ouptut directory: " . $outputDirectory->getAbsolutePath());
                }
            }
            $this->outputDirectory = $outputDirectory->getCanonicalPath();
        } catch (IOException $ioe) {
            throw new BuildException($ioe);
        }
    }

    /**
     * Get the output directory.
     * @return string
     */
    public function getOutputDirectory()
    {
        return $this->outputDirectory;
    }

    /**
     * Gets the GeneratorConfig object for this task or creates it on-demand.
     * @return GeneratorConfig
     */
    protected function getGeneratorConfig()
    {
        if ($this->generatorConfig === null) {
            $this->generatorConfig = new GeneratorConfig();
			$this->generatorConfig->setMainClass("clonefish.");
            $this->generatorConfig->setBuildProperties($this->getProject()->getProperties());
        }

        return $this->generatorConfig;
    }
	
	
	protected function validate() {
        // Make sure the output directory is set.
        if ($this->outputDirectory === null) {
            throw new BuildException("The output directory needs to be defined!", $this->getLocation());
        }
	}
}
