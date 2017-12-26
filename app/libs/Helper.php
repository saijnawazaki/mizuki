<?php

class Helper
{
  static public function pecho($values){
    $values = htmlspecialchars($values, ENT_QUOTES, 'UTF-8');

    return $values;
  }
}
