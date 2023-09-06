<?php
$carros = [
    [
        "modelo" => "gol",
        "cor" => "preto",
        "registro" => [
            "placa" => "ABC-123",
            "renavam" => "12345678901",
            "proprietario" => [
                "nome" => "José das Coves",
                "CPF" => "123.456.987-00"
            ]
        ]
],
     [//veiculo 2
         "modelo" => "Megane",
         "cor" => "Beje",
         "registro" => [
              "placa" => "BGF-143",
               "renavam" => "12345608901",
               "proprietario" => [
                  "nome" => "José das Verdes",
                  "CPF" => "123.456.917-00"
        ]
    ]
]
];

//while

$primeiroArray = 0;
$QuantPrimeiroArray = count($carros);

while($primeiroContador < $QuantPrimeiroArray){

    echo "Modelo: {$carros[$primeiroContador]["modelo"]} | ";
    echo "cor: {$carros[$primeiroContador]["cor"]} |";
    $primeiroContador = 0;
    

}
?>