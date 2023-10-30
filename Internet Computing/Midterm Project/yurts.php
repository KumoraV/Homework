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
                margin-right: 0px;
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
        
        <!-- Main Body -->
        <div class="container">
            <div class="row">
                <h2>The Yurts at Pacific Trails</h2>
                <dl>
                    <dt>What is a yurt?</dt>
                    <dd>Our luxury yurts are permanent structures four feet off the ground. Each yurt has 
                        canvas walls, a wooden floor, and a room dome that can be opened.</dd>
                    <dt>How are the yurts furnished?</dt>
                    <dd>Each yurt is furnished with a queen-size bed with down quilt and gas-fired 
                        stove. The lucury camping experience also includes electricity and a sink
                        with hot and cold running water. Shower and restroom facilities are located in the lodge
                    </dd>
                    <dt>What should I bring?</dt>
                    <dd>Bring a sense of adventure and some time to relax! Most guests also pack
                        comfortable walking shoes and plan to dress for changing weather with layers of clothing.
                    </dd>
                </dl>
            </div>
        </div>
        <footer class="bg-dark text-white">
            <div class="text-center">
                <p>Copyright &copy; <?php echo date("Y");?> Cool Crew Resort</p>
                <p>email: cool.crew@mail.montclair.edu</p>
            </div>
        </footer>
    </body>
</html>