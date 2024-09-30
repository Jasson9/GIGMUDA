@extends('layouts.app')
@section('title')
    <title>Home</title>
@endsection

@section('resources')
    @vite(['resources/sass/home.scss'])
@endsection

@section('content')
    <body>
        <div>
            <div class="HomeFreelancer flex-wrap">
                <div id="home-section-1-content">
                    <div class="Heading text-center">
                        Your Career Starts Here
                    </div>
                    <div class="SubHeading text-center">
                        Explore Freelancers
                    </div>
                    <div class="d-flex mt-2 justify-content-center align-items-center ">
                        <button class="RegisterButton">Daftar Sekarang</button>
                    </div>
                </div>
                <img id="home-figure-1" src={{ Vite::asset('resources/Images/home-section-1-figure.png') }}>
            </div>

            <div class="w-full d-flex valign" id="home-section-2">
                <div class="d-flex flex-column ms-5 my-auto valign ">
                    <div class=" Heading ">
                        Passionate People At Your Service
                    </div>
                    <div class="Subheading mt-2">
                        Hundreds of passionate freelancers at your service, waiting to help execute your vision
                    </div>
                    <div class="fs-5 mt-2">
                        <ul class="list-unstyled mt-2">
                            We Provide:
                            <li class="mt-2">Software Engineers</li>
                            <li>Developers</li>
                            <li>Game Developers</li>
                            <li class="mb-3">Project Managers</li>
                            And Many More!
                        </ul>
                    </div>
                    <div class="mt-2">
                        <button class="RegisterButton">Find Freelancer</button>
                    </div>
                </div>

            </div>

            <div class="w-full d-flex valign" id="home-section-3">
                <div class="d-flex flex-column ms-5 my-auto valign ">
                    <div class=" Heading ">
                        Passionate People At Your Service
                    </div>
                    <div class="Subheading mt-2">
                        Hundreds of passionate freelancers at your service, waiting to help execute your vision
                    </div>
                    <div class="fs-5 mt-2">
                        <ul class="list-unstyled mt-2">
                            We Provide:
                            <li class="mt-2">Software Engineers</li>
                            <li>Developers</li>
                            <li>Game Developers</li>
                            <li class="mb-3">Project Managers</li>
                            And Many More!
                        </ul>
                    </div>
                    <div class="mt-2">
                        <button class="RegisterButton">Find Freelancer</button>
                    </div>
                </div>

            </div>

            <div id="home-section-4" class="w-full d-flex valign flex-column">
                <h2>Popular Freelancers</h1>

                <div class="freelancer-container">
                    <x-FreelancerCard />
                </div>

                <div class="mt-2">
                    <button class="RegisterButton text-white">See More</button>
                </div>
            </div>
        </div>
    </body>
@endsection


</html>
