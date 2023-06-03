<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
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
            <div class="pull-left">
                <h2>Delete new role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.index') }}" enctype="multipart/form-data">
                Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $user->name }}
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Roles:</strong><br>

                    @foreach ($user->roles as $role) 
                    {{ $role->name }} 
                    @endforeach

                    @error('countrycode')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $user->email }}
                    @error('district')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <form action="{{ route('destroyrole',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Delete role:</strong><br>
                <div class="form-group">
                    <select class="form-control" name="role">
                        @foreach ($user->roles as $role)
                    
                            <option value="{{ $role->id }}"> 
                    
                               {{ $role->name }}
                    
                            </option>
                    
                        @endforeach    
                    
                    </select>
                    <button type="submit" class="btn btn-primary ml-3">Delete Role</button>
                </form>
                    @error('countrycode')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            
        </div>
    
</div>
</body>
</html>