<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Veoscript | About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/style.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <script src="vendor/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
</head>
<body>
    <div class="container main">
        <?php include 'header.php';?>
        <div class="container-fluid body text-left">
            <div class="container-fluid abx">
                <h1><i class="fa fa-question"></i>&nbsp;About</h1>
            </div>
            <div class="container-fluid a">
                <div class="container-fluid">
                    <p class="profile">
                    <img src="images/me4.jpg" alt="Jerome Villaruel | VEOSCRIPT" width="100" class="img-responsive img-rounded picme">
                        Veo Script
                    </p>
                    <p class="a-txt1">Basic Information&nbsp;&nbsp;&nbsp;<i class="a-txt-i fa fa-arrow-circle-down"></i></p>
                </div>
                <div class="container-fluid myinfo">
                    <p class="x">Jerome Joseph R. Villaruel</p>
                    <p class="y">Name</p>
                    <p class="x">Studied Bachelor of Science in Information Technology <br>
                        @ Southern Leyte State University (Main Campus)
                    </p>
                    <p class="y">College | School</p>
                    <p class="x">September 13, 1998</p>
                    <p class="y">Birthdate</p>
                    <p class="x">Bonifacio St. Brgy. Guerrero Bato, Leyte Philippines</p>
                    <p class="y">Address | Hometown</p>
                    <hr>
                </div>
            </div>    
        </div>
        <div class="container-fluid footer text-center">
            <p class="rights">VEOSCRIPT All rights reserved 2018-2030&nbsp;<i class="fa fa-copyright"></i></p>
            <p class="dev">Designed and Developed by Villaruel Jerome | VEOSCRIPT</p>
        </div>
    </div>

    <!-- Modal for Viewing my Contact Numbers -->
    <div id="contact" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-phone"></i>&nbsp;&nbsp;My Contact Details</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <p class="cd1 text-center">This is my contact number for <i>GLOBE/TM Subscribers</i></p>
                        <p class="cd2 text-center">0975 004 7554</p>
                        <hr>
                        <p class="cd1 text-center">Address Information</p>
                        <p class="cd2 text-center">Bonifacio St. Brgy. Guerrero Bato, Leyte Philippines</p>                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal for Viewing my Contact Numbers -->
</body>
</html>