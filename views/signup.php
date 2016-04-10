
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
            
            
            #firstContainer{
                 background: url("goals.jpg");
            }
        </style>
    </head>
    <body>
        
        <div class="navbar navbar-default navbar-fixed-top">
            
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
    <img src="goals.jpg" />
  </div>       
            
            
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>