<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Condição e Repetição</title>
    <style>
       pre{
        font-size: 2rem;
       }
    </style>
</head>
<body>
    <main>
    <pre>
        
    <?php
       echo "**Estruturas Condicionais**";
       echo "\n";
       echo "IF\n";
       $idade=18;
       if($idade>=18){
           echo "É maior de idade";
       } else if ($idade>=12){
           echo "É adolescente";
       } else {
         echo "É uma criança";
       }
       echo "\n";
       echo "\nswitch";
       $mes=6;
       $dias=0;
       switch ($mes){
         case 1:
         case 3:
            $dias=31;
            break;
         case 2:
            $dias=28;
            break;
         case 4:
         case 6:
            $dias=30;
            break;
         default:
            echo "\nMês inválido";
            break;
       }
       if ($dias!=0){
        echo "\nMês ",$mes, " tem ",$dias," dias\n" ;
       }

       echo "\n**Estruturas de Repetição Condicionais**";
       echo "\n";
       echo "\nWhile\n";
       $contador=0;
       while($contador<10){
         echo $contador,"\n";
         $contador++;
       }
       echo "\nDo While\n";
       $contador=0;
       do {
         echo $contador,"\n";
         $contador++;

       } while( $contador<10);

       echo "\nFOR\n";
       for($contador=0;$contador<10;$contador++){
        echo $contador,"\n";
       }
       

    ?>
    </pre>
    </main>
</body>
</html>