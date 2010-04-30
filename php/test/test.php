<?php
include_once(dirname(__FILE__).'/../jtyk.php');

$test = Jtyk::load(dirname(__FILE__).'/test.json');
//echo str_replace('\n', "\n", $test);
//echo "\n";
var_dump($test);
