<?php

    /*********** Escalares ************/
    //Sting
        $nome = "Olá Diego - 09/04/1990";
        var_dump($nome);
        if(is_string($nome)):
            echo "É uma sting";
        else:  
            echo "Não é uma string";
        endif;

    echo "<hr>";
    echo "<br>";

    //Int
        $idade = 31;
        var_dump($idade);
        if(is_int($idade)):
            echo "É um inteiro";
        else:
            echo "Não é um inteiro";
        endif;

    echo "<hr>";
    echo "<br>";

    //Float
        $altura = 1.86;
        var_dump($altura);
        if(is_float($altura)):
            echo "É um float";
        else:
            echo "Não é um flot";
        endif;

        echo "<hr>";
        echo "<br>";

    //Booleam
        $admin = true;
        var_dump($admin);
        if(is_bool($admin)):
            echo "É um booleano";
        else:
            echo "Não é um booleano";
        endif;

        echo "<hr>";
        echo "<br>";

    //Composto
        $carros = array("Compass", "Duster", "Gol", 18, 05.2021, true);
            var_dump($carros);
            if(is_array($carros)):
                echo "É um array";
            else:
                echo "Não é um array";
            endif;

        echo "<hr>";
        echo "<br>";
        
 
    //Object
            class Cliente {
                public $nome;
                public function atribuirNome($nome) {
                    $this ->$nome = $nome;
                }
            }
            $cliente = new Cliente();
            $cliente ->atribuirNome("Diego");
            var_dump($cliente);
            if(is_object($cliente)):
                echo "É um objeto";
            else:
                echo "Não é um objeto";
            endif;

        echo "<hr>";
        echo "<br>";

         /*********** Especiais ************/
        //null
            /*$cidade = null;
            var_dump($cidade);*/
