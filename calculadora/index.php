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
            border-color: green 20rem solid;
        }
    </style>
  <main>
   <form method="get" action="calculador.php">
      <p>
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1">
      </p>
      <p>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2">
      </p>
      <p>
        <label for="ope">Operação</label>
        <select id="ope" name="ope">
            <option value=" ">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
      </p>
      <p>
        <button type="submit">Calcular</button>
      </p>
   </form>
    </main>
</body>
</html>