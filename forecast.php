 <html >
    <head>
        <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
        <title>7 day Forecast</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <link rel="stylesheet" href="styles.css">


    </head>

    <body > 

        <div class="header">
            <div class="header-content row" style="padding: 30px; margin-top: 40px; ">
                <div class="col-2"></div>
                <div class="col-8" style="text-align: center;  display: block;">
                    <img src="title2.png" width="100%">
                </div>
                <div class="col-2"></div>
                
                
            </div>
            <div style="clear:both"></div>
        </div>


        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row">

                    <div id="day1"  class="day_info">
                        <div class="date">
                            <h1 class="day">MON</h1>                           
                        </div>
                         <div class="gradient"></div>
                         <!--  -->
                        <div class="weather_content">
                          
                            <img src="https://api.weather.gov/icons/land/day/snow,20/cold?size=medium" width="100%">

                            <div style="padding: 1vh">                                
                                <h3 class="short_decription first">...</h3>
                                <h3 class="short_decription second">...</h3>
                                <h1 class="high_temp"> 9 F</h1>
                                <h3 class="low_temp"> 0 F</h1>
                            </div>
                        </div>
                    </div>

                    <div id="day2"  class="day_info">
                        <div class="date">
                            <h1 class="day">TUE</h1>
                        </div>
                         <div class="gradient"></div>

                        <div class="weather_content">
                          
                            <img src="https://api.weather.gov/icons/land/day/bkn?size=medium" width="100%">

                            <div style="padding: 1vh"> 
                                <h3 class="short_decription first">...</h3>
                                <h3 class="short_decription second">...</h3>
                                <h1 class="high_temp"> 8 F</h1>
                                <h3 class="low_temp"> -1 F</h1>
                            </div>
                        </div>
                    </div>

                   <div id="day3"  class="day_info">
                        <div class="date">
                            <h1 class="day">WED</h1>
                        </div>
                         <div class="gradient"></div>

                        <div class="weather_content">
                          
                            <img src="https://api.weather.gov/icons/land/day/cold/snow,20?size=medium" width="100%">

                            <div style="padding: 1vh"> 

                                <h3 class="short_decription first">...</h3>
                                <h3 class="short_decription second">...</h3>
                                <h1 class="high_temp"> 5 F</h1>
                                <h3 class="low_temp"> -2 F</h1>
                            </div>
                        </div>
                    </div>

                   <div id="day4"  class="day_info">
                        <div class="date">
                            <h1 class="day">THU</h1>
                        </div>
                         <div class="gradient"></div>

                        <div class="weather_content">
                          
                            <img src="https://api.weather.gov/icons/land/day/cold/snow,20?size=medium" width="100%">

                            <div style="padding: 1vh"> 

                                <h3 class="short_decription first">...</h3>
                                <h3 class="short_decription second">...</h3>
                                <h1 class="high_temp"> 5 F</h1>
                                <h3 class="low_temp"> -2 F</h1>
                            </div>
                        </div>
                    </div>

                

                    <div id="day5"  class="day_info">
                        <div class="date">
                            <h1 class="day"> FRI</h1>
                        </div>
                         <div class="gradient"></div>

                        <div class="weather_content">
                          
                            <img src="https://api.weather.gov/icons/land/day/cold/snow,20?size=medium" width="100%">

                            <div style="padding: 1vh"> 

                                <h3 class="short_decription first">...</h3>
                                <h3 class="short_decription second">...</h3>
                                <h1 class="high_temp"> 5 F</h1>
                                <h3 class="low_temp"> -2 F</h1>
                            </div>
                        </div>
                    </div>

                    <div id="day6"  class="day_info">
                        <div class="date">
                            <h1 class="day" style="color:yellow"> SAT</h1>
                        </div>
                         <div class="gradient"></div>

                        <div class="weather_content">
                          
                            <img src="https://api.weather.gov/icons/land/day/snow,20/cold?size=medium" width="100%">

                            <div style="padding: 1vh"> 

                                <h3 class="short_decription first">...</h3>
                                <h3 class="short_decription second">...</h3>
                                <h1 class="high_temp"> 9 F</h1>
                                <h3 class="low_temp"> 0 F</h1>
                            </div>
                        </div>
                    </div>

                    <div id="day7"  class="day_info">
                        <div class="date">
                            <h1 class="day" style="color:yellow"> SUN</h1>
                        </div>
                         <div class="gradient"></div>

                        <div class="weather_content">
                          
                            <img src="https://api.weather.gov/icons/land/day/bkn/snow,20?size=medium" width="100%">

                            <div style="padding: 1vh"> 

                                <h3 class="short_decription first">...</h3>
                                <h3 class="short_decription second">...</h3>
                                <h1 class="high_temp"> 9 F</h1>
                                <h3 class="low_temp"> 0 F</h1>
                            </div>
                        </div>
                    </div>                  
                    
                </div>

            </div>
             <div class="col-1"></div>  
        </div>


         <div class="row" style="margin-top:5vh">
            <div class="col-3" style="text-align: right"><label for="lname">site url:</label></div>
            <div class="col-6">
                
                  <!-- //<input  type="text" id="site_name" name="lname" value="https://api.weather.gov/gridpoints/TOP/31,80/forecast"><br> -->
                <input   class="form-control" type="text" id="site_name" name="lname" value="https://api.weather.gov/gridpoints/TOP/31,80/forecast" >
            </div>

            <div class="col-3"></div>
        </div>

        
     

      </body>
  </html>


