@extends('layouts.app')
@section('title')
    <title>Home</title>
@endsection

@section('resources')
    @vite(['resources/sass/Freelancer.scss'])
@endsection


@section('content')
<body>
    <div>
        <div class="FR-section bg-primary">
    <div class="HeadingFreelancer text-center">
    Execute Your Vision, With Us.
    </div>
    <div class="SubheadingFR text-center">
    Search For A Service You Need Now!
    </div>
    
    <div class="input-group">
  <input type="text" class="form-control" placeholder="Search For A Freelancer" aria-label="" aria-describedby="basic-addon1">

    <button class="btn btn-light" type="button"><img src={{ Vite::asset('resources/Images/search.png') }} alt="" class="w-100 h-100"></button>
  
</div>
        </div>

        <div class="FR-section">
           <div class="HeadingCategory text-black mb-5">
            Categories
           </div>

           <div class="d-flex flex-row gap-1">
            <x-category-card/>
            <x-category-card/>
            <x-category-card/>
            <x-category-card/>
            <x-category-card/>
           </div>
        </div>

        <div class="FR-section">
        <div class="HeadingFreelancer">
            Popular Freelancers
        </div>
        <div class="freelancer-container flex-row d-flex mt-3 gap-5">
                    <x-FreelancerCard />
                    <x-FreelancerCard/>
                </div>

                <div class="mt-5">
                    <button class="RegisterButton text-white">See More</button>
                </div>
        </div>
    </div>
</body>
@endsection
