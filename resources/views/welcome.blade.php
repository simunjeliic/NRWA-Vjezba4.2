<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="antialiased" style="background-color: #d6d6d6;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Grupa 5</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Početna <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('city.index') }}">City</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('country.index') }}">Country</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('countrylanguage.index') }}">Country Language</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">Roles</a>
        </li>
    </div>
</nav>

<div class="jumbotron">
  <h1 class="display-4">Grupa 5</h1>
  <p class="lead">Napredni razvoj web aplikacija</p>
</div>

</body>
</html>