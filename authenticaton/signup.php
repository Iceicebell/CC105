<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pharmacy Management</title>
	<link rel="stylesheet" href="authentication.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div id="logo">
            <h1 class="logo">UPDATE</h1>
            <div class="CTA">
                <h1>VINCI.ENT</h1>
            </div>
        </div>

        <div class="leftbox">
            <nav>
                <a href="#" class="active">
                    <i class="fa-sharp fa-solid fa-gear"></i>
                </a>
                <a href="../suppliers.php" class="active">
                    <i class="fa-sharp fa-solid fa-bars"></i>
                </a>
            </nav>
        </div>
            <div class="rightbox">
                <div class="profile">
                    <form method="POST">
                        <input type="hidden" name="id" value="">
                            <h1>Supplier</h1>
                            <h2>NAME</h2>
                        <input class="update" name="name" value=""> </input>
                            <h2>ADDRESS</h2>
                        <input class="update" name="address" value=""> </input>
                            <h2>NO.</h2>
                        <input class="update" name="num" value=""> </input>
                            <h2>EMAIL</h2>
                        <input class="update" name="email" value=""> </input><button class="btn" type="submit">CHANGE</button>
                    </form>
                </div>

            </div>
    </div>

    <footer></footer>
</body>
</html>
