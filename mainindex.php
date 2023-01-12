<?php require 'partials/_dbconnect.php' ?>
<!doctype html>
<html class="no-js" lang="zxx">

<?php $base_url = 'http://localhost/smartstrii/'; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jony</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url ?>img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo $base_url ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>css/nice-select.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>css/gijgo.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>css/slick.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>css/slicknav.css">

    <link rel="stylesheet" href="<?php echo $base_url ?>css/style.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



        <!-- testimonial_area  -->
        <div class="map">
          <br>
          <br>
          <br>

             <div class="container">
                <div class="row">

                    <div class="col-md">
                      
                <div class="map-card">
                  <iframe width="500" height="300" src="https://api.maptiler.com/maps/basic-v2/?key=Uh2v4RGwAvQy83y3uqvV#1.0/0.00000/0.00000"></iframe>
             
                    
                </div>

                <div class="saviour-card">
                    
                    <div>
                        <h3 class="mapworks">MY SAVIOURS </h3>
                     </div> 
                <div class ="saviour-list">
            
            
            <?php

                $sql = "SELECT * FROM `my_saviours`";
                $result = mysqli_query($con, $sql);

                while($rows = mysqli_fetch_array($result)){
                    $sno = $rows['sno'];
                    $name = $rows['name'];
                    $distance = $rows['distance'];


                    echo '<h4 class = "sl"><img src="'.$base_url.'img/arts/face1.png" class="face">'.$name.'&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$distance.'</h4>';
                
                }
            ?>



                    <!-- <h4 class = "sl"><img src="<?php echo $base_url ?>img/arts/face1.png" class="face"><?php echo $name ?>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $distance ?></h4>
                    <h4 class = "sl"><img src="<?php echo $base_url ?>img/arts/face1.png" class="face"><?php echo $name ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $distance ?></h4>
                    <h4 class = "sl"><img src="<?php echo $base_url ?>img/arts/face1.png" class="face"><?php echo $name ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $distance ?></h4>
                    <h4 class = "sl"><img src="<?php echo $base_url ?>img/arts/face1.png" class="face"><?php echo $name ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $distance ?></h4>
                    <h4 class = "sl"><img src="<?php echo $base_url ?>img/arts/face1.png" class="face"><?php echo $name ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $distance ?></h4> -->
                </div>
                    
                </div>
            </div>
            </div>
            </div>
            </div>

    </div>
            <div class="book_btn d-none d-lg-block">
                <a href="/logout">LogOut</a>
            </div>

        <!-- /testimonial_area  -->

    <!-- link that opens popup -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="<?php echo $base_url ?>js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo $base_url ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo $base_url ?>js/popper.min.js"></script>
    <script src="<?php echo $base_url ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $base_url ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo $base_url ?>js/isotope.pkgd.min.js"></script>
    <script src="<?php echo $base_url ?>js/ajax-form.js"></script>
    <script src="<?php echo $base_url ?>js/waypoints.min.js"></script>
    <script src="<?php echo $base_url ?>js/jquery.counterup.min.js"></script>
    <script src="<?php echo $base_url ?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo $base_url ?>js/scrollIt.js"></script>
    <script src="<?php echo $base_url ?>js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo $base_url ?>js/wow.min.js"></script>
    <script src="<?php echo $base_url ?>js/nice-select.min.js"></script>
    <script src="<?php echo $base_url ?>js/jquery.slicknav.min.js"></script>
    <script src="<?php echo $base_url ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $base_url ?>js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="<?php echo $base_url ?>js/slick.min.js"></script>



    <!--contact js-->
    <script src="<?php echo $base_url ?>js/contact.js"></script>
    <script src="<?php echo $base_url ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo $base_url ?>js/jquery.form.js"></script>
    <script src="<?php echo $base_url ?>js/jquery.validate.min.js"></script>
    <script src="<?php echo $base_url ?>js/mail-script.js"></script>


    <script src="<?php echo $base_url ?>js/main.js"></script>
</body>

</html>