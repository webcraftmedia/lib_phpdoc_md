<?php
class phpdoc_md {
    public static function run($inpath,$outpath){
        $named = array(
            'lt' => '%c.md',
            'index' => 'ApiIndex.md',
        );

        $parser = new \PHPDocMD\Parser($inpath->SERVERPATH());

        new INFO("Parsing structure.xml");

        $classDefinitions = $parser->run();

        $templateDir = dirname(__FILE__) . '/phpdoc_md/templates/';

        $generator = new \PHPDocMD\Generator(
            $classDefinitions,
            $outpath->SERVERPATH(),
            $templateDir,
            $named['lt'],
            $named['index']
        );

        new INFO("Generating pages");

        $generator->run();

        new INFO("Complete");
        return \SYSTEM\LOG\JsonResult::ok();
    }
}