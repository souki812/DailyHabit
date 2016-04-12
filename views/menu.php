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
                   <li <?php if ($_SERVER['REQUEST_URI'] == '/') echo 'class="active"'; ?>><a href="../">Home</a></li>
                            <li <?php if ($_SERVER['REQUEST_URI'] == '/activity.php') echo 'class="active"'; ?>><a href="../activity.php">Profile</a></li>
                            <li><a href="../activity.php">Goals</a></li>
                            <li ><a href="../activity.php">Community</a></li>
                            
                </ul>
                
                <form  class="navbar-form navbar-right">
                     <input type="hidden" name="task" value="logout">
                     <button type="submit" class="btn btn-success" ><a href="../logout.php">Log Out</a></button>
                </form>
            </div>
        </div>
