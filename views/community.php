<?php require('menu.php'); ?>
            <style>
                
                .community {
                    margin-top: 150px;
                    border-top: 20px solid #000;
                    border-bottom: 20px solid #000;
                    font-family: Rockwell, serif;
                }
                
                .container{
                    margin-bottom: 20px;
                }
                
                .proButton {
                    float: right;
                    margin-bottom: 10px;
                    border-style: solid;
                    border: #000;
                    background-color: #DC143C;
                    color: white;
                }
                
                .comment {
                    border: 1px solid grey;
                    background-color: #eeeeee;
                    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
                }
                
            </style>
            
    <div class="container page">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <center>
                <div class="community">
                    <h2><span class="glyphicon glyphicon-user top"></span> Community</h2><br>
                </div>
                </center>
            </div>
        </div>
    
            
            
            
            
        <br><br><br><?php foreach ($selection as $row): ?>
        <form action="friend.php" method="get">
        <div class="container">
            <div class="row">
              
                <div class="col-md-8 col-md-offset-4">
                    <div class="col-md-6 comment" id="leftcol">
                    <div class="media">
                        <div class="form-group">
                            <br><img src="/views/uploads/<?php echo htmlentities($row['picture'], ENT_QUOTES, 'utf-8'); ?>"  id="profile-pic" class="img-circle" width="90" height="90"  onerror="if (this.src != 'views/images/no_photo.png') this.src = 'views/images/no_photo.png';">
                            <div class="media-body"><br>
                            <label>
                                <h4><?php echo htmlentities($row['first'], ENT_QUOTES, 'utf-8'); ?> <?php echo htmlentities($row['last'], ENT_QUOTES, 'utf-8'); ?></h4>
                            </label>
                            </div>
                        </div>
                        
                         <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                         <input type="submit" name="friend" class="proButton" value="View Profile">
                         </form>
        <?php if ($_SESSION['administrator']==1): ?>
                          <form action="community.php" method="post">
                             <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                             <input type="submit" name="delete" class="delete" value="Delete Account">
                            
                          </form>
                      <?php endif; ?>

                         
                    </div>  
                    </div>
                </div>
            </div>
        </div>
    
    <?php endforeach; ?>
    </div>
