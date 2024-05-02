<main class="contenedor seccion">
        <h1>Contacto</h1>

        <?php if($mensaje) { ?>
                <p class='alerta exito'> <?php echo $mensaje;  ?></p>
            <?php }?>

        <picture>
            <source srcset="build/img/destacada3.webp" type="img/webp">
            <source srcset="build/img/destacada3.jpg" type="img/jpeg">
            <img login="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form action="/contacto" class="formulario" method="POST">
            <fieldset>
                <legend>Informacion personal</legend>
            
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu nombre" name="contacto[nombre]" required>

                <label for="mensaje">Mensaje: </label>
                <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la propiedad</legend>

                <label for="opciones">Compra o Venta :</label>
                <select name="contacto[tipo]" id="opciones" required>
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="Compra">Compra</option>
                    <option value="Venta">Venta</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input id="presupuesto" type="number" placeholder="Tu presupuesto" name="contacto[precio]" required>
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input  type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" required>

                    <label for="contactar-email">Email</label>
                    <input type="radio" value="email" id="contactar-email" name="contacto[contacto]" required>
                </div>

                <div id="contacto"></div>

               

            </fieldset>

            <input type="submit" class="boton-verde">
        </form>
    </main>