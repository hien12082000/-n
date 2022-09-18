<?php
    $connect = mysql_connect("localhost" , "root" , "")or die ('disconnect');
    mysql_select_db("shophouse" , $connect)or die('disconnect');
    mysql_query("SET NAMES 'utf8'");
 ?>
