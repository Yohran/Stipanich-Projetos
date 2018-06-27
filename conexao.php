<?php
function conectar(){
$db = mysql_connect("mysql08.redehost.com.br","cstipanich","Y@oh0102");
$st = mysql_select_db('stprojetos', $db);
$st = new PDO("mysql:host=mysql08.redehost.com.br;dbname=stprojetos", "cstipanich","Y@oh0102");
return $st;
}

function lisUsuario(){
$st = conectar();
$rs = $st->query("SELECT * FROM usuario");

return $rs;
}

?>