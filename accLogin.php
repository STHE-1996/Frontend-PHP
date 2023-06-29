<?php      
    $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "register_db";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);  
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from customer where email = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           
           ?>
            <!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="css/styling.css">
</head>
<body>
    <div class="main" style="background-image:url('image/4.jpg')">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MAIN PAGE</h2>
            </div>
            <div class="menu">
                <ul>
                    
                    <li><a href="#">USAGE HISTORY</a></li>
                    <li><a href="#">HISTORY</a></li>
                    <li><a href="#">AVAILABLE FUNDS</a></li>
                    <li><a href="#">FUNDS</a></li>
                        <li><a href="checkout_form.html">PAYMENTS</a></li>
                    <li><a href="index.php">HOME</a></li>
                    
                </ul>
            </div>  
            
        </div>

    </div>
</body>
</html>

<?php  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  