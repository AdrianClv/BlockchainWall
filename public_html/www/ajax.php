<?php
require_once("../../resources/init.php");
require_once(LIBRARY_PATH . "/emoji.php");

if(isset($_POST['command']) && !empty($_POST['command'])){
  $command = $_POST['command'];

  if(isset($_POST['code'])){
    $code = $_POST['code'];
  }

  switch($command){
    case 'emoji_unified_to_html':
      $text = explode(" ", $code);
      foreach($text as $aux)
        echo emoji_unified_to_html($aux) . ' ';
      break;
    default:
      echo "Wrong command.";
      break;
  }
}
?>
