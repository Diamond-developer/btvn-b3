<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .text-muted{
            color: red !important;
        }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="./index.php">Home</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Homework</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a class="dropdown-item" href="#">Bai 1</a>
                      <a class="dropdown-item" href="#">Bai 2</a>
                      <a class="dropdown-item" href="#">Bai 3</a>
                  </div>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
          </form>
      </div>
  </nav>
    <div class="row">
        <div class="col-lg-6 col-md 6 col-6">
            <div class="container" style="padding: 50px;">
            
            <?php
                require_once 'functions.php';
                include './controller.php';
            ?>

            </div>
        </div>
        <div class="col-lg-6 col-md 6 col-6">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $data	= scandir('./files');
                $i = 0;

                foreach ($data as $key => $value) {
                    if ($value == '.' || $value == '..' || preg_match('#.txt$#imsU' , $value) == false) continue;

                    $content = file_get_contents("./files/$value");
                    $content = explode('||',$content);
                    $user       = $content[0];
                    $password   = $content[1];
                    $id         = substr($value, 0, 5);
            ?>
                <tr>
                    <th scope="row"><?php echo $i ?></th>
                    <td><?php echo $content[0] ?></td>
                    <td><?php echo $content[1] ?></td>
                    <td>
                        <a href="index.php?id=<?php echo $id;?>&&page=edit">Edit</a> |
                        <a href="delete.php?id=<?php echo $id;?>">Delete</a>
                    </td>
                    
                </tr>
            <?php
                    $i++;
                }
            ?>
            </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>