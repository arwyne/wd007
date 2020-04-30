<!DOCTYPE html>
<html>

<head>
    <title></title>

    <!-- fontawesome icons -->
    <script src="https://kit.fontawesome.com/763fd16ca4.js" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&family=Roboto&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style>

    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

        <a class="navbar-brand" href="./home.php">Welcome, Arwyne!</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCollapse">
            <span><i class="fas fa-angle-double-down toggler-icon"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navCollapse">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="./my-skill-set">Skills</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./my-profile">Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/my-work-experience">Work Experience</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="jumbotron">

                    <h1 class="text-center">My Profile</h1>

                    <div>
                        <label>Firstname: </label>
                        <span>Arwyne</span>
                    </div>

                    <div>
                        <label>Lastname: </label>
                        <span>De Guzman</span>
                    </div>

                    <div>
                        <label>Occupation: </label>
                        <span>Student | Web Developer</span>
                    </div>

                    <div>
                        <label>Hobbies: </label>
                        <span>Programming and Basketball</span>
                    </div>

                    <div>
                        <a href="/my-work-experience">Go to My work Experience</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>