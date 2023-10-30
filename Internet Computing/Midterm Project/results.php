<?php
    // Get data from reservation.php
    $first_name = filter_input(INPUT_POST,'first_name');
    $last_name = filter_input(INPUT_POST,'last_name');
    $address = filter_input(INPUT_POST,'address');
    $city = filter_input(INPUT_POST,'city');
    $state = filter_input(INPUT_POST,'state');
    $zip = filter_input(INPUT_POST,'zip');
    $check_in = filter_input(INPUT_POST,'check_in');
    $check_out = filter_input(INPUT_POST,'check_out');
    $num_people = filter_input(INPUT_POST,'num_people');
    $room_type = filter_input(INPUT_POST,'room_type');
    list($room_type, $room_price) = explode('|', $room_type);
    $phone = filter_input(INPUT_POST,'phone');
    $email = filter_input(INPUT_POST,'email');
    $payment_method = filter_input(INPUT_POST,'payment_method');
    $card_number = filter_input(INPUT_POST,'card_number');
    $special_requests = filter_input(INPUT_POST,'special_requests');

    // Calculations
    $total_days = floor((strtotime($check_out) - strtotime($check_in)) / 86400);
    $tax = 1.07;
    $total_price = $total_days * $room_price * $tax;

    $print_reservation = "Thank You $first_name $last_name for your reservation";
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
    
    <!-- Main Body-->
    <div class="container">
            <h2 class="text-left"><?php echo $print_reservation; ?></h2>
    </div>
    <table class="table table-striped">
                <tr>
                    <td>Number & Street:</td>
                    <td><?php echo $address; ?></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><?php echo $city; ?></td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><?php echo $state; ?></td>
                </tr>
                <tr>
                    <td>Zip Code:</td>
                    <td><?php echo $zip; ?></td>
                </tr>
                <tr>
                    <td>Check-in Date:</td>
                    <td><?php echo $check_in; ?></td>
                </tr>
                <tr>
                    <td>Check-out Date:</td>
                    <td><?php echo $check_out; ?></td>
                </tr>
                <tr>
                    <td>Number of People:</td>
                    <td><?php echo $num_people; ?></td>
                </tr>
                <tr>
                    <td>Room Type:</td>
                    <td><?php echo $room_type; ?></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><?php echo $phone; ?></td>
                </tr>
                <tr>
                    <td>E-mail Address:</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Payment Method:</td>
                    <td><?php echo $payment_method; ?></td>
                </tr>
                <tr>
                    <td>Card Number:</td>
                    <td><?php echo $card_number; ?></td>
                </tr>
                <tr>
                    <td>Special Requests:</td>
                    <td><?php echo $special_requests; ?></td>
                </tr>
                <tr>
                    <td>Total Charge:</td>
                    <td><?php echo "$$total_price"; ?></td>
                </tr>
    </table>

    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="text-center">
            <p>Copyright &copy; <?php echo date("Y");?> Cool Crew Resort</p>
            <p>email: cool.crew@mail.montclair.edu</p>
        </div>
    </footer>
</body>
</html>