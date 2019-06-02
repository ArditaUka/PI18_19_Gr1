<?php
    if( isset($_POST['name'])&& isset($_POST['comment'])) 
    {
    $data = $_POST['name']. "\r\n". $_POST['comment']. "\r\n";
    $ret = file_put_contents('produktet.txt', $data, FILE_APPEND | LOCK_EX); //Only a single process may possess an exclusive lock to a given file at a time.


    if($ret === false) 
      {
      die('There was an error writing this file');
      }
      else 
      {
      echo  $_POST['name']. $_POST['comment'];
      }
    }
      else 
      {
      die('no post data to process');
      }
?>
