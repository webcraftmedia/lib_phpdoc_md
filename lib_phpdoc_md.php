<?php
namespace LIB;
class lib_phpdoc_md extends \LIB\lib_php{
    public static function get_class(){
        return self::class;}
    public static function php_autoload(){
        require_once dirname(__FILE__).'/lib/phpdoc_md/src/Parser.php';
        require_once dirname(__FILE__).'/lib/phpdoc_md/src/Generator.php';
        //require_once dirname(__FILE__).'/lib/twig/.php';
        return true;}
    public static function version(){
        return 'https://github.com/evert/phpdoc-md phpdoc-md';}
}