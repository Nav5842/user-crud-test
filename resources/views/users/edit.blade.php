<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="{{ URL::to('users') }}">Create User</a>
</nav>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="{{ URL::to('users',$user->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" id="email" value="{{ $user->email }}">
            </div>

            <div class="form-group">
                <label for="mobile_phone">Mobile Phone:</label>
                <input type="number" name="mobile_phone" class="form-control" placeholder="Enter Phone" id="mobile_phone" value="{{ $user->mobile_phone }}">
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</div>
</body>
</html>