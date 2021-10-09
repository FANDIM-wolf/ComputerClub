<!Doctype html>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/examples/libs/chief-slider/chief-slider-with-prefixes.min.css">
    <title>Красный носорог</title>
    <link href="css/page.css" rel="stylesheet" >
  </head>
  <body>
  
<img width="141" height="177" id="logo_small_style" src="css/logosss.png">







<h2 style="margin-left:10%;margin-top:3%;">Game Arena «Красный Носорог» — компьютерный клуб нового поколения в самом центре города Липецк.</h2>

<img id="slider" name="slide" width="1000" height="600">


<p style="margin-left:10%;margin-top:5%; font-size: 18px;">• 4 зала;</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">• 36 игровых компьютеров;</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">• Супер-удобные кресла ThunderX3</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">• 4 новейших PS5 и 1 Sega;</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">• Холодильник со снеками и напитками;</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">• Атмосфера друзей и уюта;</p>

<h2 style="margin-left:10%;margin-top:5%;font-size: 25px; ">Характеристики ПК VIP.</h2>

<p style="margin-left:10%;margin-top:5%;font-size: 18px;">Видеокарта: nVidia GeForce RTX 3060;</p>

<p style="margin-left:10%;margin-top:5%;font-size: 18px;">Процессор: Intel core i5-10600F;</p>

<p style="margin-left:10%;margin-top:5%;font-size: 18px;">Монитор: ACER KG251QDbmiipx 24.5» 240Hz;</p>

<p style="margin-left:10%;margin-top:5%;font-size: 18px;">Периферия.</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">Клавиатура: HyperX alloy FPS Pro CherryMX Red;</p>

<p style="margin-left:10%;margin-top:5%;font-size: 18px; ">Мышка: SteelSeries Rival 3;</p>

<p style="margin-left:10%;margin-top:5%;font-size: 18px;">Наушники: HyperX Cloud II Red;</p>

<h2 style="margin-left:10%;margin-top:5%; font-size: 25px;" >Характеристики ПК Comfort.</h2>
  
<p style="margin-left:10%;margin-top:5%;font-size: 18px;">Видеокарта: nVidia GeForce GTX 1660 Super;</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">Процессор: Intel core i5-10400F;</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">Монитор: LENOVO G24—10 23.6» 144Hz;</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">Периферия.;</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">Клавиатура: Oklick 969G SHOTGUN;</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">Мышка: Logitech G102;</p>

<p style="margin-left:10%;margin-top:5%; font-size: 18px;">Наушники: Dexp Storm Pro;</p>


<script>
  
 var i = 0;
 var images =[];
 var time = 5000;

images[0] = 'img/wallpaper.png';
images[1] = 'img/paper2.jpg';
images[2] = 'img/paper3.jpg';
images[3] = 'img/paper4.jpg';

function changeImg(){
  document.slide.src = images[i];

  if(i < images.length - 1){
    i++;
  }
  else{
    i = 0;
  }

  setTimeout("changeImg()",time);


}

window.onload = changeImg;

</script>

</body>

</html>