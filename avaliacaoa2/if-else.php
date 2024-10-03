
    
<?php
$numero = $_POST["numero"];
if($numero > 0){
    echo"$numero positivo";
}elseif ($numero < 0){
    echo"$numero negativo";
}else{
    echo"zero nao roda";
}
?>