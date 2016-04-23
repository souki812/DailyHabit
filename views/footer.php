     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                
      <script>
      $(document).ready(function() {



            
            
$("#target").click(function() {
   
    var val = 20;
    $.ajax({
        type: 'POST',
        url: 'home.php',
        data: { val:val },
        success: function(response) {
           console.log(response);
       
        }
    });
});
      });
      </script>
    </body>
</html>