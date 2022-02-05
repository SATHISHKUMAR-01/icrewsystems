@extends('header')

@section('content')


<div id="home" style="background-color: white;">

    <div class="row">
        <div class="col-6 mt-5 text-center">
            <p id="title" class="fs-1 ms-5 mt-5 d-flex justify-content-center fw-bolder">Hi! I am SK</p>
            <p class="fs-1  ms-5 text-secondary d-flex justify-content-center fw-bolder">
                FULL STACK WEB DEVELOPER
            </p>
            <p class="fs-3 text-dark  fw-bolder ms-5"> Computer Engineer </p>
            <p class="fs-5 text-dark  ms-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti explicabo ipsa accusamus, ullam incidunt excepturi animi, placeat dolorem earum impedit aperiam ipsum ex tenetur saepe deserunt nostrum odio adipisci ducimus. </p>
            <a href="/about"><button class="btn btn-outline-dark">Know more !</button></a> 
        </div>

        <div class="col ps-5 ms-2 text-center">
            <img src="{{asset('images/sathish.jpeg')}}" alt="person" style="width: 500px;" class="m-3 rounded-3">
        </div>
    </div>

    <div class="row pt-1">
        <div class="col text-center">
            <div class="m-5 p-2">
                <img src="{{asset('images/tick.gif')}}" alt="tick" style="width: 300px;">
            </div>
        </div>
        <div class="col fs-1 text-center fw-bolder">
            <div class="border-light shadow-lg m-5 p-2">
                <p class="text-primary"> NEVER DREAM </p>
                <p class="text-primary"> ABOUT SUCCESS </p>
                <p> WORK FOR IT</p>
            </div>
        </div>

    </div>

</div>





@endsection('content')