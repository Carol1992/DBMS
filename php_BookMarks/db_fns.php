<?php

function db_connect()
{
   $result = new mysqli('mysql', 'mag', 'mag123', 'bookmarks');

   if (!$result)
     throw new Exception('Could not connect to database server');
   else
     return $result;
}

?>
