<!DOCTYPE html>
<html lang="es">
<head>
<title>Manejo Secuencial de Imagenes</title>
<script src="{{asset('js/jquery-3.5.0.js')}}"></script>
<style>
li {
 float: left;
 list-style: none;
 margin: 0 25px 25px 0;
display: none;
}
li img {
 width: 100px;
 height: 100px;
}
</style>
</head>
<body>
<a href="#" id="mostrar">Mostrar</a> / <a href="#" id="ocultar">Ocultar</a>
 <ul>
 <li><img src="{{asset('img/1.jpg')}}"></li>
 <li><img src="{{asset('img/2.png')}}"></li>
 <li><img src="{{asset('img/3.png')}}"></li>
 <li><img src="{{asset('img/1.png')}}"></li>
 <li><img src="{{asset('img/2.png')}}"></li>
 <li><img src="{{asset('img/3.png')}}"></li>
 </ul>
<script>
$(document).ready(function() {
 var lista = $('li').hide();
 $('#mostrar').click(function() {
 var i = 0;
 (function mostrarimg() {
 lista.eq(i++).fadeIn(400, mostrarimg);
 })();
 });
 $('#ocultar').click(function() {
 var i = $('li').length;
 (function ocultarimg() {
 lista.eq(--i).fadeOut(200, ocultarimg);
 })();
 });
});
</script>
</body>
</html>