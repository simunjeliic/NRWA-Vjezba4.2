<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add country</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Grupa 5</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Početna <span class="sr-only">(current)</span></a>
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
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add Country</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('country.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('country.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="Name" class="form-control" placeholder="Name">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Continent:</strong><br>
                    <input type="text" name="Continent" class="form-control" placeholder="Continent">
                    @error('continent')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Region:</strong>
                    <input type="text" name="Region" class="form-control" placeholder="Region">
                    @error('region')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Surface Area:</strong>
                    <input type="text" name="SurfaceArea" class="form-control" placeholder="Surface Area">
                    @error('surfacearea')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Year of Independance:</strong>
                    <input type="text" name="IndepYear" class="form-control" placeholder="Year of Independance">
                    @error('indepyear')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Population:</strong>
                    <input type="text" name="Population" class="form-control" placeholder="Population">
                    @error('population')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Life expectancy:</strong>
                    <input type="text" name="LifeExpectancy" class="form-control" placeholder="Life expectancy">
                    @error('lifeexpectancy')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>GNP:</strong>
                    <input type="text" name="GNP" class="form-control" placeholder="GNP">
                    @error('gnp')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>GNPOld:</strong>
                    <input type="text" name="GNPOld" class="form-control" placeholder="GNPOld">
                    @error('gnpold')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Local name:</strong>
                    <input type="text" name="LocalName" class="form-control" placeholder="Local name">
                    @error('localname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Government form:</strong>
                    <input type="text" name="GovernmentForm" class="form-control" placeholder="GovernmentForm">
                    @error('governmentform')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Head of State:</strong>
                    <input type="text" name="HeadOfState" class="form-control" placeholder="HeadOfState">
                    @error('headofstate')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Capital:</strong>
                    <input type="text" name="Capital" class="form-control" placeholder="Capital">
                    @error('capital')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Code 2:</strong>
                    <input type="text" name="Code2" class="form-control" placeholder="Code 2">
                    @error('code2')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>
</body>
</html>