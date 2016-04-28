<?php require('menu.php'); ?>
            <style>
             
                #first {
                    
                    background: url("../views/images/scene1.jpg");
                    width: 100%;
                    background-size: cover;
                    height: 150px;
                    border-radius: 10px;
                    font-family: Helveltica, serif;
                    text-align: center;
                    color:white;
                }
                
                #second {
                    background: url("../views/images/scene3.jpg");
                    width: 100%;
                    background-size: cover;
                    height: 150px;
                    border-radius: 10px;
                    font-family: Helveltica, serif;
                    text-align: center;
                    color:white;
                }
                
                #third {
                    background: url("../views/images/scene2.jpg");
                    width: 100%;
                    background-size: cover;
                    height: 100px;
                    border-radius: 10px;
                    font-family: Helveltica, serif;
                    text-align: center;
                    color:white;
                }
                
                #fourth {
                    background: url("../views/images/scene4.jpg");
                    width: 100%;
                    background-size: cover;
                    height: 150px;
                    border-radius: 10px;
                    font-family: Helveltica, serif;
                    text-align: center;
                    color:white;
                }
                
                .top{
                    padding-top: 100px;
                }
                
                .container{
                    margin-bottom: 20px;
                }
                
                
            </style>
           <h2><span class="glyphicon glyphicon-user top"></span> Community</h2><br>
              <?php foreach ($selection as $row): ?>
            <div class="container">
            
            
            <div class="row">
              
                <div class="col-md-8 col-md-offset-3">
                    <div class="col-md-6" id="leftcol" style="border:solid">
                    <div class="media">
                        <a href="#" class = "thumbnail pull-left">        <!-- class= pull-left -->
                          
                            <img src="/views/uploads/<?php echo $row['picture'] ?>"  id="profile-pic" width="70" height="70"  onerror="if (this.src != 'views/images/no_photo.png') this.src = 'views/images/no_photo.png';">
                        </a>
                        <div class="media-body"><br>
                            <h4>Name: </h4>
                           
                            <?php echo htmlentities($row['first'], ENT_QUOTES, 'utf-8'); ?> <?php echo htmlentities($row['last'], ENT_QUOTES, 'utf-8'); ?>
                           
                           
                        </div>
                        
                        
                    </div>  
                    </div>
                </div>
            </div>
                    
               
         
                </div>
             <?php endforeach; ?>
<!------------------------------------------------------------>



<div class="container">
    <div class="row">
                    <!--Right main column-->
                    <div class="col-md-4">
                        <p> Right main content</p>
                        
                        
                        <div class="centertext" id="first">
                        <h4><br>"First we form habits, then they form us.  Conquer your bad habits, or they'll eventually conquer you."</h4>
                        <h4 class="text-right">"-Rob Gilbert"</h4><br>
                        </div>
                        
                        <div class="centertext" id="second">
                        <h4><br>"Habits are important.  Up do 90% of our everyday behavior is based on habit.  Nearly all of what we do each day, every day, is simply habit"</h4>
                        <h4 class="text-right">"-Jack D. Hodge"</h4><br>
                        </div>
                        
                        <div class="centertext" id="third">
                        <h4><br>"Motivation is what gets you started.  Habit is what keeps you going."</h4>
                        <h4 class="text-right">"-Jim Rohn"</h4><br>
                        </div>
                        
                        <div class="centertext" id="fourth">
                        <h4><br>"Focus on the good habit you want to do, not the bad habit you don't want to do.  Overcome the bad with the good."</h4>
                        <h4 class="text-right">"-Joyce Meyer"</h4><br>
                        </div>
                    </div>
                </div>

</div>