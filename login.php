<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  body, html {
    height: 100%;
    margin: 0;
  }
  .bigh{
    background-image:linear-gradient(to right top,pink,pink,yellow);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.animateuse{
  			animation: leelaanimate 0.5s infinite;
  		}

  @keyframes leelaanimate{
  			0% { color: red },
  			10% { color: yellow },
  			20%{ color: blue }
  			40% {color: green },
  			50% { color: pink }
  			60% { color: orange },
  			80% {  color: black },
  			100% {  color: brown }
  		}
  </style>
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="bigh">
    <div class="container ">
        <br><h1 class="text-center animateuse">Tushar's Quiz-world</h1><br>
        <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <h2 class="text-center card-header">Login form</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                </div>
                </div>
            <div class="col-lg-6">
              <div class="card">
                <h2 class="text-center card-header">Signin form</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Signin</button>
                </form>
              </div>
            </div>
    </div>
    </div>
</body>
</html>
