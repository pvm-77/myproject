<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>employee form</title>
  </head>
  <body>
  <div class="card text-center">
  <div class="card-header">
    employee details
  </div>
  <div class="card-body">
  <div class="container-fluid">
    <form action="_employeeformhandler.php"  method="POST">
    <div class="mb-3">
    
    <input type="text" class="form-control"   name="fullname" placeholder="fullname">
    
  </div>
  <div class="mb-3">
    
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="email">
    
  </div>
  <div class="mb-3">
    
    <input type="text" class="form-control"  name="designation" placeholder="designation">
    
  </div>
  <div class="mb-3">
    
    <textarea type="textarea" class="form-control"  name="description" placeholder="description"></textarea>
    
  </div>
  <div class="mb-3">
  <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
  </div>
  
  
  <button type="submit" class="btn btn-primary">save to data base</button>
</form>

    </div>
    
    
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>