<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercises - Unit 3</title>
</head>

<body>
  
  <h1>Exercise 1</h1>

  <form action="exercise1.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>

  <hr/>

  <h1>Exercise 2</h1>

  <form action='exercise2.php' method='post'>
    Base: <input type='text' name='base' required><br>
    Altura: <input type='text' name='altura' required><br>
    <input type='submit'>
  </form>

  <hr/>

  <h1>Exercise 3</h1>

  <form action='exercise3.php' method='post'>

    Base: <input type='text' name='base' required><br>
    Altura: <input type='text' name='altura' required><br>
    Size: <input type='range' name='size' min='0' max='100'><br>
    Color del borde: <input type='color' name='border'><br>
    Color de la figura: <input type='color' name='figure'>

    <input type='submit'>

  </form>

  <hr/>

  <h1>Exercise 4</h1>

  <form action='exercise4.php' method='post'>
    <input type='text' name='secuencia'><br>
    <input type='text' name='secuencia'><br>
    <input type='submit'>
  </form>

</body>

</html>