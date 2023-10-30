<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
        
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
        <h2 class="text-left">Activities at Jersey Shore</h2>

        <div class="row">
            <div class="col-sm-6 mb-4 mb-sm-2 mb-md-2 mb-lg-2 mb-xl-2">
                <div>
                    <a href="island.jpg" data-lightbox="activities" data-title="Island Image">
                        <img src="island.jpg" alt="island">
                    </a>
                </div>
                <div>
                    <a href="island.jpg" style="color: blue; margin-left: 10px;">Relaxing</a>
                </div>
            </div>
            <div class="col-sm-6 mb-4 mb-sm-2 mb-md-2 mb-lg-2 mb-xl-2">
                <div>
                    <a href="hiking.jpg" data-lightbox="activities" data-title="Hiking Image">
                        <img src="hiking.jpg" alt="hiking">
                    </a>
                </div>
                <div>
                    <a href="hiking.jpg" style="color: blue; margin-left: 10px;">Hiking</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-4 mb-sm-2 mb-md-2 mb-lg-2 mb-xl-2">
                <div>
                    <a href="golf.jpg" data-lightbox="activities" data-title="Golf Image">
                        <img src="golf.jpg" alt="golf">
                    </a>
                </div>
                <div>
                    <a href="golf.jpg" style="color: blue; margin-left: 10px;">Golfing</a>
                </div>
            </div>
            <div class="col-sm-6 mb-4 mb-sm-2 mb-md-2 mb-lg-2 mb-xl-2">
                <div>
                    <a href="treeBed.jpg" data-lightbox="activities" data-title="Tree Bed Image">
                        <img src="treeBed.jpg" alt="treeBed">
                    </a>
                </div>
                <div>
                    <a href="treeBed.jpg" style="color: blue; margin-left: 10px;">Camping</a>
                </div>
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