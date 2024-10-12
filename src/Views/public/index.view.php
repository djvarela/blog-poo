<header>
    <h1>Homenaje al Blog Scout La Roca del Consejo</h1>
    <h2>Un legado para la comunidad Scout en línea de habla hispana</h2>
</header>
<div class="contenedor">
    <main>


        <section>

            <p>
                ¡Hola a todos!</br> En este sitio quiero rendir homenaje al blog <strong>La Roca del Consejo</strong>,
                que fue una de las mayores comunidades en línea de habla hispana sobre el mundo Scout. </br>
                </br>
                Este blog "fue creado en 2001 como un modesto foro para Viejos Lobos, pero rápidamente se convirtió en una fuente de información
                invaluable para la comunidad Scout en línea". A lo largo de los años, el blog fue creciendo y evolucionando, abriendo nuevos espacios
                y convirtiéndose en una comunidad activa y diversa.</br>
                </br>
                El éxito de "La Roca del Consejo" se debió en gran parte a la pasión y dedicación de su creador y colaboradores, quienes compartía
                con gran habilidad sus experiencias y consejos sobre el mundo Scout. A través de este blog, muchos jóvenes y adultos pudieron aprender
                nuevas habilidades, compartir sus propias experiencias y conectarse con otros Scouts de todo el mundo. </br>
                </br>
                Aunque el blog ya no esté activo (desconozco los motivos), su legado sigue siendo importante y relevante para nosotros hoy en día.
                Como miembro del movimiento Scout, quiero honrar y recordar la labor de "La Roca del Consejo", y alentar a otros Scouts a mantener
                vivo el espíritu Scout que inspiró a este blog.</br>
                </br>
                Por eso, si estás interesado en el mundo Scout y quieres aprender y compartir más sobre el movimiento, te invito a explorar (proximamente)
                el contenido de este sitio. Aquí encontrarás una gran cantidad de información sobre este Gran Juego.</br>
                </br>
                ¡Únete a mí en este homenaje a "La Roca del Consejo" y trabajemos juntos para seguir adelante con el legado de ese gran blog Scout!</br>
            </p>

            <h2>Ayudame a mantener viva la llama</h2>
        </section>

        <figure>
            <img src="./giphy.gif" alt="Mantener la llama">
            <figcaption>Extraido de Giphy, autor: <a href='https://giphy.com/channel/chrisgannon'>Chris Gannon</a> </figcaption>
        </figure>

    </main>


    <section class="forms-conteiner">
        <h2>Puedes contactarnos y dejarnos consultas, sugerencias o de que forma podrias colaborar con este sitio.</h2>
        <form action="./contacto.php" method="post" autocomplete="off">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Tu nombre">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Tu direccion de correo electronico">

            <label for="asunto">Asunto:</label>
            <input type="text" name="asunto" id='asunto' placeholder="Ingresa el motivo de tu contacto">

            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>

            <input type="hidden" name="token" id="token">
            <button type="submit" disabled id="enviar-btn">Enviar</button>
        </form>

    </section>

</div>
<!-- 
 <script>
    grecaptcha.ready( function(){
        grecaptcha.execute("6Lci0F8iAAAAAIKt3FPtL3rnhxbcqkOvWXwKoifv", {action:"formulario"}
        ).then( function(token){
            const eltoken = document.getElementById("token")
            const btn = document.getElementById("enviar-btn")
            eltoken.value=token;
            btn.disabled=false;
          
        })

    });

</script> -->