<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!--Incluyendo JQuery-->
 <script src="{{asset('js/jquery-3.5.1.js')}}"></script>
 <title>Practica Js</title>
 <script>
$(document).ready(function(){
 $("a").click(function(evento){
 alert("Has pulsado el enlace...nAhora serás enviado a DesarrolloWeb.com");
 });
});
</script>
</head>
<body>
<a href="https://google.com">Ir a Google.com</a>
</body>
</html>