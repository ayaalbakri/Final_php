<html>
   <head>
   <style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}



.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
      <title>Weather</title>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
     
   </head>
   
   <body>
      <!-- <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div> -->
     <!--  <?php
         // echo Form::button('Replace Message',['onClick'=>'getMessage()']);
         // echo $x;
      ?> -->
      
      <form id="target" action="destination.html" class="modal-content animate" action="/action_page.php" style="width: 50%;margin-left: 25% ; margin-top: 50px;">
      <div class="container">
  <input type="text" placeholder=" the name of city">
  <input type="submit" value="Go">
</form>
<div class="container">
<!-- <div id="other">
  Trigger the handler
</div> -->
<script type="text/javascript">
     $( "#target" ).submit(function( event ) {
        var x = $( "input:first" ).val()
         $( "#temp" ).empty()

          $( "#pressure" ).empty()
          $( "#min_temp" ).empty()
          $( "#temp_max" ).empty()
          $( "#humidity" ).empty()
          

        console.log(x)
  alert( "Done" );
    $.ajax({
               type:'get',
               url:'http://api.openweathermap.org/data/2.5/weather?q='+x+'&units=metric&appid=423047100cc422f12720b052f61c438a',
               //http://api.openweathermap.org/data/2.5/forecast?q=Amman&APPID=1d542eac83eaad6d439c47ba406ba70e
              // data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                console.log(data.main)
                var temp = data.main.temp;
                var y = data.main.pressure;
                var min = data.main.temp_min;
                var max = data.main.temp_max;
                var humidity = data.main.humidity;
               // var t ='<p>'  x '</p>';
                  $( "#temp" ).append( "the temp of " + x +":      " + temp + "     Celsius");
                //  $('body').html("the pressure of jordan :      "+y)
                $( "#pressure" ).append( "the pressure of " + x +":      " + y + "<br>" );
                $( "#min_temp" ).append( "the Min pressure of " + x +":      "+ min + "     Celsius");
                $( "#temp_max" ).append( "the Max Temp. of " + x +":      "+ max + "     Celsius");
                $( "#humidity" ).append( "the humidity of " + x +":      "+ humidity + "%");




               }
            });
           
  event.preventDefault();
});
</script>




 <script>
         //function getMessage(){


        // }
      </script>
      
<div id="temp"> </div> <br>

      <div id="pressure"> </div> <br>
      <div id="min_temp"> </div> <br>
      <div id="temp_max"> </div> <br>
      <div id="humidity"></div>
<!-- <div class="col-sm-3" style="background-color: black; height: 150px;" ></div> -->
      <!-- <form class="modal-content animate" action="/action_page.php" style="width: 50%;margin-left: 25%">

    <div class="container">

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      
        
      <button type="submit">Login</button>
    </div>

  </form> -->

   </body>
