<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
         //function getMessage(){
            $.ajax({
               type:'get',
               url:'http://api.openweathermap.org/data/2.5/weather?q=Amman&units=metric&appid=423047100cc422f12720b052f61c438a',
              // data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                console.log(data.main)
                var x = data.main.temp;
                var y = data.main.pressure;
                var min = data.main.temp_min;
                var max = data.main.temp_max;
                var humidity = data.main.humidity;
               // var t ='<p>'  x '</p>';
                  $( "#temp" ).append( "the temp of jordan :      " + x + "     Celsius");
                //  $('body').html("the pressure of jordan :      "+y)
                $( "#pressure" ).append( "the pressure of jordan :      " + y );
                $( "#min_temp" ).append( "the Min pressure of jordan :      " + min + "     Celsius");
                $( "#temp_max" ).append( "the Max Temp. of jordan :      " + max + "     Celsius");
                $( "#humidity" ).append( "the humidity of jordan :      " + humidity + "%");




               }
            });
        // }
      </script>
   </head>
   
   <body>
      <!-- <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div> -->
     <!--  <?php
         // echo Form::button('Replace Message',['onClick'=>'getMessage()']);
         // echo $x;
      ?> -->
      <div id="temp"> </div> <br>

      <div id="pressure"> </div> <br>
      <div id="min_temp"> </div> <br>
      <div id="temp_max"> </div> <br>
      <div id="humidity"></div>


   </body>

</html>