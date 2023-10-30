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
        <div class="container" style="margin-top: 15px;">
            <p>The Cool Crew's Resort offers a special lodging experience on the New Jersey Eastern Coast.</p>
            <p>Relax in Serenity with Panoramic views of the Atlantic Ocean.</p>
            <ul>
                <li>Private yurts with decks overlooking the ocean</li>
                <li>Activities lodge with fireplace and gift shop</li>
                <li>Nightly fine dining at the Overlook Cafe</li>
                <li>Heated outdoor pool and whirlpool</li>
                <li>Guided hiking tours of the redwoods</li>
            </ul>
            <br>
            <p>John's Resort</p>
            <p>One Normal Ave, Montclair</p>
            <p>New Jersey NJ 07043</p>
            <p>807-671-3691</p>
        </div>
        <footer class="bg-dark text-white">
            <div class="text-center">
                <p>Copyright &copy; <?php echo date("Y");?> Cool Crew Resort</p>
                <p>email: cool.crew@mail.montclair.edu</p>
            </div>
        </footer>
    </body>
</html>