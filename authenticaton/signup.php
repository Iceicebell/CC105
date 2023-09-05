<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CC 105</title>
	<link rel="stylesheet" href="authentication.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div id="logo">
            <h1 class="logo">SIGNUP</h1>
            <div class="CTA">
                <h1>ChasTEA</h1>
            </div>
        </div>

        <div class="leftbox">
            <nav>
                <a href="#" class="active">
                    <i class="fa-sharp fa-solid fa-gear"></i>
                </a>
                <a href="#" class="active">
                    <i class="fa-solid fa-right-to-bracket"></i>
                </a>
            </nav>
        </div>
            <div class="rightbox">
                <div class="profile">
                    <form method="POST">
                       
                            <h2>USERNAME</h2>
                        <input class="update" name="username" value=""> </input>
                            <h2>PASSWORD</h2>
                        <input class="update" name="password" value=""> </input>
                            <h2>CONFIRM PASSWORD</h2>
                        <input class="update" name="cpassword" value=""> </input>
                        <a class="update" href="#"><h2>FORGET PASSWORD</h2></a>
                        <button class="btn" name="submit" type="submit">SIGNUP</button>
                        <?php
    include_once ("../connection.php");
    $con = connection();

    if(!isset($_SESSION)){
    session_start();
    }

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $user = $con->query($sql) or die($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;
    if ($cpassword == $password) {


        if ($total > 0) {
            ?>
            <h1 class="error">Username is already Taken!</h1>
			<?php
        } else {
            $sql1 = "SELECT * FROM user WHERE username = '$username'";
            $user1 = $con->query($sql1) or die($con->error);
            $row1 = $user1->fetch_assoc();
            $total1 = $user1->num_rows;
            if ($total1 > 0) {
                ?>
				<h1 class="error">Email has an existing account</h1>
				<?php
            } else {
                $sql = "INSERT INTO `user`(`username`,`password`) VALUES ('$username','$password')";
                $con->query($sql) or die($con->error);
                echo header("Location: signup.php");
            }
        }
    }
    else{
        ?>
		<h1 class="error">Password does not match</h1>
		<?php
    }
}
?>
                    </form>
                </div>

            </div>
    </div>

    <footer></footer>
</body>
</html>
