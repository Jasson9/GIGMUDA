<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<div class="navbar">
        <div >
            <img src="{{Vite::asset('resources/Images/LOGO.png')}}" alt="" class="LOGO">
        </div>

        <div class ="Buttons">
        <ul class="nav ">
  <li class="nav-item">
    <a class="nav-link " href="#!">CARI FREELANCER</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#!">CARI PRODUK</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#!">LOGIN</a>
  </li>
</ul>

           
        </div>
    </div>
</body>
</html>




