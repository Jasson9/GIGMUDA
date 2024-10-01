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
        <div class="FR-section-1">
    <div class="Heading text-center">
    Execute Your Vision, With Us.
    </div>
    <div class="SubHeading text-center">
    Search For A Service You Need Now!
    </div>
    
    <div class="input-group">
  <input type="text" class="form-control" placeholder="Search For A Freelancer" aria-label="" aria-describedby="basic-addon1">

    <button class="btn btn-light" type="button"><img src={{ Vite::asset('resources/Images/search.png') }} alt="" class="w-100 h-100"></button>
  
</div>
        </div>
    </div>
</body>
@endsection
