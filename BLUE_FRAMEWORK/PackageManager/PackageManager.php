<?php
/**
 * @author chajr <chajr@bluetree.pl>
 * @version 0.2.0
 * @copyright chajr/bluetree
 * @package BlueFramework3.0
 */

class PackageManager
{
    private static $_loadedLibraries    = array();
    private static $_loadedModules      = array();
    private static $_missingLibraries   = array();
    private static $_missingModules     = array();
    private static $_disabledLibraries  = array();
    private static $_disabledModules    = array();
    /**
     * set constants with main path to index.php, framework files etc
     * basically as argument use __FILE__
     * @param string $indexFilePath base framework path
     */
    static function setPaths($indexFilePath)
    {
        $main = dirname($indexFilePath);
        define('CORE_MAIN_PATH',             $main);
        define('CORE_LOG_PATH',              $main . '/BLUE_FRAMEWORK/log/');
        define('CORE_MAIN_FRAMEWORK_PATH',   $main . '/BLUE_FRAMEWORK/');
        define('CORE_LIBRARIES_PATH',        $main . '/BLUE_FRAMEWORK/LIBRARIES/');
        define('CORE_MODULES_PATH',          $main . '/BLUE_FRAMEWORK/MODULES/');
        define('CORE_SKIN_PATH',             $main . '/BLUE_FRAMEWORK/SKIN/');
        define('CORE_CONFIG_PATH',           $main . '/BLUE_FRAMEWORK/cfg/');
        define('CORE_PATH',                  $main . '/BLUE_FRAMEWORK/LIBRARIES/Core/');
        define('CORE_TEMP',                  $main . '/BLUE_FRAMEWORK/temp/');
    }

    /**
     * @param string $librariesPackage
     */
    static function loadLibrary($librariesPackage)
    {
        if (class_exists('Test_Tracer')) {
            Test_Tracer::marker(array(
                'loading package', debug_backtrace()
            ));
        }
        if (is_string($librariesPackage)) {
            $librariesPackage = array($librariesPackage);
        }
        foreach ($librariesPackage as $library) {
            
        }
        
    }

    /**
     * 
     */
    static function loadModule()
    {

    }
    /**
     * convert class name to path
     * @param string $packageName
     * @param boolean $phpExtension
     * @return string
     */
    static function name2path($packageName, $phpExtension = FALSE)
    {
        $path = str_replace('_', '/', $packageName);
        if ($phpExtension) {
            $path .= '.php';
        }
        return $path;
    }
}