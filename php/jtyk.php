<?php

class Jtyk {
  public static function load($file) {
    $str = file_get_contents(str_replace('\n', "\n", $file));
    return json_decode($str);
  } 
}
