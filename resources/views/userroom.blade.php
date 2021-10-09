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

<div id="hat">
  
<img width="141" height="177" id="logo_small_style" src="css/logosss.png">

<p>Личный кабинет</p>
</div>



            <br>
<p id="favgame">Любимая игра</p>            
<div id="main">            
<div id="block_user">            
<p >Имя: {{$data_about_user->name}}<p>

<p >Почта: {{$data_about_user->email}}<p> 
 
<p>Общее время в клубе: {{$data_about_user->common_time}}<p> 
</div>
 
<div id="blocK_img"> 
<img src="/img/gta5.png" id="game_style" >
</div>
</div>

<p id="favgame">game</p> 


<h2 style="margin-left:10%; margin-top: 20%;">Советуем поиграть</h2>

<div id="games">
 @foreach($games as $game) 

<div id="game">
<img src="/img/{{$game->image}}" id="game_style" >
<p id="game_title" >{{$game->name}}</p>
</div>

@endforeach
</div>

</body>

</html>




