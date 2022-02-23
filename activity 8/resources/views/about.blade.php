@extends('header')


@section('content')

<div id="about" style="background-color: white;">



    <h1 class="fs-1 fw-bolder pt-5  text-center"><span id="about_title"> About me !!! </span></h1>

    <div class="text-center">
        <img src="{{asset('images/profile.gif')}}" alt="profile">
    </div>

    <div class="text-center fs-3 text-secondary p-2">
        <p>Hi I am SathishKumar <strong>SK</strong>, from Chennai</p>
        <p> <strong> Passionate </strong> computer engineer graduate, who is very enthusiastic on tech side</p>
        <p> Enriched with the knowledge about <strong> programming languages and web development</strong></p>
        <p> Have <strong>Hands-On</strong> experience on Python, Laravel, PHP, HTML, CSS, Java, C </p>
    </div>

    <div>
        <a href="/" class="ps-5" > 
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
        </a>

    </div>



</div>












@endsection('content')