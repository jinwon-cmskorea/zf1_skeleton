<?php
// Error Reporting 설정
error_reporting(E_ALL^(E_NOTICE|E_USER_NOTICE));
ini_set('display_errors', true);
date_default_timezone_set('Asia/Seoul');

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'testing'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

// start PHPUnit framework
require_once 'PHPUnit/Framework.php';

/**
define('DBHOST',    'localhost');
define('DBUSER',    'root');
define('DBPASSWORD','cmskorea');
define('DBNAME',    'cmskorea_erp_test');
define('DBPORT',    3306);
define('DB_DEFAULT', 'default');

$dbConfigs = array(
    DB_DEFAULT  => array(
        "host"      => DBHOST,
        "username"  => DBUSER,
        "password"  => DBPASSWORD,
        "dbname"    => DBNAME,
        "port"      => DBPORT,
        "charset"   => 'UTF8',
    )
);

foreach($dbConfigs as $index => $dbConfig) {
    try {
        $zdb = Zend_Db::factory("Mysqli", $dbConfig);
        $zcon = $zdb->getConnection();
    } catch (Zend_Db_Adapter_Exception $e) {
        $tmpDbConfig = $dbConfig;
        $tmpDbConfig['dbname'] = 'mysql';
        $zdb = Zend_Db::factory('Mysqli', $tmpDbConfig);
        $zcon = $zdb->getConnection();
        $zcon->query('create database ' . $dbConfig['dbname']);

        $zdb = Zend_Db::factory("Mysqli", $dbConfig);
        $zcon = $zdb->getConnection();
    }
    Zend_Registry::set($index, $zdb);
}

Zend_Db_Table_Abstract::setDefaultAdapter(Zend_Registry::get(DB_DEFAULT));
*/

Zend_Session::start();