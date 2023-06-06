<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link rel="stylesheet" href="log.css">
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }

  h1 {
    font-size: 2rem;
    color: #007bff;
    margin: 0;
  }

  form {
    max-width: 500px;
    margin: auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px;
    font-size: 1rem;
  }

  button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  button[type="submit"]:hover {
    background-color: #0062cc;
  }

  a {
    display: block;
    text-align: center;
    margin-top: 10px;
    color: #007bff;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s;
  }

  a:hover {
    color: #0056b3;
  }

  div:first-of-type {
    text-align: center;
    margin-bottom: 20px;
  }

  hr {
    border: none;
    border-top: 1px solid #ccc;
    margin: 20px 0;
  }
</style>

<body>
  <form action="authen.php" method="POST">
    <div class="">
      <h1 align="center">Bienvenu dans l'application campus IAM</h1>
    </div>
    <hr>
    <div align="center">

      <br><br>
      <button type="submit">lancer l'application</button> <br> <br>


    </div>

  </form>
</body>

</html>