
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap 5 Registration Form Example</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        
        
    </head>

    <body>
        <div class="container-fluid vh-100" style="margin-top:300px">
            <div class="" style="margin-top:200px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Sign in</h3>
                        </div>
                        <div class="p-4">
                            <form action="accLogin.php" method="post">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" name="email"  required="" class="form-control" placeholder="Username">
                                </div>
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" name="password" required="" class="form-control" placeholder="password">
                                </div>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" type="submit" name="submit"><span></span> Sign in</button>
                                </div>
                                <p class="text-center mt-3">Don't have an account?
                                    <li><a href="register.php">Sign up</a></li>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>