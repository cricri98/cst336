<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title> View Favorites </title>
        
        <script>
            
            function displayFavorites(keywordLink){
                //alert($(keyword)
                $.ajax({
                    type: "get",
                    url: "api/favoritesAPI.php",
                    dataType: "json",
                    data: {
                      "action": "favorites",
                     
                    },
                    success: function(data, status) {
                        //alert(data);
                        data.forEach(function(i){
                           $("#keywords").append(i.keyword +" "); 
                        });
                    },
                    complete: function(data, status) { //optional, used for debugging purposes
                      //alert(status);
                    }
                  });//ajax
            }    
        
            $(document).ready(function(){
                var keyword = $(keywordLink).html();
                $.ajax({
                    type: "get",
                    url: "api/favoritesAPI.php",
                    dataType: "json",
                    data: {
                      "action": "keyword",
                     "keyword": keyword
                    },
                    success: function(data, status) {
                        //alert(data);
                        data.forEach(function(i){
                           $("#keywords").append(i.keyword +" "); 
                        });
                    },
                    complete: function(data, status) { //optional, used for debugging purposes
                      //alert(status);
                    }
                  });//ajax
                
            });// document ready 
             
        </script>
    </head>
    <body>

        <h1> Favorite Images </h1>
        
        <div id="keywords"></div>
        
        <div id="favorites"></div>
    </body>
</html>