<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
          <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
        </li>
        
      </ul>
    </div>
r
  </nav>

  <!-- Sidebar -->
  <div id="sidebar">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="{{route('Admin.Adminhome')}}">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Admin.AdminCreate') }}">Create Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Messages</a>
      </li>
    </ul>
  </div>

  <!-- Content -->
  <div id="content">
   <h1>..............................................................................................</h1>
    <div class="row">
    @foreach ($tickets as $ticket)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 19rem;">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h2 class="card-title"><b>{{ $ticket->title }}</b>
                        </h2>
                    <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ $ticket->description }}</li>
    <li class="list-group-item"><h5>Ticket Create = {{$ticket ->created_at}}</h5></li>
    <li class="list-group-item"><h5>Ticket Update ={{$ticket ->updated_at}}<h5</li>
  </ul>
                    <p class="card-text"><b></b></p>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>

  <!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
