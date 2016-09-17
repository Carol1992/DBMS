<?php

function do_html_header($title)
{
  // print an HTML header
?>
  <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title><?php echo $title;?></title>
      <!-- app's own CSS -->
      <link href="css/style.css" rel="stylesheet"/>
      <!-- http://getbootstrap.com/ -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>
      <div class="container">
      <div class="row">
      
        <img src="img/bookmark.png" alt="PHPbookmark logo" id="logo"/>
        <hr>

<?php  
}

function do_html_footer()
{
  // print an HTML footer
?>   
      </div>
      </div>
    </body>
  </html>

<?php
}

function do_html_heading($heading)
{
  // print heading
?>
  <h2><?php echo $heading;?></h2>
<?php
}

function do_html_URL($url, $name)
{
  // output URL as link and br
?>
  <br /><a href="<?php echo $url;?>"><?php echo $name;?></a><br />
<?php
}

function display_site_info()
{
  // display some marketing info
?>
  <br><br>
<?php
}

function display_login_form()
{
?>
<div class="container">
  <div class="row"> 
    <div class="col-md-4 col-md-offset-4">       
        <div class="at-pwd-form">
          <form role="form" id="at-pwd-form" action='member.php' method="post">
            <fieldset>
              <div class="at-input form-group has-feedback">
              <input type="text" class="form-control" name="username" placeholder="Username">
              <span class="help-block hide"></span>
            </div>     
            <div class="at-input form-group has-feedback">
              <input type="password" class="form-control" name="passwd" placeholder="Password">
              <span class="help-block hide"></span>
            </div>
              <div class="at-pwd-link">
              <p>
                <a href='forgot_form.php' id="at-forgotPwd" class="at-link at-pwd">Forgot your password?</a>
              </p>
            </div>
                <button type="submit" class="at-btn submit btn btn-lg btn-block btn-success" value='Log in'>
                Sign In
                </button>
            </fieldset>
          </form>
        </div>
        <div class="at-signup-link">
          <p>
            Don't have an account?
            <a href='register_form.php' id="at-signUp" class="at-link at-signup">Register</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div> 

<?php
}

function display_registration_form()
{
?>
<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="at-form">
          <div class="at-title">
            <h3>Create an Account</h3>
          </div>
          <div class="at-pwd-form">
            <form role="form" id="at-pwd-form" action='register_new.php' method="post">
              <fieldset>
              <div class="at-input form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                <span class="help-block hide"></span>
              </div>
              <div class="at-input form-group has-feedback">
                <input type="text" class="form-control" name="username" placeholder="Username (max 16 chars)" required>
                <span class="help-block hide"></span>
              </div>
              <div class="at-input form-group has-feedback">
                <input type="password" class="form-control" name="passwd" placeholder="Password (between 6 and 16 chars)" required>
                <span class="help-block hide"></span>
              </div>
              <div class="at-input form-group has-feedback">
                <input type="password" class="form-control" name="passwd2" placeholder="Password (again)" required>
                <span class="help-block hide"></span>
             </div>
              <button type="submit" class="at-btn submit btn btn-lg btn-block btn-info" value='Register'>Register</button>
            </fieldset>
          </form>
        </div>
        <div class="at-signin-link">
          <p>
            If you already have an account
            <a href="index.php" id="at-signIn" class="at-link at-signin">sign in</a>
          </p>
        </div>
        </div>
      </div>
    </div>
  </div>

<?php 

}

function display_user_urls($url_array)
{
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $bm_table;
  $bm_table = true;
?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <br />
        <form name='bm_table' action='delete_bms.php' method='post'>
          <table class="table">
            <?php
            echo "<tr class='info'><td><strong>Bookmark</strong></td>";
            echo "<td><strong>Delete?</strong></td></tr>";
            if (is_array($url_array) && count($url_array)>0)
            {
              foreach ($url_array as $url)
              {
                // remember to call htmlspecialchars() when we are displaying user data
                echo "<tr><td><a href=\"$url\">".htmlspecialchars($url)."</a></td>";
                echo "<td><input type='checkbox' name=\"del_me[]\"
                       value=\"$url\"></td>";
                echo "</tr>"; 
              }
            }
            else
              echo "<tr><td>No bookmarks on record</td></tr>";
          ?>
          </table> 
        </form>
      </div>
    </div>
  </div>
<?php
}

function display_user_menu()
{
  // display the menu options on this page
?>
<hr />
<a href="member.php">Home</a> &nbsp;|&nbsp;
<a href="add_bm_form.php">Add BM</a> &nbsp;|&nbsp; 
<?php
  // only offer the delete option if bookmark table is on this page
  global $bm_table;
  if($bm_table==true)
    echo "<a href='#' onClick='bm_table.submit();'>Delete BM</a>&nbsp;|&nbsp;"; 
  else
    echo "<font color='#cccccc'>Delete BM</font>&nbsp;|&nbsp;"; 
?>
<a href="change_passwd_form.php">Change password</a>
<br />
<a href="recommend.php">Recommend URLs to me</a> &nbsp;|&nbsp;
<a href="logout.php">Logout</a> 
<hr />

<?php
}

function display_add_bm_form()
{
  // display the form for people to ener a new bookmark in
?>
<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <br />
        <form name='bm_table' action='add_bms.php' method='post'>
          <div class="at-input form-group has-feedback">
            <label class="control-label" for="at-field-password_again">New Bookmark</label>
            <input type="text" class="form-control" name="new_url" value="http://" required>
            <span class="help-block hide"></span>
          </div>
          <button type="submit" class="at-btn submit btn btn-info">Submit</button>
        </form>
      </div>
    </div>
</div>
<?php
}

function display_password_form()
{
  // display html change password form
?>
  <br />
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form action='change_passwd.php' method='post'>
           <div class="at-input form-group has-feedback">
              <input type="password" class="form-control" name="old_passwd" placeholder="Old Password" required>
              <span class="help-block hide"></span>
           </div>
           <div class="at-input form-group has-feedback">
              <input type="password" class="form-control" name="new_passwd" placeholder="New Password" required>
              <span class="help-block hide"></span>
           </div>
           <div class="at-input form-group has-feedback">
              <input type="password" class="form-control" name="new_passwd2" placeholder="Confirmed New Password" required>
              <span class="help-block hide"></span>
           </div>
           <button type="submit" class="at-btn submit btn btn-lg btn-block btn-danger">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <br />
<?php
};

function display_forgot_form()
{
  // display HTML form to reset and email password
?>
  <br />
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
       <form action='forgot_passwd.php' method='post'>
          <div class="at-input form-group has-feedback">
            <label class="control-label" for="at-field-password_again">Enter your username</label>
            <input type="text" class="form-control" name="username" required>
            <span class="help-block hide"></span>
          </div>
          <button type="submit" class="at-btn submit btn btn-warning">Submit</button>
       </form>
      </div>
    </div>
  </div>
   <br />
<?php
};

function display_recommended_urls($url_array)
{
  // similar output to display_user_urls
  // instead of displaying the users bookmarks, display recomendation
?>
<br />
 <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <br />
        <table class="table">
        <?php
        echo "<tr class='success'><td><strong>Recommendations</strong></td>";
        if (is_array($url_array) && count($url_array)>0)
        {
          foreach ($url_array as $url)
          {
            // remember to call htmlspecialchars() when we are displaying user data
            echo "<tr><td><a href=\"$url\">".htmlspecialchars($url)."</a></td>";
          }
        }
        else
          echo "<tr><td>No recommendations for you today.</td></tr>";
      ?>
        </table> 
      </div>
    </div>
  </div>
<?php
};

?>
