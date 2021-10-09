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
<p style="font-size: 25px;">Аренда</p>
  <form action="/rent_pc" method="post"  >
    @csrf
      <p>Имя</p>
      <input type="" size="40" name="name">
      
      <p>Введите вашу почту</p>
      <input type="email" size="40" name="email">
      <p>Введите ваш телефон</p>
      <input type="" size="40" name="phone">
      <p>Нужна ли Playstation5?</p>
     
      <p>да</p>
      <input type="radio" name="result" value="playstation5">
      <p>нет</p>
      <input type="radio" name="result" value="none" checked>

      <p>Количество ПК?</p>
      
      <input type="number" name="pc" >
      <br>
      <br>
      <input type="date" name="date">
      <br>
      <br>
      <input id="button" value="Арендовать" type="submit" >

  </form>


</div>

  </body>

</html>