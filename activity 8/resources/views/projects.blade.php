@extends('header')


@section('content')

<div id="projects" style="background-color: white;">

    <div class="row p-3 border-bottom">
        <img src="{{asset('images/projects.gif')}}" class="col-4 ms-5" id="project-gif" alt="projects">

        <h1 class="col-8" id="project-title">PROJECTS</h1>
    </div>


    <div class="projects row border-bottom text-center pt-3 m-2">

        <div class="col-4 border-end">
            <img src="{{asset('images/certificate_generator.png')}}" alt="">

            <p class="pt-2 fs-4 text-secondary fw-bolder"> CERTIFICATE GENERATOR USING PYTHON </p>

            <div>
                <p class="fs-5 pt-4"> This project generates the certificate for the data present in excel sheet. It is build using python and it include the python library FPDF(generates certificate in pdf form) and XLRD(to read the data from excel sheet).
                    It generates the certificate for as many as users present in the excel sheet
                </p>
            </div>


        </div>
        <div class="col-4 border-end">
            <img src="{{asset('images/text_emotion.jpg')}}" alt="">

            <p class="pt-2 fs-4  text-secondary fw-bolder"> TEXT EMOTION DETECTION USING MACHINE LEARNING </p>

            <div>
                <p class="fs-5 "> This projects detects the emotion from the text given by the user. It is built using the python language. The flask is used to integrate the web page and machine learning model. Algorithms is logistic regression, random forest are used to predict the emotion. The recommendation system is also included in this project. So for the detected emotion, song, video or quotes is recommended
                </p>
            </div>

        </div>
        <div class="col-4">
            <img src="{{asset('images/training_dept.png')}}" alt="">

            <p class="pt-2 fs-4  text-secondary fw-bolder"> TRAINING DEPARTMENT PAGE USING REACTJS </p>

            <div>
                <p class="fs-5"> This training page consists of 4 courses which is built using reactjs framework. Clicking on the particular course will redirect to a page which provides more information about it. The detailed information about a particular course is given in this page.

                </p>
            </div>

        </div>

    </div>

    <div class="text-center text-primary fs-3 fw-bolder  pt-3">
        <p> To know more about my projects</p>
        <p> Visit my <img src="{{asset('images/fingerdown.gif')}}" alt="fingerdowngif" style="width: 60px; height:60px;"> </p>

        <a href="https://github.com/SATHISHKUMAR-01">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
            </svg>
        </a>
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