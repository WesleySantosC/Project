<?php 

function ENDERECO() {

    $cep = $_GET["cep"] ?? "não informado";
    $address = $_GET["address"] ?? "não informado";
    $number = $_GET["number"] ?? "não informado";
    $complement = $_GET["complement"] ?? "não informado";
    $neighborhood = $_GET["neighborhood"] ?? "não informado";
    $city = $_GET["city"] ?? "não informado";
    
} if($cep !== "não informado" && $address !== "não informado" && $number !== "não informado" && $complement !== "não informado" && $neighborhood !== "não informado" && $city !== "não informado"){

    echo "Os campos informados são: \n
    CEP: $cep, ENDEREÇO: $address, NUMERO: $number, COMPLEMENTO: $complement, BAIRRO: $neighborhood, CIDADE: $city";
} else {
    echo "Erro, preencha todos os campos!";
}

ENDERECO();


?>