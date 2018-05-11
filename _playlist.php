<?php
   $filename = 'admin/playlist';
   $playlist = array();
   if (file_exists($filename)) {
      $file = fopen($filename, "r");
      while (!feof($file)) {
         $line = trim(fgets($file));
         if (empty($line)) continue;
         $playlist[] = explode('===',$line);
      };
      fclose($file);
   };
   echo json_encode($playlist);