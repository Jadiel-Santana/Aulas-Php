<?php
    $usuarios = array(
            "nome" => "Jadiel Barbosa Santana",
            "email" => "jadiel.bsantana@gmail.com",
            "senha" => md5("1234567890")
    );

    echo "<br><hr><br>";

    $usuarios = json_encode($usuarios);
    echo $usuarios;

    echo "<br><hr><br>";

    $jsonToArray = json_decode($usuarios);
    echo "<p><b>Nome: </b>$jsonToArray->nome</p>";
    echo "<p><b>E-mail: </b>$jsonToArray->email</p>";
    echo "<p><b>Senha: </b>$jsonToArray->senha</p>";

    echo "<br><hr><br>";

    $cepJson = json_decode(file_get_contents('https://viacep.com.br/ws/19010010/json/'));

    echo "<p><b>CEP: </b>$cepJson->cep</p>";
    echo "<p><b>Logradouro: </b>$cepJson->logradouro</p>";
    echo "<p><b>Complemento: </b>$cepJson->complemento</p>";
    echo "<p><b>Bairro: </b>$cepJson->bairro</p>";
    echo "<p><b>Localidade: </b>$cepJson->localidade</p>";
    echo "<p><b>UF: </b>$cepJson->uf</p>";
    echo "<p><b>Unidade: </b>$cepJson->unidade</p>";
    echo "<p><b>IBGE: </b>$cepJson->ibge</p>";
    echo "<p><b>GIA: </b>$cepJson->gia</p>";
?>