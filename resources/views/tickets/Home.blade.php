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
r
  </nav>

  <!-- Sidebar -->
  <div id="sidebar">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('tickets.home') }}">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tickets.create') }}">Create Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Messages</a>
      </li>
    </ul>
  </div>

  <!-- Content -->
  <div id="content">
    <h2>Main Content</h2>
    <p>This is the main content area.</p>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('success'))
@if(session('title'))
   <h2>Your Ticket is </h2> <h1>{{ session('title') }}!</h1>
@endif
@endif

  </div>

  <!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
