<!-- usando a função GET -->
 <!-- GET: método HTML padrão, a requisição é enviada como uma string anexada a URL -->

 <!-- ESte programa recebe dois valores pela URL usando o método GET -->

 <?php

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    // verifica se os valores foram passados corretamente
    if(isset($numero1) && isset($numero2)) {
        // Converte os valores para inteiros
        $numero1 = (int)$numero1;
        $numero2 = (int)$numero2;
     
        // Realiza as operações aritméticas básicas
        // SOMAR
        $soma = $numero1 + $numero2;
        // SUBTRAIR
        $subtracao = $numero1 - $numero2;
        // MULTIPLICAR
        $multiplicacao = $numero1 * $numero2;
        // DIVIDIR
        $divisao = $numero1 / $numero2;
       
        // Exibe os resultados
        echo "Soma: $soma <br>";
        echo "Subtração: $subtracao <br>";
        echo "Multiplicacao: $multiplicacao <br>";
        echo "Divisão: $divisao <br>";

    }else{
        echo "ATENÇÃO! Por favor, forneça os valores de numero1 e numero2 pela URL.";
    }
 ?>