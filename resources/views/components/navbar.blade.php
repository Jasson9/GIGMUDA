<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>
<body>
      <div class="navbar">
        <div >
            <img src="{{Vite::asset('resources/Images/LOGO.png')}}" alt="" class="LOGO">
        </div>

        <div class ="Buttons">
            <div>
                Cari Produk
            </div>
            <div>Cari Freelancer</div>
        <div class="Profile">
        Hi,Pradah
        <img src="{{Vite::asset('resources/Images/PROFIMG.png')}}" alt="" class="ProfIMG">

        </div>
        </div>
    </div>
   
</body>
</html>
</div>