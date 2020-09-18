<?php

$id = $_GET['id'];

$content = file_get_contents("./files/$id.txt");
$content = explode('||',$content);
$user       = $content[0];
$password   = $content[1];

$flag = false;
if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $errorUser = '';
    if (checkEmpty($user)) {
        $errorUser = "<i id='emailHelp' class='form-text text-muted'>User is not empty</i>";
    }
    if(checkLength($user, 5, 20)){
        $errorUser .= "<i id='emailHelp' class='form-text text-muted'>Isvalid user (user > 6 characters)</i>";
    }

    $errorPassword = '';
    if (checkEmpty($password)) {
        $errorPassword = "<i id='emailHelp' class='form-text text-muted'>Password is not empty</i>";
    }
    if(checkLength($password, 5, 20)){
        $errorPassword .= "<i id='emailHelp' class='form-text text-muted'>Isvalid password (password > 6 characters)</i>";
    }

    if($errorUser == '' && $errorPassword == ''){
        $data = $user . '||' . $password;
        $filename = './files/' . $id. '.txt';
        if(file_put_contents($filename, $data)){
            $user			= '';
            $password	= '';
            $flag			= true;
        }
    }
}

?>
<h5 class="display-4">Edit user</h5>
<form action="#" method="post" name="add-form">
    <div class="form-group">
        <label for="exampleInputEmail1">User</label>
        <input type="text" class="form-control"
        name="user" 
        placeholder="User ......"
        value="<?php echo $user;?>"
        >
        <?php echo $errorUser ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" 
        name="password"
        placeholder="Password ......"
        value="<?php echo $password;?>">
        <?php echo $errorPassword ?>
    </div>
    <button type="submit" class="btn btn-primary">Registration</button>
</form>
