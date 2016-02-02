<?php

require 'config.php';
  
  mysql_connect ($dbhost, $dbusername, $dbuserpass);
  //select the database
  mysql_select_db($dbname) or die('Cannot select database');
  

  $sql = "SELECT * FROM fila_atendimento";
  
  $result = mysql_query($sql);
  $linha = mysql_fetch_assoc($result);
  $total = mysql_num_rows($result);

  mysql_close();



?>
<!doctype html>
<!--
 This page is shown when the extension button is clicked, because the
 "browser_action" field in manifest.json contains the "default_popup" key with
 value "popup.html".
 -->
<html>
  <head>
    <title>Getting Started Extension's Popup</title>
    <script src="js/popup.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="container">
        <ul id="clientes">
    <?php // se o número de resultados for maior que zero, mostra os dados 
          if($total > 0) { 
          // inicia o loop que vai mostrar todos os dados 
            do { 
      ?> 
            <li><?=$linha['id']?> /<?=$linha['nome']?> / <?=$linha['tenant']?></li> 
    <?php 
            // finaliza o loop que vai mostrar os dados 
            }
            while($linha = mysql_fetch_assoc($result)); // fim do if 
            } 
      ?>


        </ul>
        <button id="pesquisar">Pesquisar</button>
    </div>
      
  </body>
</html>

