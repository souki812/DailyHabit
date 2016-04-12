            <div class="row">
<?php require('menu.php'); ?>

<style>
    .box{
        background-color: #d3d3d3
    }
</style>
            <div class="container">
    <table class="table table-striped ">
        <tr class="success"><th>Your Daily Summary</th><th>Day Streak</th></tr>
        <tr><td>Have you achieved today's Habit?</td><td><button class="btn btn-success marginTop">Achieved!</button>    <button class="btn btn-success marginTop">Edit Goal</button></td></tr>
        <tr><td><input type="text" class="form-control" value="Leave a comment.."/></td></tr>
        <tr><td><button class="btn btn-success marginTop">Post</button></td></tr>
    </table>
    
    <form>
        <div class="form-group">
            <label>NewsFeed</label>
        <input type="text" class="form-control" value="What's on your mind?"/>
        </div>
    </form>
</div>