<main class="contenedor seccion contenido-centrado">
        <h1>Iniciar sesion</h1>
         <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?> 

        <form  method="POST" class="formulario" action="/login">
            <fieldset>
                    <legend>Email y password</legend>

                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="Tu email" id="email">

                    <label for="password">Password</label>
                    <input name="password" id="password" type="password" placeholder="Tu password" >

                </fieldset>

                <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
        </form>
    </main>