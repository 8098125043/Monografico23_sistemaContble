<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login - SICOLAR</title>

<link rel="stylesheet" href="css/login.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>

<body>

<div class="login-container">

   
    <div class="left">
        <img src="img/image.png" alt="Sistema SICOLAR">
        <div class="overlay"></div>
    </div>

  
    <div class="right">

        <div class="login-box">

            <h2>Iniciar Sesión</h2>

         
            <?php if(isset($_GET['error'])){ ?>
                <div class="alert error">
                    Correo o contraseña incorrectos
                </div>
            <?php } ?>

         
            <form action="validar_login.php" method="POST">

                <div class="input-group">
                    <span>📧</span>
                    <input 
                        type="email" 
                        name="correo" 
                        placeholder="Correo electrónico" 
                        required
                    >
                </div>

                <div class="input-group">
                    <span>🔒</span>
                    <input 
                        type="password" 
                        id="pass" 
                        name="password" 
                        placeholder="Contraseña" 
                        required
                    >
                    <span class="toggle" onclick="verPass()">👁</span>
                </div>

                <button type="submit" class="btn">
                    Iniciar sesión
                </button>

                <p class="crear">
                    <a href="crear_usuario.php">
                        Crear administrador
                    </a>
                </p>

            </form>

        </div>

    </div>

</div>

<script>
function verPass(){
    const p = document.getElementById("pass");
    p.type = p.type === "password" ? "text" : "password";
}
</script>

</body>
</html>