<!DOCTYPE html>
<html>
    <head>
        <title> Calculator </title>
    </head>
    <body>
        <h1> Calculator </h1>
        <form action="calculator.php" method="post">
            <input type="number" name="num1">
            <select name="operators">
            <optgroup label="Operators">
            <option name="keer" value="keer">X</option>
            <option name="plus" value="plus">+</option>
            <option name="min" value="min">-</option>
            <option name="delen" value="delen">/</option>
            </optgroup>
            </select>
            <input type="number" name="num2">
            <input name="submit" type="submit" value="=">
        </form>
<?php
if(isset($_POST['submit'])){
    $nummer1 = $_POST['num1'];
    $nummer2 = $_POST['num2'];
    switch ($_POST['operators']) {
        case 'keer':
          $antwoord = $nummer1 * $nummer2;
          echo "<h1>Antwoord: </h1>" . $antwoord;
          break;
        case 'plus':
          $antwoord = $nummer1 + $nummer2;
          echo "<h1>Antwoord: </h1>" . $antwoord;
          break;
        case 'min':
          $antwoord = $nummer1 - $nummer2;
          echo "<h1>Antwoord: </h1>" . $antwoord;
          break;
        case 'delen':
          $antwoord = $nummer1 / $nummer2;
          echo "<h1>Antwoord: </h1>" . $antwoord;
          break;
  }
}
?>
    </body>
</html>