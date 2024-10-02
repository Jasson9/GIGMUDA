<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
<div class="d-flex flex-wrap justify-content-center align-items-center flex-column">
    <div class="Category">
    <div class="w-full h-full  ">
    <img src="{{Vite::asset('resources/Images/Laravel.png')}}" alt="" class="CategoryImage">
   
    </div>
    </div>

    <div class="CategoryText ">
        <div class="w-50 d-flex items-center text-center shadow-none">
        Front End Developer
        </div>
       
    </div>
    </div>
  
</body>
</html>