
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
                 background: url("views/images/goals.jpg");
                 width: 100%;
                 background-size: cover;
                 height: 200px;
            }
            
            
            #firstRow{
                margin-top:100px;
                text-align: center;
             
            }
            
            .large{
                font-size:3em;
                font-weight: bold;
            }
            
            .centertext{
                text-align: center;
            }
            
            #thirdcontainer{
                background-color: #A0A0A0;
                width: 100%;
              
            }
            
            #secondcontainer{
                background-color: #99CCFF;
                width: 100%;
               
            }
            
            
            .margintop{
                margin-top:100px;
            }

             .margintop1{
                margin-top:150px;
            }
           
        </style>
    </head>
    <body data-spy="scroll" data-target="#navigation"> <!-- SCROLL SPY bootstrap -->
        
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
                
                <div class="collapse navbar-collapse"  id="navigation">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#firstContainer">Home</a></li> <!--active makes it default page-->
                     <li><a href="#secondcontainer">About</a></li>
                      <li><a href="#thirdcontainer">Testimonial</a></li>
                </ul>
                
                <form action="authenticate.php" method="post" class="navbar-form navbar-right">
                    <div class="form-group">
                        <input  placeholder="Email" name="username" class="form-control">   <!--type="email"-->
                    </div>
                     <div class="form-group">
                        <input type="password" placeholder="Password" name="password" class="form-control">   
                    </div>
                     <input type="hidden" name="task" value="login">
                     <button type="submit" class="btn btn-success">Log In</button>
                </form>
                </div>
                
            </div>
        </div>

  <div class="container PageContainer" id="firstContainer">
  <!--  <img src="views/images/goals.jpg" />-->
        <div class="col-md-6 margintop1">
                   <h1>Track your habits</h1>
        <p class="lead">Achieve all your goals with DailyHait</p>  <!--Bootstrap to make paragraph more distinct-->
        
        <p> Sign-up for free today!</p>
        <p> Keep track of your progress in an easy and fast way</p>
        <p> Quickly add and log your daily progress</p>

        </div>
        
        <div class="col-md-6 margintop1">
            <h3>Sign Up Today!</h3>
                    <form action="authenticate.php" method="post" class="well">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <input type="hidden" name="task" value="register">
                        <button type="submit" class="btn btn-default">Register</button>
        </div> 
        </div> 
    </div>
  </div>


  <?php if(isset($_SESSION['message'])): ?>
            <div class="row">
                <p class="text-info text-center"><?php echo $_SESSION['message']; unset($_SESSION['message']);?></p> <!--when you click login without fillin out boxes -->
                </div>
<?php endif; ?>
            </div>
  
  <div class="container PageContainer" id="secondcontainer">
    
    <div class="row margintop" class="centertext">
        <h1 class="centertext">Why Choose DailyHabit?</h1>
        <p class="lead centertext"></p>
        
        
          <div class="col-md-4 margintop1">
            <h2><span class="glyphicon glyphicon-check"></span> Quick & Easy</h2>
            DailyHabit is not time consuming nor difficult to use... It's very easy! After a few days,
            it's just a couple of clicks and you're done! If you're serious about your long-term goals,
            DailyHabit is an excellent way to keep you in check and on track.<br><br>
        
            <button class="btn btn-success marginTop">Sign Up!</button>
        </div>
        
        <div class="col-md-4 margintop1">
            <h2><span class="glyphicon glyphicon-off"></span> Long-term Progress</h2>
            DailyHabit is not time consuming nor difficult to use... It's very easy! After a few days,
            it's just a couple of clicks and you're done! If you're serious about your long-term goals,
            DailyHabit is an excellent way to keep you in check and on track.<br><br>
        
            <button class="btn btn-success marginTop">Sign Up!</button>
        </div>
        
        <div class="col-md-4 margintop1">
            <h2><span class="glyphicon glyphicon-globe"></span> Share With Friends</h2>
            DailyHabit is not time consuming nor difficult to use... It's very easy! After a few days,
            it's just a couple of clicks and you're done! If you're serious about your long-term goals,
            DailyHabit is an excellent way to keep you in check and on track.<br><br>
        
            <button class="btn btn-success marginTop">Sign Up!</button>
        </div>
    </div>
    
      
    
  </div>
  
  <div class="container PageContainer" id="thirdcontainer">
    <div class="row margintop">
        <h1 class="center centertext large">Testimonials</h1>
        <div class="col-md-4 margintop1">
            <h2><span class="glyphicon glyphicon-check"></span> Quick & Easy</h2>
            DailyHabit is not time consuming nor difficult to use... It's very easy! After a few days,
            it's just a couple of clicks and you're done! If you're serious about your long-term goals,
            DailyHabit is an excellent way to keep you in check and on track.<br><br>
        
            <button class="btn btn-success marginTop">Sign Up!</button>
        </div>
        
        <div class="col-md-4 margintop1">
            <h2><span class="glyphicon glyphicon-off"></span> Long-term Progress</h2>
            DailyHabit is not time consuming nor difficult to use... It's very easy! After a few days,
            it's just a couple of clicks and you're done! If you're serious about your long-term goals,
            DailyHabit is an excellent way to keep you in check and on track.<br><br>
        
            <button class="btn btn-success marginTop">Sign Up!</button>
        </div>
        
        <div class="col-md-4 margintop1">
            <h2><span class="glyphicon glyphicon-globe"></span> Share With Friends</h2>
            DailyHabit is not time consuming nor difficult to use... It's very easy! After a few days,
            it's just a couple of clicks and you're done! If you're serious about your long-term goals,
            DailyHabit is an excellent way to keep you in check and on track.<br><br>
        
            <button class="btn btn-success marginTop">Sign Up!</button>
        </div>
    </div>
  </div>
  
   
    
       
            
            
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <script>
            $(".PageContainer").css("min-height", $(window).height()); //set picture to windows height
        </script>
    </body>
</html>