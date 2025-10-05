<?php
    system("cls");
    echo("Hello,World!!!\r\n");
    echo("Enter your name:\r\n");
    $name  = chop(fgets(STDIN));
    echo("Hello,". $name ."!!!\r\n");
?>