<script> 

var data;

$(document).ready(function(){

    $("#site_name").change(function(){
        alert("ds");
       $.ajax({
        //url: 'https://api.weather.gov/gridpoints/TOP/31,80/forecast', 
        url : $("#site_name").val(),
        success: function(result){
            data = result['properties']['periods'];            

            if (data[0]['name']== "Tonight" || data[0]['name']=="Overnight")
            {
                data_filter();
                for (var i=1;i<=7 ;i++)
                {   
                      
                        if (i==1) 
                        {
                            $("#day1 .day").text("NOW");
                            $("#day1 .high_temp").text("...");
                            $("#day1 .low_temp").text(data[0]['temperature']+" F");
                            $("#day1 .first").text(data[0]['fisrt_forecast']);
                            $("#day1 .second").text(data[0]['second_forecast']);
                            $("#day1 img").attr('src',  data[0]['icon']);

                        }
                            
                        
                        else
                        {
                            $("#day"+i+" .day").text(data[i*2-3]['name']);
                            $("#day"+i+" img").attr('src', data[i*2-3]['icon']);
                            $("#day"+i+" .high_temp").text(data[i*2-3]['temperature']+" F");
                            $("#day"+i+" .low_temp").text(data[i*2-2]['temperature']+" F");
                            $("#day"+i+" .first").text(data[i*2-3]['fisrt_forecast']);
                            $("#day"+i+" .second").text(data[i*2-3]['second_forecast']);

                            if (data[i*2-3]['name'] == "SUN" || data[i*2-3]['name'] == "SAT")
                            {
                                $("#day"+i+" .day").css('color','yellow');
                            }
                            else
                                $("#day"+i+" .day").css('color','white');
                        }

                }
            }

            else
            {
                data_filter();
                for (var i=1;i<=7 ;i++)
                {   
                        if (i==1) 
                        {

                            $("#day1 .day").text("NOW");
                            $("#day1 .high_temp").text(data[0]['temperature']+" F");
                            $("#day1 .low_temp").text(data[1]['temperature']+" F");
                            $("#day1 .first").text(data[0]['fisrt_forecast']);
                            $("#day1 .second").text(data[0]['second_forecast']);
                            $("#day1 img").attr('src', data[0]['icon']);
                        }
                        
                        else
                        {
                            $("#day"+i+" .day").text(data[i*2-2]['name']);
                            $("#day"+i+" img").attr('src', data[i*2-2]['icon']);
                            $("#day"+i+" .high_temp").text(data[i*2-2]['temperature']+" F");
                            $("#day"+i+" .low_temp").text(data[i*2-1]['temperature']+" F");
                            $("#day"+i+" .first").text(data[i*2-2]['fisrt_forecast']);
                            $("#day"+i+" .second").text(data[i*2-2]['second_forecast']);

                            if (data[i*2-2]['name'] == "SUN" || data[i*2-2]['name'] == "SAT")
                            {
                                $("#day"+i+" .day").css('color','yellow');
                            }
                            else
                                $("#day"+i+" .day").css('color','white');
                        }
                }
            }
        }
    
        });

    });

      $.ajax({
        //url: 'https://api.weather.gov/gridpoints/TOP/31,80/forecast', 
        url : $("#site_name").val(),
        success: function(result){
            //debugger;
            data = result['properties']['periods'];
            

            if (data[0]['name']== "Tonight" || data[0]['name']=="Overnight")
            {
                data_filter();
                for (var i=1;i<=7 ;i++)
                {   
                      
                        if (i==1) 
                        {
                            $("#day1 .day").text("NOW");
                            $("#day1 .high_temp").text("...");
                            $("#day1 .low_temp").text(data[0]['temperature']+" F");
                            $("#day1 .first").text(data[0]['fisrt_forecast']);
                            $("#day1 .second").text(data[0]['second_forecast']);
                            $("#day1 img").attr('src',  data[0]['icon']);

                        }
                            
                        
                        else
                        {
                            $("#day"+i+" .day").text(data[i*2-3]['name']);
                            $("#day"+i+" img").attr('src', data[i*2-3]['icon']);
                            $("#day"+i+" .high_temp").text(data[i*2-3]['temperature']+" F");
                            $("#day"+i+" .low_temp").text(data[i*2-2]['temperature']+" F");
                            $("#day"+i+" .first").text(data[i*2-3]['fisrt_forecast']);
                            $("#day"+i+" .second").text(data[i*2-3]['second_forecast']);

                            if (data[i*2-3]['name'] == "SUN" || data[i*2-3]['name'] == "SAT")
                            {
                                $("#day"+i+" .day").css('color','yellow');
                            }
                            else
                                $("#day"+i+" .day").css('color','white');
                        }

                }
            }

            else
            {
                data_filter();
                for (var i=1;i<=7 ;i++)
                {   
                        if (i==1) 
                        {

                            $("#day1 .day").text("NOW");
                            $("#day1 .high_temp").text(data[0]['temperature']+" F");
                            $("#day1 .low_temp").text(data[1]['temperature']+" F");
                            $("#day1 .first").text(data[0]['fisrt_forecast']);
                            $("#day1 .second").text(data[0]['second_forecast']);
                            $("#day1 img").attr('src', data[0]['icon']);
                        }
                        
                        else
                        {
                            $("#day"+i+" .day").text(data[i*2-2]['name']);
                            $("#day"+i+" img").attr('src', data[i*2-2]['icon']);
                            $("#day"+i+" .high_temp").text(data[i*2-2]['temperature']+" F");
                            $("#day"+i+" .low_temp").text(data[i*2-1]['temperature']+" F");
                            $("#day"+i+" .first").text(data[i*2-2]['fisrt_forecast']);
                            $("#day"+i+" .second").text(data[i*2-2]['second_forecast']);

                            if (data[i*2-2]['name'] == "SUN" || data[i*2-2]['name'] == "SAT")
                            {
                                $("#day"+i+" .day").css('color','yellow');
                            }
                            else
                                $("#day"+i+" .day").css('color','white');
                        }
                }
            }
        }
    
    });


  


function data_filter(){
   
   for (var i=0;i< data.length;i++)
   {
        data[i]['name'] = data[i]['name'].substr(0,3).toUpperCase();

        if (data[i]['name'] == "WAS" && i%2 ==0) 
        {
            data[i]['name'] = data[i+1]['name'].substr(0,3).toUpperCase();
        }

        var short_forecast_group = data[i]['shortForecast'].split("then");
        if (short_forecast_group.length == 1) 
            {
                var first_forecast = short_forecast_group[0].split(" ");
                data[i]['fisrt_forecast'] = first_forecast[first_forecast.length-1];
                data[i]['second_forecast'] = "...";
            }
        else
        {
            var first_forecast = short_forecast_group[0].split(" ");
            var last_forecast = short_forecast_group[short_forecast_group.length-1].split(" ");
            data[i]['fisrt_forecast'] = first_forecast[first_forecast.length-2];
            data[i]['second_forecast'] =  last_forecast[last_forecast.length-1];
  
        }
   }
}

   

});
</script>