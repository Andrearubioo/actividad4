<?php

function getFolderProject(){
  if(strpos(__DIR__, '/') !== false){
    $folder = str_replace('opt/lampp/htdocs/', '/', __DIR__);
  }else{
    $folder = str_replace('C:\\xampp\\htdocs\\', '/', __DIR__);
  }
  $folder = str_replace('config', '', $folder);
  $folder = str_replace('\\', '/', $folder);
  return $folder;
}

?>