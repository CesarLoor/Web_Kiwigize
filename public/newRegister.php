<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/newRegister.css">
    <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="signin-in-form">
                    <h2 class="title">Iniciar Sesion</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" id="user" placeholder="Nombre de usuario">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" placeholder="Contraseña">
                    </div>
                    <input type="submit" value="Iniciar Sesion" id="iniciar" class="btn solid">
                    <button type="button" class="btn solid" onclick="" id="regresar">Regresar</button>

                    <p class="social-text">O inicia sesion con una red Social</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </form>

                <form action="" class="signin-up-form" >
                    <h2 class="title">Registro</h2>
                    <input type="hidden" id="id" />
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" id="nombre" placeholder="Nombre de usuario">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" id="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="contrasenia" placeholder="Contraseña">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="contrasenia2" placeholder="Confirmar Contraseña">
                    </div>
                    <input type="submit" value="Registrarse" id="registrarse" class="btn solid">
                    <button type="button" class="btn solid" onclick="" id="regresar">Regresar</button>

                    <p class="social-text">O Registra con una red Social</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>No tienes una cuenta?</h3>
                    <p>Animate y forma parte de la familia Kiwigize, en nuestra pagina podras encontrar muchas recetas de todo el mundo, pero principalmente del Ecuador, te digo algo: es gratis!!
                    ¿Que estas esperando?
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Registrarse</button>
                </div>  

                <img src="./IMG/chef-login.svg" class="image" alt="chefs-cooking">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Uno de nosotros ?</h3>
                    <p> Gracias por formar parte de la familia de Kiwigize, es gratificante compartir contigo las recetas que encontramos alrededor del mundo, sobre todo las de nuestro lindo Ecuador</p>
                    <button class="btn transparent" id="sign-in-btn">Iniciar Sesion</button>
                </div>

                <img src="./IMG/chefs-cooking.svg" class="image" alt="chefs-cooking">
            </div>
        </div>
    </div>
    <script src="./JS/register.js"></script>
</body>
</html>