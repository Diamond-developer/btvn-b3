<?php
error_reporting(0);
require_once './account/functions.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./style/home/style.css">

    <style>
        .text-muted{
            color: red !important;
        }
    </style>
  </head>
  <body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="font-size: 35px; color: #817979;">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                </svg>
            </div>

            <?php
              $data	= scandir('./account/files');

              if (isset($_POST['submit'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                if ($user == '' && $password == '') {
                  $errorUser = "<i id='emailHelp' class='form-text text-muted'>User is not empty</i>";
                  $errorPassword = "<i id='emailHelp' class='form-text text-muted'>Password is not empty</i>";
                }else{
                  foreach ($data as $key => $value) {
                    if ($value == '.' || $value == '..' || preg_match('#.txt$#imsU' , $value) == false) continue;
                    $content = file_get_contents("./account/files/$value");
                      $content = explode('||',$content);
                      
                    if ($user == $content[0] && $password == $content[1]) {
                      header('location: ./account');
                      break;
                    }
                  }
                $errorLogin = "<i id='emailHelp' class='form-text text-muted'>Login Fail!</i>";
                }
              }
              

            ?>

            <!-- Login Form -->
            <form action="#" method="post">
              <?php echo $errorLogin ?>
              <input type="text" id="login" class="fadeIn second" name="user" placeholder="user....">
              <?php echo $errorUser ?>
              <input type="text" id="password" class="fadeIn third" name="password" placeholder="password....">
              <?php echo $errorPassword ?>
              <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
            <a class="underlineHover" href="./account">Create a new account?</a>
            </div>

        </div>
    </div>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>