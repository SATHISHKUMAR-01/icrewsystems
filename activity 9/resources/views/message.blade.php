<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspirational Quotes</title>
</head>

<body>
    <div class="fs-3 p-3 bg-light text-dark">
    @component('mail::message')
        <h1>{{ $details['author'] }}</h1>
        <p>{{ $details['quote'] }}</p>
    @endcomponent
  
    </div>

</body>

</html>