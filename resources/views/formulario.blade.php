<html>
<head>
    <title>DW32-Servidor</title>
</head>

<body>


<form action="usuarioaceptado" method="post">
    {{ csrf_field() }}
    <input type="text" name="nombre" />
    <input type="submit" value="Buscar" />
</form>


</body>

</html>