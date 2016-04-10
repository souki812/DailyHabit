
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DailyHabit</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                  <h1 class="text-left">DailyHabit</h1>    
                </div>
                    
                    <div  class="col-xs-3 col-sm-push-4">
                       <input type="text" name="username" class="form-control" value="username">   
                    </div>
                    <div  class="col-xs-3 col-sm-push-4">
                    <input type="password" name="password" class="form-control" value="Password">
                    </div>
                     <div  class="col-xs-3 col-sm-push-4">
                    <button type="submit" class="btn btn-default">Log-in</button>
                     </div>
            </div>
     <!-- login.php  -->       
            
            
            
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