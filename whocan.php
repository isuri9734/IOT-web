<?php
session_start();

?>

<html>
<head>
    <title>Who can give blood</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-md bg-danger navbar-dark fixed-top">
        <a class="navbar-brand" href="Web.html">BloodBank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  navbar-md justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="Whocan.php">Who can donate blood</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Whyblood.php">Why donate blood</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="DonationP.php">Donation Process</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Login.php">Login</a>
      </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar end -->
    <section>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card mt-5 p-5">
                        <div class="card-img-top">
                        <h1>Who can donate blood?</h1>
                        <img class="img-fluid mt-2 p-5" src="images\pngg.png">

                        <p style="text-align: justify;">Most people can donate blood. You can donate blood if you:
                            <ul class="a" style="text-align: justify;">
                                <li> are fit and healthy</li>
                                <li>weigh between 7 stone 12 lbs and 25 stone, or 50kg and 158kg</li>
                                <li> are aged between 17 and 66 (or 70 if you have donated blood before</li>
                                <li> are over 70 and have donated a full blood donation in the past two years</li>
                            </ul>
                        </p><br>
                            <h3>How often can I give blood?</h3>
                            <p style="text-align: justify;">
                            Men can give blood every 12 weeks and women can give blood every 16 weeks.</p>

                            <p style="text-align: justify;">Mens are more likely to donate more often than women because:</p>
                            <ul class="a" style="text-align: justify;">
                                <li> men’s additional body weight means they have suitable iron levels</li>
                                <li>they are less likely than women to carry certain immune cells meaning their plasma is more widely usable for transfusions</li>
                                <li> their platelet count is typically higher meaning they are more likely to be accepted as platelet donors</li>
                            </ul> 
                        </p>
                            <p style="text-align: justify;">If you are a woman under 20 and you weigh under 10st 3lb or 65kg or are under 5' 6" or 168cm tall you will need to estimate your blood volume to see if you can give blood. If your weight lies between two of the values shown, please use the nearest lower weight.</p>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>

            </div>
        </div>
          <!-- footer -->
  <footer class="text-muted text-center p-4">
    <div class="container">
      <p>All right reserved. copyright@2020</p>
    </div>
  </footer>
    </section>
</body>

</html>