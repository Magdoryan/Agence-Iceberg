<?php session_start(); 

  if ( isset($_GET['lang'])) {
    $lang =  $_GET['lang'];
    if ( $lang != 'fr' && $lang != 'en'){
      $lang='fr';
    }
  $_SESSION['lang'] = $lang;
  } else if (isset( $_SESSION['lang'])){
    $lang=$_SESSION['lang'];
  }else{
    $lang='fr';
  }
  $traduction = file_get_contents(substr(__DIR__,0,-3).'lang/' . $lang . '.json');
  $trans = json_decode($traduction, true);

?>