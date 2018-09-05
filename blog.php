<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Veoscript | Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/style.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <script src="vendor/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
</head>
<body>
    <?php 
        include 'connection/db.php';
        include 'connection/mysqli.php';
    ?>
    <?php
        // Code to para sa pag save ng mga POSTS
        if(isset($_POST['btnPost'])){

            $txtPost = $_POST['txtPost'];
            $txtGuest = $_POST['txtGuest'];
            $txtCellphoneNo = $_POST['txtCellphoneNo'];
            $Date = date('y-m-d');

            if(strlen($txtCellphoneNo) < 11 || strlen($txtCellphoneNo) > 11){
                $warning = "Invalid Contact No.";
            }
            else{
                DB::query('INSERT INTO blog(GuestName, Contact, Post, Date) VALUES(:GuestName, :Contact, :Post, :Date)', 
                        array(
                            ':GuestName'=>$txtGuest,
                            ':Contact'=>$txtCellphoneNo,
                            ':Post'=>$txtPost,
                            ':Date'=>$Date
                        ));
                        
            $success = "Posted Successfully!";
            }
        }
    ?>
    <?php
        // Code to para sa pag COMMENTS
        if(isset($_POST['btnComment'])){

            $txtID = $_POST['txtID'];
            $txtCommentor = $_POST['txtCommentor'];
            $txtComment = $_POST['txtComment'];

            DB::query('INSERT INTO comment(GuestID, Commentor, Comment) VALUES(:GuestID, :Commentor, :Comment)', 
                    array(
                        ':GuestID'=>$txtID,
                        ':Commentor'=>$txtCommentor,
                        ':Comment'=>$txtComment
                    ));
        }
    ?>
    <div class="container main">
        <?php include 'header.php';?>
        <div class="container-fluid body">
            <div class="container-fluid abx">
                <h1><i class="fa fa-globe"></i>&nbsp;Blog</h1>
                <p class="abx_txt">Anyone can post, anyone can react!</p>
            </div>
            <?php
                if(isset($success)){
                    echo '
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <strong>Success!</strong> &nbsp;'. $success .'
                                </div>
                            </div>
                        </div>
                    ';
                }

                if(isset($warning)){
                    echo '
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-warning">
                                    <strong>Warning!</strong> &nbsp;'. $warning .'
                                </div>
                            </div>
                        </div>
                    ';
                }
            ?>
            <div class="col-sm-4 well post-box">
                <form action="blog.php" method="post">
                    <div class="form-group">
                        <label for="txtPost">What's your Problem?</label>
                        <textarea name="txtPost" id="txtPost" class="form-control" cols="30" rows="5" placeholder="Type here..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtGuest">Who you are?</label>
                        <input type="text" name="txtGuest" id="txtGuest" class="form-control" placeholder="Firstname / Lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="txtCellphoneNo">Your Cellphone No.</label>
                        <input type="number" name="txtCellphoneNo" id="txtCellphoneNo" class="form-control" placeholder="11-Digits Phone No." required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btnPost" id="btnPost" class="form-control btn btn-primary">Post</button>
                    </div>
                </form>
                <p class="note">
                    <strong>Note:&nbsp;</strong>
                    If you have any suggestions or you buy some of my projects. <br> You can post here...
                </p>
            </div>
            <?php
                $result = $mysqli->query("SELECT Id, GuestName, Contact, Post, Date FROM blog ORDER BY Id DESC");

                while($row = $result->fetch_assoc()){
                    
                    $Id = $row['Id'];
                    $GuestName = $row['GuestName'];
                    $Contact = $row['Contact'];
                    $Post = $row['Post'];
                    $Date = $row['Date'];

                    echo '
                        <div class="col-sm-7 well posts-list">
                            <div class="post-header">
                                <h3 class="la">'. $GuestName .'</h3>
                                <p class="lb"><i class="fa fa-user"></i>&nbsp;&nbsp;Guest Name</p>
                                <h5 class="la">'. $Contact .'</h5>
                                <p class="lb"><i class="fa fa-phone"></i>&nbsp;&nbsp;Guest Contact Number</p>
                                <p class="lc"><i class="fa fa-calendar"></i>&nbsp;'. $Date .'</p>
                            </div>
                            <div class="post-body">
                                <textarea name="postDisplay" id="postDisplay" class="form-control" cols="30" rows="5" readonly>'. $Post .'</textarea>
                            </div>
                            <div class="post-footer">
                                <hr>
                                <form action="blog.php" method="post">
                                    <div class="form-group">
                                        <label for="txtCommentor">Commentor</label>
                                        <input type="text" name="txtCommentor" id="txtCommentor" placeholder="Before you comment, Please type your name here..." class="form-control" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="block_none" name="txtID" id="txtID" value='. $Id .' readonly>
                                        <textarea name="txtComment" id="txtComment" class="form-control" placeholder="Your Comment..." cols="30" rows="1" required></textarea>
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default" name="btnComment" id="btnComment"><i class="fa fa-send"></i></button>
                                        </div>
                                    </div>
                                </form>
                    ';     
            ?>                  
            <?php
                // Code para sa pag Count ng mga Comments
                $getComment = DB::query('SELECT COUNT(Comment) AS COMMENT FROM comment WHERE GuestID=:GuestID', array(':GuestID'=>$Id))[0]['COMMENT'];
            ?>
                            <div class="container-fluid comment-box">
                                    <p class="cmb-txt"><i class="fa fa-comment"></i>&nbsp;<span class="count"><?php if(isset($getComment)){echo $getComment;}?></span>&nbsp;Comments</p>
                                    <hr>
                                    <?php
                                        $comment = $mysqli->query("SELECT GuestID, Commentor, Comment FROM comment WHERE GuestID='$Id' ORDER BY Id ASC");

                                        while($row = $comment->fetch_assoc()){
                                            
                                            $GuestID = $row['GuestID'];
                                            $Commentor = $row['Commentor'];
                                            $Comment = $row['Comment'];

                                            echo '
                                                <div class="container-fluid">
                                                    <p class="commentor_name"><i class="fa fa-user"></i>&nbsp;&nbsp;'. $Commentor .'</p>
                                                    <pre class="commentor_post">-&nbsp;'. $Comment .'</pre>
                                                    <hr>
                                                </div>
                                            ';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
            <?php
                }
            ?>
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