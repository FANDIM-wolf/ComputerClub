<!Doctype html>
<html>
  <head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Красный носорог</title>
    <link href="css/page.css" rel="stylesheet" >
  </head>
  <body>
  
<img width="141" height="177" id="logo_small_style" src="css/logosss.png">

<div id="block_log"> 
<p style="font-size: 25px;">Регистрация</p>
  <form action="/reg" method="post"  >
    @csrf
      <p>Имя</p>
      <input type="" size="40" name="name">
      <p>Пароль</p>
      <input type="password" size="40" name="password">
      <p>Введите вашу почту</p>
      <input type="email" size="40" name="email">
      <p>Введите ваш телефон</p>
      <input type="" size="40" name="phone">

      <br>
      <br>
      <input id="button" value="Зарегистрироваться" type="submit" >

  </form>
  <br>
<a href="/login">Авторизация</a>

</div>

  </body>

</html>