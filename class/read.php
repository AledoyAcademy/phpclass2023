<?php
  $myfile = fopen("caleb_note.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("caleb_note.txt"));
            fclose($myfile);

            ?>