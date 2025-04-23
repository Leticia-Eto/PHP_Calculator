<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        body{
            
            font-family: "Atkinson Hyperlegible Mono", serif;
            display:flex;
            justify-content:center;
            align-content:center;
            text-align:center;

            
        }
        main{
            background-color:lightgreen;
            font-size:1.5rem;
            padding:10px;
            border-radius:8px;
        }
    </style>
    <main>
    <?php
       if (isset($_GET["num1"])&&isset($_GET["num2"])&&isset($_GET["ope"])){

       $num1=$_GET["num1"];
       $num2=$_GET["num2"];
       $ope=$_GET["ope"];

       if ($ope==" "){
        $total= $num1 + $num2;
       }else if ($ope=="-"){
        $total= $num1-$num2;
       }else if ($ope=="*"){
        $total= $num1*$num2;
       }else if ($ope=="/"){
        $total= $num1/$num2;
       } else {
        $total= "nan";
       }

       if ($total !="nan"){
        echo "O resultado é ", $total;
       }else{
        echo "Operador inválido";
       }
       
    }else{
        echo "Parâmetros não foram informados";
    }

    ?>
    </main>
</body>
</html>