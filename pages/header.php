<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>SENATI</title>
    <!-- ESTILOS DE REGISTRO.PHP -->
    <style>
        .mainForm{
            /* align-items: center;
            height: 100vh;
            text-align: center; */
        }

        #formulario_registro{
            /* background-color: #fff;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50%; 
            flex-wrap: wrap; */
        }

        .formularioDiv{
            position: relative;
        }

        .formularioDivDiv{
            display: flex;
            justify-content: center;
        }

        .formularioDivDivDiv{
            position: relative;
        }

        .formularioLabel{
            position: absolute;
            top: 10px;
            left: 10px;
            color: gray;
            transition: .3s ease all;
            font-size: 19px;
        }

        .formularioInput{
            border: none;
            border-bottom: solid 1px black;
            outline: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 18px;
        }

        .formularioInput:focus~.formularioLabel,
        .formularioInput:valid ~ .formularioLabel{
            top: -30px;
            font-size: 20px;
            color:#4158D0;
        }
    </style>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/a6c690938d.js" crossorigin="anonymous"></script>

</head>
<body class="position-relative">