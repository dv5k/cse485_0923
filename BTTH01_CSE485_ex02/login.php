<!DOCTYPE html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./resources/bootstrap/css/bootstrap.css">
    <script src="./resources/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./resources/css/page_frame.css">
    <link rel="stylesheet" href="./resources/css/custom_items.css">
    <script src="https://kit.fontawesome.com/58854422a4.js" crossorigin="anonymous"></script>
  </style>
</head>
<body>
    <div class="content">
        <?php include './reuse/head_nav_frontend_bar.php' ?>
        
        <div class="login-box">
            <div class="d-flex row align-items-center pb-2 mb-3 border-bottom border-1">
                <div class="col-md-6">
                    <h1>Sign In</h1>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="#" class="btn"><i class="fa-brands fa-square-facebook fa-2xl"></i></a>
                    <a href="#" class="btn"><i class="fa-brands fa-square-google-plus fa-2xl"></i></a>
                    <a href="#" class="btn"><i class="fa-brands fa-square-twitter fa-2xl"></i></a>
                </div>
            </div>
            <div class="mt-3">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <input type="text" class="form-control" placeholder="Password" aria-label="Password">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember Me
                    </label>
                </div>
                <a href="#" class="btn btn-primary d-block justify-content-end">Login</i></a>
            </div>
            <div class="d-flex row text-center pt-3 mt-3 border-top border-1">
                <p>Don't have an account? <a href="#">Sign up</a></p>
                <a href="#">Forgot your password?</a>
            </div>
        </div>

    </div>
    <?php include './reuse/footer.php' ?>
</body>
</html>

