<?php

require 'config.php';
  
  mysql_connect ($dbhost, $dbusername, $dbuserpass);
  //select the database
  mysql_select_db($dbname) or die('Cannot select database');
  

  $sql = "SELECT * FROM fila_atendimento";
  
  $result = mysql_query($sql);
  $linha = mysql_fetch_assoc($result);
  $total = mysql_num_rows($result);
  echo json_encode($linha);

  mysql_close();



?>