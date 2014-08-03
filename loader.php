<?php
require 'interface.php';
$dir = opendir(dirname(__FILE__).'/classes');
while ($file = readdir($dir)) {
    if ($file != '.' && $file != '..' && $file != pathinfo(__FILE__, PATHINFO_BASENAME)) {
        include 'classes/'.$file;
    }
}

class Debugger
{
    public static $debuggerName;
    public static $debuggerInstance;

    private function __construct($debuggerName)
    {
    }

    public static function setDebugger($name = 'default')
    {
        self::$debuggerName = $name;
        $args = func_get_args();
        array_shift($args);
        $className = 'Debugger'.$name;
        self::$debuggerInstance = new $className($args[0], $args[1]);
    }

    public static function getInstance()
    {
        return self::$debuggerInstance;
    }

    public static function __callStatic($name, array $args)
    {
        return call_user_func_array(array(self::getInstance(), $name), $args);
    }
}
