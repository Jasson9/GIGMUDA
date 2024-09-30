@extends('layouts.app')
@section('title')
    <title>Home</title>
@endsection

@section('content')
<body>
  <div>

    <div class="HomeFreelancer flex-wrap" >
      <div class="Heading text-center">

      Your Career Starts Here
      </div>
      <div class="SubHeading text-center">
      Explore Freelancers
      </div>
      <div  class="d-flex justify-content-center align-items-center ">

        <button class="RegisterButton">Daftar Sekarang</button>
      </div>
    </div>

    <div class="w-full h500 bg-primary-subtle d-flex valign">
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
                <button class="RegisterButton w-15">Find Freelancer</button>

                </div>
      </div>

    </div>

    <div class="w-full h500 bg-primary-subtle d-flex valign">
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
                <button class="RegisterButton w-15">Find Freelancer</button>

                </div>
      </div>

    </div>

    <div class="w-full h500 bg-white d-flex valign Heading flex-column">
      Popular Freelancers

      <div>
        <x-FreelancerCard/>
      </div>
    </div>
  </div>
</body>
@endsection


</html>
