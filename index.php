<?php
header("Access-Control-Allow-Origin: *");
header("content-type: application/json");
 echo "[" ;
 echo file_get_contents( "https://dog.ceo/api/breeds/image/random" ); 
 echo "]";
  ?>



