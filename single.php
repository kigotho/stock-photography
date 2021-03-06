
<!DOCTYPE HTML>
<html>

<head>
  <title>Ivertise Africa </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <script type="application/x-javascript">
  addEventListener("load", function() {
    setTimeout(hideURLbar, 0);
  }, false);

  function hideURLbar() {
    window.scrollTo(0, 1);
  }
  </script>
  <link href="ph/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- Custom Theme files -->
  <link href="ph/css/style.css" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <!--webfont-->
  <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="ph/js/jquery-1.11.1.min.js"></script>
  <script src="ph/js/menu_jquery.js"></script>
</head>

<body>
  <div class="header" >
    <div class="container">
      <div class="logo">
        <h1><a href="../index.php"><<img src="assets/img/logo.png" alt=""></a></h1>
      </div>
      <div class="top_right" style="color:#177856 !important;">
        <ul>
          <li><a href="users/register.php">Sign Up</a></li>|
          <li class="login">
            <div id="loginContainer"><a href="#" id="loginButton"><span>Log In</span></a>
              <div id="loginBox">
                <form id="loginForm">
                  <fieldset id="body">
                    <fieldset>
                      <label for="email">Email Address</label>
                      <input type="text" name="email" id="email">
                    </fieldset>
                    <fieldset>
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password">
                    </fieldset>
                    <input type="submit" id="login" value="Sign in">
                    <label for="checkbox">
                      <input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                  </fieldset>
                  <span><a href="#">Forgot your password?</a></span>
                </form>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="single">
    <div class="container">

      <div class="single_box1">
        <div class="col-sm-5 single_left">
          <?php
           session_start();
            echo $_SESSION['source'];
            session_unset('source');
          ?>
        </div>
        <div class="col-sm-7 col_6">
          <ul class="size">
            <h3>Size</h3>
            <li><a href="#">S</a></li>
            <li><a href="#">M</a></li>
            <li><a href="#">L</a></li>
            <li><a href="#">XL</a></li>
            <li><a href="#">2XL</a></li>
            <li><a href="#">3XL</a></li>
          </ul>
          <a class="btn_3" href="#">Download this Photo</a>

          <p class="movie_option"><strong>Photo : </strong>5487695478</p>
          <p class="movie_option"><strong>Upload Date : </strong>July 02, 2015</p>

          <?php
            include 'db.inc';

            $query = "SELECT id, keywords, category FROM images";

            if (!($connection = @ mysql_pconnect($hostName,
                                              $username,
                                              $password)))
               showerror();

            if (!mysql_select_db("ivertise_africa", $connection))
               showerror();

            if (!($result = @ mysql_query ($query, $connection)))
               showerror();
          ?>

          <?php

            if ($row = @ mysql_fetch_array($result))
            {
          ?>

              <table>
              <col span="1" align="right">
              <tr>
                <td> <th>description</th></td>
                 <th>File type</th>

              </tr>
          <?php
             do
             {
          ?>
              <tr>
                 <td><?php echo "{$row["keywords"]}";?></td>
                 <td><?php echo "{$row["category"]}";?></td>
              </tr>
          <?php
             } while ($row = @ mysql_fetch_array($result));
          ?>
              </table>
          <?php
            } // if mysql_fetch_array()
            else
               echo "<h3>There are no images to display</h3>\n";
          ?>
        </div>

        <div class="clearfix"> </div>
      </div>
      <h4 class="tag_head">Keywords</h4>
      <ul class="tags_links">
        <li><a href="#">People</a></li>
        <li><a href="#">City</a></li>
        <li><a href="#">Walking</a></li>
        <li><a href="#">Modern</a></li>
        <li><a href="#">Computer</a></li>
        <li><a href="#">Business</a></li>
        <li><a href="#">Tree</a></li>
        <li><a href="#">Motion</a></li>
        <li><a href="#">Gym</a></li>
        <li><a href="#">Men</a></li>
        <li><a href="#">Fashion</a></li>
        <li><a href="#">Industrial</a></li>
        <li><a href="#">Interior</a></li>
        <li><a href="#">Real Estate</a></li>
        <li><a href="#">Food</a></li>
        <li><a href="#">Restaurants</a></li>
        <li><a href="#">Society</a></li>
        <li><a href="#">Traveller</a></li>
        <li><a href="#">Mountain</a></li>
        <li><a href="#">Sitting</a></li>
        <li><a href="#">Discovery</a></li>
        <li><a href="#">Activity</a></li>
        <li><a href="#">Resting</a></li>
        <li><a href="#">Blue</a></li>
        <li><a href="#">France</a></li>
        <li><a href="#">Architecture</a></li>
        <li><a href="#">Europe</a></li>
        <li><a href="#">Building</a></li>
      </ul>
      <div class="tags">
        <h4 class="tag_head">Similar Images</h4>
        <ul class="tags_images">
          <li>
            <a href="#"><img src="ph/images/pic40.jpg" class="img-responsive" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="ph/images/pic41.jpg" class="img-responsive" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="ph/images/pic42.jpg" class="img-responsive" alt="" /></a>
          </li>
          <li>
            <a href="#"><img src="ph/images/pic43.jpg" class="img-responsive" alt="" /></a>
          </li>
          <li class="last">
            <a href="#"><img src="ph/images/pic39.jpg" class="img-responsive" alt="" /></a>
          </li>
          <div class="clearfix"> </div>
        </ul>
      </div>
    </div>
  </div>
  <div class="grid_2">
    <div class="container">
      <div class="col-md-3 col_2">
        <h3>Stock Photo<br>Categories</h3>
      </div>
      <div class="col-md-9 col_5">
        <div class="col_1_of_5 span_1_of_5">
          <ul class="list1">
            <li><a href="stock.html">Abstract</a></li>
            <li><a href="stock.html">Animals/Wildlife</a></li>
            <li><a href="stock.html">The Arts</a></li>
            <li><a href="stock.html">Backgrounds/Textures</a></li>
            <li><a href="stock.html">Beauty/Fashion</a></li>
            <li><a href="stock.html">Buildings/Landmarks</a></li>
          </ul>
        </div>
        <div class="col_1_of_5 span_1_of_5">
          <ul class="list1">
            <li><a href="stock.html">Business/Finance</a></li>
            <li><a href="stock.html">Celebrities</a></li>
            <li><a href="stock.html">Editorial</a></li>
            <li><a href="stock.html">Education</a></li>
            <li><a href="stock.html">Food and Drink</a></li>
            <li><a href="stock.html">Healthcare/Medical</a></li>
          </ul>
        </div>
        <div class="col_1_of_5 span_1_of_5">
          <ul class="list1">
            <li><a href="stock.html">Holidays</a></li>
            <li><a href="stock.html">Illustrations/Clip-Art</a></li>
            <li><a href="stock.html">Industrial</a></li>
            <li><a href="stock.html">Interiors</a></li>
            <li><a href="stock.html">Miscellaneous</a></li>
            <li><a href="stock.html">Model Released Only</a></li>
          </ul>
        </div>
        <div class="col_1_of_5 span_1_of_5">
          <ul class="list1">
            <li><a href="stock.html">Nature</a></li>
            <li><a href="stock.html">Objects</a></li>
            <li><a href="stock.html">Parks/Outdoor</a></li>
            <li><a href="stock.html">People</a></li>
            <li><a href="stock.html">Religion</a></li>
            <li><a href="stock.html">Science</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <div class="grid_3">
    <div class="container">
      <ul id="footer-links">
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Royalty Free License</a></li>
        <li><a href="#">Extended License</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="support.html">Support</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="#">Categories</a></li>
      </ul>
      <p>Copyright © 2015 Photo-Hub. All Rights Reserved.Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
  </div>
</body>

</html>
