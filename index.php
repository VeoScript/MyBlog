<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Veoscript | Home</title>
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
        <div class="container-fluid body">
            <div class="container-fluid a">
                <p class="profile">
                    <img src="images/me.jpg" alt="Jerome Villaruel | VEOSCRIPT" width="100" class="img-responsive img-rounded">
                </p>
                <p class="wel_mess">
                    Hi! My name is <strong class="me"><a href="http://facebook.com">Jerome Villaruel</a></strong> and I'm a
                    multi-disciplinary UX and UI Designer, Programmer and Web Developer.
                </p>
                <p class="wel_mess2">
                    To say I dabble would be understatement, design is my passion. I have a range of skills in the creative fields
                    specializing in user experience & user interface design, interactive design and front-end development.
                    I love solving problems and creating beautiful functional work.
                    <br><br>
                    <i class="wel_mess3">If you are interested, you can visit my website anytime, anywhere...</i>
                    <p class="me">www.veoscript_online.com - Jerome Villaruel | VEOSCRIPT</p>
                </p>
                <div class="btn-group">
                    <p class="f">Follow me on</p>
                    <a href="http://github.com"><i class="fa fa-github"></i></a>
                    <a href="http://facebook.com"><i class="fa fa-facebook"></i></a>
                    <a href="http://twitter.com"><i class="fa fa-twitter"></i></a>
                    <a href="http://googleplus.com"><i class="fa fa-google-plus"></i></a>
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