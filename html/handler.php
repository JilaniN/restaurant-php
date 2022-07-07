<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="bg-black text-light">
    <nav class="navbar navbar-expand-lg bg-success opacity-75">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="../index.php"><b>The Prancing Pony</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="bill-of-fare.html">Bill of Fare</a>
                </li>
                <li class="nav-item op">
                <a class="nav-link text-light" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="pictures.html">Pictures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="about.html">About</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>
    <br>
<section class="container justify-content-center">
    <section class="justify-content-center text-center">
        <br>
        <h3 class="mb-5">Contact us</h3>
        </div>
            <?php


        // Database information for connection
        $conn = mysqli_connect("database", "root", "root", "insert");
                    
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $phone = $_POST['phone'];
        $message =filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO form  VALUES (NULL,'$firstname',
            '$lastname','$email','$phone','$message')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for you feedback $firstname !</h3>"
                . "<p>It is much appreciated. We will come back to you if needed. </p>";
            
                    echo nl2br("\n$firstname\n $lastname\n "
                . "$email\n $phone\n $message");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>

        
    </section> 
</section> 
    <script src="application/source/restaurant-css-framework/form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>


