<?php

/**
  *Redirect to another URL on the same site
  *
  * @param string $path The path to redirect to
  *
  * @return void
*/
function redirect($path)
{

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
        $protocol = 'https';
     }else{
        $protocol = 'http'; 
     }
     //files are in the patelk64 directroy. Otherwise will get file not found
      header("Location: $protocol://" .  $_SERVER['HTTP_HOST'] . "/~patelk64/MA14" . $path);
      exit;
}
