<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreelancerCard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div class="Freelancer d-flex justify-content-center">
    <div class="w-full h-full d-flex align-items-end">
    <img src="{{Vite::asset('resources/Images/Freelancer.png')}}" alt="" class="FreelancerImage">
        <div class="FreelancerText">
        <div class="fs-3 ms-4 fw-bold h-15">
            Name
        </div>
        <div class="fs-5  ms-4 fw-normal">
            Software Engineer
        </div>
        </div>
    </div>
    </div>
</body>
</html>