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
        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="room_type"],
        input[type="payment_method"],
        input[type="email"],
        input[type="tel"],
        select 
        {
            width: 200px;
        }
        .container
        {
            margin-left: 0px;
        }
        form 
        {
            max-width: 1200px;
            margin: auto;
        }
        .form-group 
        {
            margin-bottom: 15px;
            display: flex;
            align-items: left;

        }
        .form-control
        {
            margin-bottom: 15px;
            display: flex;
            align-items: left;
            margin-left: 0;
        }
        label 
        {
            flex: 1;
        }
        input,
        select
        {
            flex: 2;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .btn-container 
        {
            display: flex;
            flex-direction: row;
            margin-left: 200px;
            margin-bottom: 10px;
            justify-content: flex-start;
        }
        @media (max-width: 576px) 
        {
            .form-group 
            {
                flex-direction: column;
            }
            .btn-container 
            {
                margin-left: 0;
                justify-content: flex-start;
            }
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
        <h2 class="text-left">Reservation at The Cool Crew's Resort</h2>
        <form action="results.php" method="post" class="comment-form" style="display: flex; flex-direction: column;">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" autofocus required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="address">Number & Street:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>
            <div class="form-group">
                <label for="zip">Zip Code:</label>
                <input type="text" class="form-control" id="zip" name="zip" required>
            </div>
            <div class="form-group">
                <label for="check_in">Check-in Date:</label>
                <input type="date" class="form-control" id="check_in" name="check_in" required onchange="calculateStayDuration()">
            </div>
            <div class="form-group">
                <label for="check_out">Check-out Date:</label>
                <input type="date" class="form-control" id="check_out" name="check_out" required onchange="calculateStayDuration()">
            </div>
            <div class="form-group">
                <label for="num_people">Number of People:</label>
                <input type="number" class="form-control" id="num_people" name="num_people" required>
            </div>
            <div class="form-group">
                <label for="room_type">Room Type:</label>
                <select class="form-control" id="room_type" name="room_type" required>
                    <option value="King|200">King</option>
                    <option value="Queen|150">Queen</option>
                    <option value="Suite|300">Suite</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="payment_method">Payment Method:</label>
                <select class="form-control" id="payment_method" name="payment_method" required>
                    <option value="MC">MC</option>
                    <option value="VISA">VISA</option>
                    <option value="AMEX">AMEX</option>
                    <option value="Discover">Discover</option>
                </select>
            </div>
            <div class="form-group">
                <label for="card_number">Card Number:</label>
                <input type="text" class="form-control" id="card_number" name="card_number" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="1234-5678-9012-3456" required>
            </div>
            <div class="form-group">
                <label for="special_requests">Special Requests:</label>
                <input type="text" class="form-control" id="special_requests" name="special_requests" style="width: 100%;">
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary" style="width: 150px; background-color: blue; color: white; margin-right: 10px">Reserve a room</button>
                <button type="reset" class="btn btn-secondary" style="width: 90px; background-color: green; color: white;">Clear</button>
            </div>
        </form>
    </div>
    <footer class="bg-dark text-white">
        <div class="text-center">
            <p>Copyright &copy; <?php echo date("Y");?> Cool Crew Resort</p>
            <p>email: cool.crew@mail.montclair.edu</p>
        </div>
    </footer>
</body>
</html>