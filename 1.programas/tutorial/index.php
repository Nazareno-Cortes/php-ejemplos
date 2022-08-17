<!DOCTYPE html>
<html lang = en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-SCALE=1.0">
    <title>Tutorial</title>
</head>

<body>
    <div> </div>
    <!-- ?php include 'php_code.php';? --> 
    <h1>  </h1>
    <div> </div>

    <form action="procesar.php" method="get">
        <label>
            Nombre:
             <input type="text" name="nombre">
        </label>
        <br>
        <label>
            Edad:
             <input type="number" name="edad">
        </label>
        <br>
        <select name="sexo">
        <option value="Masculino">Masculino</option>
        <option value="Femenino" >Femenino</option>
        </select> 
        <br>

        <p>Roles</p>

        <label>
            <input type="checkbox" name="roles[]" value="Administrador"/> 
            Administrador
        </label>

        <label>
            <input type="checkbox" name="roles[]" value="Editor"/> 
            Editor
        </label>

        <label>
            <input type="checkbox" name="roles[]" value="Moderador"/> 
            Moderador
        </label>
        <br>
        <br>
        <label>
            Imagen:
            <br>
            <input type = "file" name="image">
        </label>
        <br>
        <br>

        <button type="submit" value="Enviar"> enviar</button>

    </form>

</body>
</html> 
