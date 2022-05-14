<?php
echo '
<form action="JsonEs1.php" method="get">
nome <input type="text" name="name"><br><br>
descrizione <input type="text" name="desc"><br><br>
prezzo in euro <input type="number" name="euro"><br><br>
quantità <input type="number" name="quantità"><br><br>
disponibilità <input type="text" name="disponibilità"><br><br>
<input type="submit" value="SALVA">
</form>
';

$id=0;


if($_GET["disponibilità"]==0){
    $disponibilità=true;
}
else{
    $disponibilità=false;
}

$oggetto= array(
    'id'=> $id,
    'nome' => $_GET["name"],
    'descrizione' => $_GET["desc"],
    'prezzo in euro' => $_GET["euro"],
    'quantità' => $_GET["quantità"],
    'disponibilità' => $disponibilità
);


$json=json_encode($oggetto);


$f=fopen("ListaOggetti.json","w");
$id++;
fwrite($f,$json);
fclose($f);


?>