<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="text-center fs-1 p-4">
        Inspirational Quotes Generator
    </div>
    <div class="text-center fs-3 text-secondary">
        It will generate inspirational quotes for every 5 minutes to the given email.
    </div>
    <form action="/sendquotes" method="POST" class="text-center m-auto border shadow-lg p-3 w-25 mt-3 ">
        @csrf
        <label class="form-label">Enter your email address</label>
        <input type="email"  name="email" class="form-control w-auto m-auto " placeholder="Email...">
        <input type="submit" class="btn btn-dark mt-2" value="SUBMIT">
    </form>

</body>

</html>