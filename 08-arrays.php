<?php
//Arrays
    $carros = array(1=>"Duster", 2=> "HB20", 3=> "Gol");
    $carros[4] = "compass";
    echo $carros[1];
    echo "<br>";

    $clientes = ["Jean", "Tiago", "Calebe"];
    $clientes[3] = "Valdeci";
    print_r($clientes);
    echo "<hr>";

    //Cont
    $totalClientes = count($clientes);
    echo "$totalClientes";
    echo "<hr>";

    //Foreach
    foreach($clientes as $valor){
        echo $valor."<br>";    
        }
        echo "<br>";

    //Array associativos
    $pessoa = array("Nome"=> "Diego Miranda", "Idade"=> "31", "Altura"=> "1.86");
    $pessoa["Cidade"] = "Cidade Ocidental-GO";
    
    foreach($pessoa as $indice => $valor){
        echo $indice. ":" .$valor."<br>";
    }
    echo "<br>";

    //Arrays multidimencionais 
    $times = array("Candagão"=> array("Campeão"=> "Gama", "Vice"=> "Brasiliense", "Terceiro"=> "Luziânia"),
                "Paulista"=> array("Campeão"=> "Palmeiras", "Vice"=> "São Paulo", "Terceiro"=> "Santos"),
                "Carioca"=> array("Campeão"=> "Flamengo", "Vice"=> "Fluminese", "Terceiro"=> "Vasco"),
                );
                foreach($times["Candagão"] as $indice => $valor) {
                    echo $indice.":".$valor."<br>";  
    }