<?php
@include("conexao.php");
$nome =          $_POST['nome'];
$snome =         $_POST['snome'];
$tel =           $_POST['tel'];
$nascimento =    $_POST['nascimento'];
$nick =          $_POST['nick'];
$rank =          $_POST['rank'];

$consulta = $pdo->prepare("SELECT * FROM valorant WHERE tel=:t");
$consulta->bindValue(":t",$tel);
$consulta->execute();
$res = $consulta->fetch();


if(empty($nome) ||empty($snome) ||empty($tel) 
||empty($nascimento) ||empty($nick) ||empty($rank))
{
    echo("Um ou mais campos precisam ser preenchidos!");
}else
{
    if(!isset($res['tel']))
    {
        $sql = $pdo->prepare("INSERT INTO valorant(nome,snome,tel,nascimento,nick,rank)
        VALUES(:n,:sn,:t,:na,:ni,:r)");
        $sql->bindValue(":n",$nome);
        $sql->bindValue(":sn",$snome);
        $sql->bindValue(":t",$tel);
        $sql->bindValue(":na",$nascimento);
        $sql->bindValue(":ni",$nick);
        $sql->bindValue(":r",$rank);
        $sql->execute();
        echo("Parabéns, você foi cadastrado!");
    }
else
    {
        echo("Já Está cadastrado");
    }
}

