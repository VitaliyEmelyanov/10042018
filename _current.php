<?php
   $filename = 'current';
   switch ((int)$_POST['num']) {
      case 1 : $file = fopen($filename, "w");
               fwrite($file,$_POST['cap']);
               break;
      case 2 : $file = fopen($filename, "r");
               echo fgets($file);
               break;
   };
   fclose($file);