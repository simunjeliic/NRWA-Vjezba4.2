
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
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
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </div>
</nav>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of countries</h2>
            </div>
            @if(auth()->check() && auth()->user()->hasAnyRole(['AdminRole', 'SuperAdminRole']))
            <div class="pull-right mb-2">
                <a class="btn btn-primary" href="{{ route('country.create') }}">Add new country</a>
            </div>
            @endif
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Continent</th>
                <th>Region</th>
                <th>Population</th>
                @if(auth()->user()->hasRole('SuperAdminRole'))
                <th width="150px">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
            <tr>
                <td>{{ $country->Code }}</td>
                <td>{{ $country->Name }}</td>
                <td>{{ $country->Continent }}</td>
                <td>{{ $country->Region }}</td>
                <td>{{ $country->Population }}</td>
                @if(auth()->user()->hasRole('SuperAdminRole'))
                <td>
                    <form action="{{ route('country.destroy',$country->Code) }}" method="Post">
                        <a class="btn btn-primary"href="{{ route('country.edit',$country->Code) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <!-- button type="submit" class="btn btn-danger">Delete</button -->
                    </form>
                </td>
                @endif
            </tr>
            
            @endforeach
        </tbody>
    </table>
    
    {{ $countries->links('pagination::bootstrap-4') }}
</div>
</body>
</html>