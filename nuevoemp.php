<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Agregue El Nuevo Empleado </h2>
<form>
Numero Empleado<input type=number name=id required><br><br>
Nombre <input type=text name=nom required><br><br>
Apellido <input type=text name=ape required><br><br>
DNI <input type=number name=dni required><br><br>
Telefono<input  type=text name=tel required><br><br>
Usuario<input type=text name=usu required><br><br>
Contraseña<input type=text name=pass required><br><br>
Tipo de Usuario<select name="tipo">
                  <option value="1">Administrador</option>
                  <option value="2">Empleado</option>
               </select><br><br>
<input type=submit name=alta value="Alta de Usuario">
</form>

</body>
</html>
