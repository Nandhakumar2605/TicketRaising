<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }

    #sidebar {
      height: 100vh;
      width: 250px;
      background-color: #343a40;
      color: #fff;
      position: fixed;
      padding-top: 56px;
    }

    #content {
      margin-left: 250px;
      padding: 15px;
    }

    #centered-form {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .custom-form {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .custom-form label {
      font-weight: bold;
    }

    .custom-form textarea,
    .custom-form input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    .custom-form button {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('Admin.Adminlogin')}}">Admin <span class="sr-only">(current)</span></a>
        </li>
        
      </ul>
    </div>
  </nav>

  <!-- Sidebar -->
  <div id="sidebar">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="{{route('Admin.Adminhome')}}">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tickets.create') }}">Create Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Admin.message')}">Messages</a>
      </li>
    </ul>
  </div>

  <!-- Content -->
  <div id="content">
    <div id="centered-form">
      <div class="custom-form">
      
                    <h2>Admin Login</h2><br>
                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        {!! implode('',$errors->all('<li class="list-group-item bg-danger">:message</li>')) !!}
                    </ul>
                @endif
                    <form method="POST" action="/authenticate">
                        <div class="form-group">
                            <label for="">Email <input class="form-control" type="text" name="email"> </label>
                        </div>
                        <div class="form-group">
                            <label for="">Password <input class="form-control" type="password" name="password"> </label>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success" value="Login">
                        </div>
                        @csrf
                    </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>