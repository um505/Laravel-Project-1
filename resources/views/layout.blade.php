<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Maxim Ulyanov</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-white" href="/">Home</a>
          <a class="p-2 text-white" href="/about">About</a>
        
        </nav>
        <a class="btn btn-warning" href="/review">Review</a>
      </div>
<div class="container">
@yield('main_content')
</div>
</body>
</html>