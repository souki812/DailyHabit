
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DailyHabit</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <style>
            .navbar-brand{
                font-size:2em;
                
            }
        </style>
    </head>
    <body>
        
        <div class="navbar navbar-default">
            
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">DailyHabit</a>
                </div>
                
                <div class="collapse navbar-collapse"></div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home">Home</a></li> <!--active makes it default page-->
                     <li><a href="#about">About</a></li>
                      <li><a href="#=testimonial">Testimonial</a></li>
                </ul>
                
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control">   
                    </div>
                     <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">   
                    </div>
                     <button type="submit" class="btn btn-success">Log In</button>
                </form>
            </div>
        </div>

  <div class="container" id="firstContainer">
    
  </div>       
            
            
            
            <div class="row">
                <div class="col-sm-6">
                    <h4>Track your daily habits and achieve all your goals</h4>
                    <h4>Share your progress with your friends</h4>
                    <h4>Learn more about other people's habits</h4>
                </div>
                <div class="col-sm-6">
                    <h3>Sign-up</h3>
                    <form action="authenticate.php" method="post" class="well">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control">
                        </div>
                        <input type="hidden" name="task" value="register">
                        <button type="submit" class="btn btn-default">Sign-up</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>