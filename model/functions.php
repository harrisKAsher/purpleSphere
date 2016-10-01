<?php
function pageCheck($pageID){
  switch ($pageID) {
    case '1':
      $page = 'dev';
      break;

    case '2':
      $page = 'design';
      break;
  }
  return $page;
}
 ?>
