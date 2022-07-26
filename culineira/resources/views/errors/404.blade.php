<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error 404</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>
</head>
<body style="background:#FFF4eb;">
    <div class="container mt-4 pt-3 text-center">
        <img class="w-50 d-block mx-auto" src="{{asset('assets/storyset/404error.png')}}">
        <p class="display-5" style="color:#eb7336;">Oops! Something is wrong.</p>
    </div>
    <div class="container p-4 w-25 d-block mx-auto text-center" style="background: rgba(255, 0, 0, 0.2);">
        <p><i class="fa-solid fa-circle-info"></i> Page doesn't exist. Please check the URL or back to the previous page</p>
    </div>
</body>
</html>
