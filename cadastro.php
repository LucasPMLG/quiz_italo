<?php
include("conexao.php");
$nome=$_POST['nome'];
$resposta=$_POST['q1'];
$resposta2=$_POST['q2'];
$resposta3=$_POST['q3'];
$resposta4=$_POST['q4'];
$resposta5=$_POST['q5'];
$resposta6=$_POST['q6'];
$resposta7=$_POST['q7'];
$resposta8=$_POST['q8'];
$resposta9=$_POST['q9'];
$resposta10=$_POST['q10'];

$sql="INSERT INTO questoes(nome, q1, q2, q3, q4, 
q5, q6, q7, q8, q9, q10)
VALUES ('$nome', '$resposta', '$respostas2', '$respostas3', '$respostas4', 
'$respostas5', '$respostas6', '$respostas7', '$respostas8', '$respostas9', '$respostas10')";
if(mysqli_query($conexao, $sql)){
    header("Location: index.html");
}else{
    echo "Erro".Mysqli_connect_error($conexao);
}

mysqli_close($conexao);
?>