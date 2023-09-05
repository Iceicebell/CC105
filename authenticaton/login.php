<head>  
    <title>Log in </title>  
    <link rel = "stylesheet" href = "authentication.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>  
    <div class="container">    
         <div id="logo">
            <h1 class="logo">Log in</h1>
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
                    <form  action="login_action.php" onsubmit = "return validation()" method = "POST">  
                        <h1>Log in</h1>
                                <input type = "text" name="username" class="update" placeholder="Username"/> 
                                <h2>USERNAME</h2> 
                                <input type = "password" name="password" class="update" placeholder="Password"/>  
                                <h2>PASSWORD</h2>
                                <input type =  "submit" class="btn" id = "btn" value = "Login" name="login"/>  
                    </form>  
                </div>
        </div>

    </div>  
</body>

<script>
    function validation()  
            {  
                var id=document.f1.name.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
</script>