<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>Phuc Mars</title>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <div id="login-page">
    <div class="container">
      <form class="form-login" action = "xulilogin.php" method = "post">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="User ID"  name = "user" id = "username" autofocus>
          <br>
		  <input type="password" class="form-control" placeholder="Password"  name ="password" id = "password">
		  <br>
          <input type ="submit" class="btn btn-theme btn-block"  name = "submit" value = "OK"/>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
