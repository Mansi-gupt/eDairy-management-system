<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>e-Diary Management System</title>
    <link href="/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            font-family: "Source Sans 3", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .main-container {
            width: 100%;
            height: 100vh;
            background-color: #E1EFFF;
        }

        .main-img {
            max-width: 100%;
        }


        .main-row {
            display: flex;
            justify-content: center;
        }

        .main-row p,
        .main-row h1 {
            width: 90%;
            color: #1F5692;
            font-size: 3rem;
            /* text-align: center; */
        }

        .main-row p {
            font-size: 1.5rem;
            padding-top: 1rem;
        }

        .column {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 1rem;
        }

        .btn {
            border: 3px solid #1F5692;
            color: #1F5692;
            padding: 10px 25px;
            text-decoration: none;
            margin-top: 20px;
            border-radius: 20px;
            /* transition: all linear 1s; */
            font-weight: bold;
        }

        .btn:hover {
            background-color: #1F5692;
            color: white;
        }

        @media only screen and (max-width: 800px) {
            .main-row {
                flex-direction: column;
            }

            .main-container {
                height: 100%;
            }

            .main-row p,
            .main-row h1 {
                font-size: 2rem;
            }

            .main-row p {
                font-size: 1rem;
                padding-top: .6rem;
            }
        }

        /* steps section */
        .step-container {
            background-color: white;
            padding: 2rem;
        }

        .step-img {
            width: 80%;
        }

        .column h3 {
            font-size: 2rem;
            margin-top: 1rem;
        }

        .col-md-3 p {
            text-align: center;
            font-size: 1rem;
        }

        .main-row h2 {
            margin: 3rem;
            font-size: 3rem;
            text-align: center;
        }

        .step-row p {
            text-align: center;
            position: relative;
            /* bottom: -6rem; */
            margin-top: 2rem;
        }

        /* footer section */
        .footer-container {
            background-color: #6F5ACD;
        }

        .box {
            background-color: white;
            padding: 50px;
            border-radius: 25px;
            color: black;
            width: 85%;
            font-size: 1rem;
        }

        .links a,
        .links h2 {
            display: block;
            color: white;
            font-size: 1rem;
        }

        .links h2 {
            font-size: 2rem;
            color: #FF93DD;
        }

        .footer-row {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand pl-5" href="#">e-Diary</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">sign up</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container-fluid main-container">
        <div class="row main-row">
            <div class="col-md-6 column">
                <h1>
                    Capture Your Thoughts, Anytime, Anywhere
                </h1>
                <p>
                    Say hello to your new virtual sanctuary where your words are safe, your privacy is paramount, and
                    your stories are beautifully preserved.
                </p>
                <a class="nav-link btn" href="login.php">
                    start writting now
                </a>
            </div>
            <div class="col-md-6 column">
                <img src="assets/img/main.png" alt="" class="img-fluid main-img">
            </div>
        </div>
    </div>
    <div class="container-fluid main-container step-container">
        <div class="row main-row">
            <h2>Start Writing Your diary Today</h2>
        </div>
        <div class="row main-row">
            <div class="col-md-3 column">
                <img src="assets/img/one.png" alt="" class="img-fluid step-img">
                <h3>step 1 </h3>
                <p>
                    register with us.
                </p>
            </div>
            <div class="col-md-3 column">
                <img src="assets/img/two.png" alt="" class="img-fluid step-img">
                <h3>step 2</h3>
                <p>
                    login to proceed.
                </p>
            </div>
            <div class="col-md-3 column">
                <img src="assets/img/three.png" alt="" class="img-fluid step-img">
                <h3>step 3</h3>
                <p>
                    create categories.
                </p>
            </div>
            <div class="col-md-3 column">
                <img src="assets/img/four.png" alt="" class="img-fluid step-img">
                <h3>step 4</h3>
                <p>
                    enjoy notes!
                </p>
            </div>
        </div>
        <div class="row main-row step-row">
            <p>Ready to embark on your digital diary journey? <a class="" href="login.php">
                    Sign up now !
                </a></p>
        </div>
    </div>
    <div class="container-fluid main-container footer-container">
        <div class="row main-row footer-row">
            <h2>Start Writing Your diary Today</h2>
        </div>
        <div class="row main-row">
            <div class="col-md-6 column">
                <img src="assets/img/footer.png" alt="" class="img-fluid ">
            </div>
            <div class="col-md-6 column">
                <div class="box">
                    <p>Ready to embark on your digital diary journey? Sign up now and start capturing your thoughts,
                        feelings, and memories in your own personal online diary. Your story awaits - begin writing it
                        today.</p>
                </div>
                <div class="links">
                    <h2>Quick links</h2>
                    <a class="" href="index.php">
                        home
                    </a>
                    <a class="" href="login.php">
                        log in
                    </a>
                    <a class="" href="registration.php">
                        Sign up
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>