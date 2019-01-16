<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>

        <script src="_js/jquery.js"></script>
        <script>
            //Fazer cadastro add url '&APPID  ={minha_apiKey}'
            $.ajax({
                type:"GET",
                url:"https://samples.openweathermap.org/data/2.5/weather?q=London&appid=b6907d289e10d714a6e88b30761fae22",
                async:false
            }).done(function(data){
                console.log(data);
            }).fail(function(){
                console.log('falha');
            })
        </script>
    </body>
</html>