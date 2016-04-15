        
<?php require('menu.php');

?>

<style>
    
    
    
    .home{
        border: 1px solid grey;
        
       
    }
    
    .hometop{
     
    }
    
    .comment{
        
        margin-top: 20px;
    }
    .firstbutton{
        margin-left: 40px;
    }
    .secondbutton{
        margin-left: 20px;
    }
    
    .page{
       
         padding-top: 100px; 
    }
</style>
    
 <div class="container page">
    <div class="row">
        
        <div class="col-md-6 col-md-offset-3  home" >
            <div>
                 <h4>Your Daily Summary</h4>
            </div>
           
            
            <form method="post">
                <div class="form-group">
                    <label >Have you achieved today's Habit?</label>
                    <button  class="btn btn-success firstbutton" ">Achieved!</button><button  class="btn btn-success secondbutton" >Edit Goal</button>
                    
                    <input type="text" class="form-control comment" value="Leave a comment.."/>
                    
                    
                </div>
            </form>
        </div>
    </div><br>
    
    
    
    

    
    
    <div class="container">
      <div class="row" >
        <form class="well" action="home.php"  method="post">
          <input type="text" class="form-control" id="message" placeholder="What's on your mind?" autocomplete="off" autofocus><br>
          <input type="hidden" name="task" value="newsfeed"> 
          <button  class="btn btn-success firstbutton">Post</button>
        </form>
      </div>
      
      

   
   <div class="container">
  <h2>Your Progress:</h2>
  <p><cite>Progress is impossible without change, and those who cannot change their minds cannot change anything.</cite> George Bernard Shaw </p> 
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40%
    </div>
  </div>
</div>
   
</div>
             
   