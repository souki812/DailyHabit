            <div class="row">
<?php require('menu.php'); ?>

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
</style>
    
             <div class="container">
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
        <input type="text" class="form-control" value="What's on your mind?"/>
        </div>
    </form>
</div>