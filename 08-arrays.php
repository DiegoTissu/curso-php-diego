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