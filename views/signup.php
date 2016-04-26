
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
                background-color: #ffb3b3;
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
            
          .hexagon {
            position: relative;
            width: 300px; 
            height: 173.21px;
            background-color: #ffe6f9;
            margin: 86.60px 0;
            }

            .hexagon:before,
                .hexagon:after {
                content: "";
                position: absolute;
                width: 0;
                border-left: 150px solid transparent;
                border-right: 150px solid transparent;  
            }

            /* Top triangle */
            .hexagon:before type1{      /* Get rid of type1 for top of hexagon */
                bottom: 100%;
                border-bottom: 86.60px solid #ffe6f9;  
            }

            .hexagon:after {
                top: 100%;
                width: 0;
                border-top: 86.60px solid #ffe6f9;
            }

            .circleBase {
                border-radius: 50%;
                behavior: url(PIE.htc); /* remove if you don't care about IE8 */
            }

            .type1 {
                /*background: url("views/images/manon.jpg");*/
                margin-left: 100px;
                margin-top: -50px;
                border-radius: 50%/50%; 
                width: 100px;
                height: 100px;
                border: 3px solid #000;
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
                        <input  placeholder="Email" name="email" class="form-control">   <!--type="email"-->
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
                        <input type="text" class="form-control" name="first" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="last" placeholder="Enter Last Name">
                        </div>
                        
                        <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                        
                        <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        </div>
                        
                        <div class="form-group">
                        <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
                        </div>
                        
                        
                        <div class="form-group">
                        <input type="text" class="form-control" name="age" placeholder="Enter Age">
                        </div>
                        
                         <input type="hidden" name="task" value="register">
                        <button type="submit" class="btn btn-default">Register</button>
                        
                    </form>
                                
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
        
         
        </div>
        
        <div class="col-md-4 margintop1">
            <h2><span class="glyphicon glyphicon-off"></span> Long-term Progress</h2>
            DailyHabit is not time consuming nor difficult to use... It's very easy! After a few days,
            it's just a couple of clicks and you're done! If you're serious about your long-term goals,
            DailyHabit is an excellent way to keep you in check and on track.<br><br>
        
      
        </div>
        
        <div class="col-md-4 margintop1">
            <h2><span class="glyphicon glyphicon-globe"></span> Share With Friends</h2>
            DailyHabit is not time consuming nor difficult to use... It's very easy! After a few days,
            it's just a couple of clicks and you're done! If you're serious about your long-term goals,
            DailyHabit is an excellent way to keep you in check and on track.<br><br>
        
          
        </div>
    </div>
    
      
    
  </div>
  
  <div class="container PageContainer" id="thirdcontainer">
    <div class="row margintop">
        <h1 class="center centertext large">Testimonials</h1>
        <div class="col-md-4" text-align="center">
            <div class="hexagon">
              <div><img class="circleBase type1" src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAT2AAAAJDZhNWRjYmY1LTYyZGMtNGYyNi1hNzJkLWVkNDU5NzM2NzU5Mw.jpg"></div>  
                <h4><center>Coral Peral Garcia</center></h4>
             <center>"I've been using the DailyHabit website for months it has really
             helped me to form good habits. If you have a hard time keeping your habits on track,
             this is the website to use."</center><br><br>
        
            </div>
            
          
        </div>
        
        <div class="col-md-4" text-align="center">
            <div class="hexagon">
              <div><img class="circleBase type1" src="https://pbs.twimg.com/profile_images/2145570159/Photo_on_4-17-12_at_1.30_PM__3_400x400.jpg"></div>  
                <h4><center>Sabrina Walton</center></h4>
            <center>"The progress bar really motivates you to strive to achieve all your habits.
              It also allows you to keep track of how far you have come."</center><br><br>
        
            </div>
        
        </div>
        
        <div class="col-md-4" text-align="center">
          <div class="hexagon">
           <div><img class="circleBase type1" src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAJoAAAAJDY3M2ViMWYyLTMyOTctNGZkYy1iMTRjLThkNzMyM2MxNWMyOQ.jpg"></div>  
              <h4><center>Manon Edeline</center></h4>
              <center>"I love that DailyHabit lets you interact with like-minded people
              to discuss your achievments.  The best part is, it's free!"</center><br><br>
        
          </div>
          
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