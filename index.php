<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="sec/1.JPEG">
    <link rel="icon" type="image/png" sizes="32x32" href="sec/1.JPEG">
    <link rel="icon" type="image/png" sizes="16x16" href="sec/1.JPEG">
    <link rel="manifest" href="statics/site.webmanifest">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Welcome To Spark Bank</title>
   
</head>
<body style="background-color:lightblue;">
<div id="container">

<?php include 'spin.php'; ?>


<style>
    .nav-link:hover {
        text-decoration: underline;
    }

    .mybtn {
        margin-bottom: 10px;
        box-shadow: 2px 2px 10px black;
        border-radius: 30px;
        background-color: white;
        font-weight: bold;
        color: black;
    }

    .mybtn:active {
        background-color: black;
        color: white;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
    style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
    <div class="container-fluid">
        <a href="index.php"><img src="sec/1.JPEG" alt=""
                style="height: 80px; margin-left:25px; margin-top:10px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <b>
            <ul class="navbar-nav ">
                <li class="nav-item nav-links" style="margin-left:15px;">
                    <a class="nav-link active text-nowrap" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item" style="margin-left:15px; ">
                    <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                </li>
                <li class="nav-item" style="margin-left:15px;">
                    <a class="nav-link text-nowrap" href="all_cust.php#">View All Customers</a>
                </li>
                <li class="nav-item" style="margin-left:15px;">
                    <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                </li>
                <li class="nav-item" style="margin-left:15px;">
                    <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                </li>
                <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                    <a class="nav-link text-nowrap" href="about_us.php#">About Us</a>
                </li>
            </ul>
        </b>
    </div>
</nav>

<div style="color:white; height:200px; width: 100%; padding:10% 2% 2% 2%; background-color:#4C8E84;">
    <h1  style="animation-direction: alternate-reverse; text-align:center; text-shadow: 2px 2px black">WELCOME TO SPARK BANK</h1>
</div>

<center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Features</b></h1>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                        <img style="border-radius: 50%;" src="sec/people.png" alt="" width="130" height="130"><br><br>
                            <a href="all_cust.php"><button type="button" class="btn btn-outline-light mybtn">View
                                    Customers</button></a><br>
                            <h6>Here, you can watch every customer of the bank.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <img style="border-radius: 50%;" src="sec/money.png" alt="" width="130" height="130"><br><br>
                            <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                            <h6>Here, you can send money from your account.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <img style="border-radius: 0%;" src="sec/check.png" alt="" width="130" height="130"><br><br>
                            <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                    Balance</button></a><br>
                            <h6>Here, you can check the remaining balance in your account.</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>
     
</div>
</body>
</html>