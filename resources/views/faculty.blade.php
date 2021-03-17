<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="student-app\resources\views\welcome.blade.php">home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/contact">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/faculty">Faculty</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>
<div class="container">
        <div class="row">
        <div class="col col-12 col-sm-6 col-md-4 col-lg-6 col-xl-12 col-xxl-12">
      <table class="table table-borderless">
          
      <tr>
          <td>Faculity  Name</td>
          <td><input type="text" class="form-control"></td>
      </tr>
      <tr>
          <td>Department</td>
          <td><input type="text" class="form-control"></td>
      </tr>
      <tr>
          <td>Address</td>
          <td><input type="text" class="textarea form-control"></td>
      </tr>
      <tr>
          <td>phone</td>
          <td><input type="text" class="textarea form-control"></td>
      </tr>
      <tr>
          <td>Edu Qualification </td>
          <td><input type="text" class="textarea form-control"></td>
      </tr>
      <tr>
          <td>college</td>
          <td><input type="text" class="form-control"></td>
      </tr>
      <tr>
          <td></td>
          <td><button class="btn btn-success">Submit </button></td>
      </tr>
      </div>
      </div>
      </div>
  
  </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
</body>
</html>