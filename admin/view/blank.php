
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./Components/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./Components/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./Components/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./Components/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./Components/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<div class="">
  <div class="">
      <?php
      include_once('../../lib/func.php');
      $username= checkAuth();
      print_r($username);
      if($username == false){
          goUri("/admin/view/login.php");
          /*
          if(isset($_GET['commit'])){
              $login=$_GET['login'];
              $password=$_GET['password'];
              if($login=='user' && $password == 'user') {
                  $_SESSION['username']=$login;
                  showAlert('Привет '.$login);
                  goUri("/admin/index.php");
              }else{
                  showAlert('!!! -=Login or password INCORECT=- !!!!');
                  goUri("/admin/index.php");
              }

          }else{
          }
          */
      }else{
          echo 'hi '.$_SESSION['username'];
          echo '<a href="/admin/view/logout.php">Выход</a>';
      }
      ?>
        <?php
        ShowFishText();
        ShowBeautifulEditBox();
        ?>
  </div>
</div>
<script src="./Components/bower_components/jquery/dist/jquery.min.js"></script>
<script src="./Components/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./Components/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="./Components/bower_components/fastclick/lib/fastclick.js"></script>
<script src="./Components/dist/js/adminlte.min.js"></script>
<script src="./Components/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
