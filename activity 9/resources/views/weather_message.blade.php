<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspirational Quotes</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="fs-3 p-3 bg-light text-dark">
    @component('mail::message')
        <h1>Chennai Weather  : {{ $details['chennai_weather'] }}</h1>
        <h1>Mumbai Weather  : {{ $details['mumbai_weather'] }}</h1>
        <h1>Delhi Weather  : {{ $details['delhi_weather'] }}</h1>
        <h1>Bangalore Weather  : {{ $details['bangalore_weather'] }}</h1>
        <h1>Kolkata Weather  : {{ $details['kolkatta_weather'] }}</h1>
    @endcomponent
  
    </div>

</body>

</html>