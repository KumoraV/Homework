<?php
    $first_name = filter_input(INPUT_POST,"first_name");
    $phone = filter_input(INPUT_POST,"phone");
    $email = filter_input(INPUT_POST,"email");
    $your_comments = filter_input(INPUT_POST,"your_comments");

    // Check wether empty
    $print_comment = '';
    // If client did not input anything.
    if (empty($first_name) && empty($phone) && empty($email)  && empty($your_comments))
    {
        $print_comment = "Dear guest, please enter your comments";
    }
    // If client only input comment.
    elseif (empty($first_name) && empty($phone) && empty($email) && isset($your_comments))
    {
        $print_comment = "Dear guest, thank you for your comments.";
    }
    // If client inputs name.
    elseif (!empty($first_name))
    {
        $print_comment = "Dear $first_name, thank you for your comments.";
    }
    // If client inputs email.
    elseif (!empty($email))
    {
        $print_comment = "Dear $email, thank you for your comments.";
    }
    // If client doesn't have name or email.
    else
    {
        $print_comment = "Dear guest, thank you for your comments.";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            .container
            {
                margin-left: 0px;
            }

            .comment-form input[type="text"],
            .comment-form input[type="tel"],
            .comment-form input[type="email"],
            .comment-form textarea {
                width: 100%;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1 class="text-center">The Cool Crew's Resort</h1>

        <!-- LOGO -->
        <nav class="navbar navbar-expand-sm bg-dark">
            <a class="navbar-brand" href="index.html">
                <img class="logo" src="lionLogo.jpg" alt="lionLogo">
            </a>
            <!-- Navbar Button-->
            <div class="hamburger" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <!-- Navbar Links-->
            <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="navbar-nav">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="yurts.php">Yurts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="activities.php">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comments.php">Comments</a>
                    </li>
                </ul>
            </div>
        </nav>
      
        <div class="container">
            <h2 class="text-left"><?php echo $print_comment; ?></h2>
        </div>
        <footer class="bg-dark text-white">
            <div class="text-center">
                <p>Copyright &copy; <?php echo date("Y");?> Cool Crew Resort</p>
                <p>email: cool.crew@mail.montclair.edu</p>
            </div>
        </footer>
    </body>
</html>