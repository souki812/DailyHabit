        
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
    </div>
    
    
    
    
    <form>
        <div class="form-group">
            <label>NewsFeed</label>
        <input type="text" class="form-control" placeholder="What's on your mind?"  id="textarea" autocomplete="off" autofocus/>
        </div>
    </form>
    
    
    
    
    <div class="container">
      <div class="row">
        <br>
        <form class="form">
          <input type="text" class="form-control" id="message" placeholder="New message" autocomplete="off" autofocus>
        </form>
        <br>
      </div>
      <div class="row">
        <table class="table table-bordered table-striped">
          <thead class="bg-info">
            <tr>
              <td class="col-xs-1">Time</td>
              <td class="col-xs-1">Sender</td>
              <td>Message</td>
            </tr>
          </thead>
          <tbody id="chat"></tbody>
        </table>
      </div>
      <div class="row">
        <p class="text-info">You joined at <?php echo substr($_SESSION['start_time'], 10); ?>.</p>
      </div>
    </div>
   
   
</div>
             
   