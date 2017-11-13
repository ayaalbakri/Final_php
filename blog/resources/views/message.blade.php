<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
         //function getMessage(){
            $.ajax({
               type:'get',
               url:'http://api.openweathermap.org/data/2.5/weather?q=Amman&appid=423047100cc422f12720b052f61c438a',
              // data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                console.log(data.main)
                var x = data.main.temp;
                var y = data.main.pressure;
               // var t ='<p>'  x '</p>';
                  $( "#temp" ).append( x );
                //  $('body').html("the pressure of jordan :      "+y)
                $( "#pressure" ).append( "the pressure of jordan :      " + y );

               }
            });
        // }
      </script>
   </head>
   
   <body>
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
     <!--  <?php
         // echo Form::button('Replace Message',['onClick'=>'getMessage()']);
         // echo $x;
      ?> -->
      <div id="temp"> </div>

      <div id="pressure"> </div>
   </body>

</html>