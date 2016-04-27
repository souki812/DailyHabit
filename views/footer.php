     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                
      <script>
      $(document).ready(function() {
      var val =0;
      
    $.ajax({
        type: 'POST',
        url: 'progress.php',
        data: { val:val },
        success: function(response) {
           val = response;
           
            $('.progress-bar').css('width', val+'%').attr('aria-valuenow', val);
       
        }
    });

            
            
$("#target").click(function() {
 
    $.ajax({
        type: 'POST',
        url: 'getprogress.php',
        data: { val:val },
        success: function(response) {
            
           val = response;
         
            $('.progress-bar').css('width', val+'%').attr('aria-valuenow', val);
             $("#progress1").html(response + '%');
        }
    });
   
});

      });
      </script>
     
    </body>
</html>