
<?php
$numero = $_POST["numero"];
if($numero >= 0){
    echo"contagem regressiva";
    for ($n = $numero; $n >= 0; $n--){
        echo $n . "<br>";

    }
}else{
    echo "digite um numero inteiro";

}
?>



