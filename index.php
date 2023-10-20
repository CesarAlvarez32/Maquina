<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<script src="assets/js/metodos.js"></script>
    <center>
        <header>
            <h1>Adivinare que personaje estas describiendo</h1>
            <h3>¡Bienvenid@!</h3>
        </header>
        <section class="section1">
            <article>
                <div id="texto">
                    <hr><br>
                    <h1>Para empezar...</h1>
                    <p>Este cuestionario tiene como función encontrar o identificar el personaje que más se acerque a las
                        caractersticas que el usuario vaya seleccionando en las siguientes preguntas, por favor siga las indicaciones
                        como se le pide para poder tener una experiencia mucho más agradable.
                    </p><br>
                    <hr>
                    <center>
                        <button type ="button" onclick = "ocultar();">Mostrar preguntas</button>
                    </center>
                </div>
                <center>
                    <!-- --------------------------------------------------------------------------------- -->
                    <div id="a1">
                        <hr>
                            <p>¿Tu personaje es real?</p>
                            <input type="radio" name="a" onclick="validar('si','','','','','','','');"><label for="">Sí</label>
                            <input type="radio" name="a" onclick="validar('no','','','','','','','');"><label for="">No</label>
                        <hr>
                    </div>
                    <!-- --------------------------------------------------------------------------------- -->
                    <div id="b1">
                        <hr>
                            <p>¿Tu personaje que categoría es?</p>
                            <input type="radio" name="a" onclick="validar('no','Mascota','','','','','');"><label>Mascota</label>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','','','','');"><label>Videojuegos</label>
                            <input type="radio" name="a" onclick="validar('no','Anime','','','','','','');"><label>Anime</label>
                            <input type="radio" name="a" onclick="validar('no','Pelicula','','','','','','');"><label>Pelicula</label>
                            <input type="radio" name="a" onclick="validar('no','Animacion','','','','','','');"><label>Animacion</label>
                            <input type="radio" name="a" onclick="validar('no','Folclore','','','','','','');"><label>Folclore</label>
                            <input type="radio" name="a" onclick="validar('no','Manga','','','','','','');"><label>Manga</label>
                            <input type="radio" name="a" onclick="validar('no','Meme','','','','','','');"><label>Meme</label>
                        <hr>
                    </div>
                    <div id="b2">
                        <hr>
                            <p>¿Tu personaje que categoría es?</p>
                            <input type="radio" name="a" onclick="validar('si','Mascota','','','','','','');"><label>Mascota</label>
                            <input type="radio" name="a" onclick="validar('si','Deportista','','','','','','');"><label>Deportista</label>
                            <input type="radio" name="a" onclick="validar('si','Artista','','','','','','');"><label>Artista</label>
                            <input type="radio" name="a" onclick="validar('si','Entretenimiento','','','','','','');"><label>Entretenimiento</label>
                            <input type="radio" name="a" onclick="validar('si','Historia','','','','','','');"><label>Historia</label>
                            <input type="radio" name="a" onclick="validar('si','Meme','','','','','','');"><label>Meme</label>
                        <hr>
                    </div>
                    <!-- --------------------------------------------------------------------------------- -->
                    <div id="c1">
                        <hr>
                            <p>¿Tu personaje que oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('si','Deportista','','','','','Deportista','');"><label>Deportista</label>
                            <input type="radio" name="a" onclick="validar('si','Deportista','','','','','Conductor','');"><label>Conductor</label>
                            <input type="radio" name="a" onclick="validar('si','Deportista','','','','','Luchador','');"><label>Luchador</label>
                        <hr>
                    </div>
                    <div id="c2">
                        <hr>
                            <p>¿De que color es el cabello de tu personaje?</p>
                            <input type="radio" name="a" onclick="validar('si','Artista','','','','Blanco','','');"><label>Blanco</label>
                            <input type="radio" name="a" onclick="validar('si','Artista','','','','Negro','','');"><label>Negro</label>
                        <hr>
                    </div>
                    <div id="c3">
                        <hr>
                            <p>¿Tu personaje es hombre o mujer?</p>
                            <input type="radio" name="a" onclick="validar('si','Entretenimiento','H','','','','','');"><label>Hombre</label>
                            <input type="radio" name="a" onclick="validar('si','Entretenimiento','M','','','','','');"><label>Mujer</label>
                        <hr>
                    </div>
                    <div id="c4">
                        <hr>
                            <p>¿Tu personaje de que color tiene el cabello?</p>
                            <input type="radio" name="a" onclick="validar('si','Historia','','','','Negro','','');"><label>Negro</label>
                            <input type="radio" name="a" onclick="validar('si','Historia','','','','Castaño','','');"><label>Castaño</label>
                            <input type="radio" name="a" onclick="validar('si','Historia','','','','Blanco','','');"><label>Blanco</label>
                        <hr>
                    </div>
                    <div id="c5">
                        <hr>
                            <p>¿Tu personaje que es?</p>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Humano','','','','');"><label>Humano</label>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Semi-dios','','','','');"><label>Semi-Dios</label>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Animal','','','','');"><label>Animal</label>
                        <hr>
                    </div>
                    <div id="c6">
                        <hr>
                            <p>¿Tu personaje que es?</p>
                            <input type="radio" name="a" onclick="validar('no','Anime','','Humano','','','','');"><label>Humano</label>
                            <input type="radio" name="a" onclick="validar('no','Anime','','Saiyajin','','','','');"><label>Saiyajin</label>
                        <hr>
                    </div>
                    <div id="c7">
                        <hr>
                            <p>¿Tu personaje que es?</p>
                            <input type="radio" name="a" onclick="validar('no','Pelicula','H','','','','','');"><label>Hombre</label>
                            <input type="radio" name="a" onclick="validar('no','Pelicula','M','','','','','');"><label>Mujer</label>
                        <hr>
                    </div>
                    <div id="c8">
                        <hr>
                            <p>¿Tu personaje que es?</p>
                            <input type="radio" name="a" onclick="validar('no','Animacion','H','','','','','');"><label>Hombre</label>
                            <input type="radio" name="a" onclick="validar('no','Animacion','M','','','','','');"><label>Mujer</label>
                        <hr>
                    </div>
                    <div id="c9">
                        <hr>
                            <p>¿Tu personaje de que color tiene el cabello?</p>
                            <input type="radio" name="a" onclick="validar('no','Folclore','','','','Negro','','');"><label>Negro</label>
                            <input type="radio" name="a" onclick="validar('no','Folclore','','','','Rubio','','');"><label>Rubio</label>
                        <hr>
                    </div>
                     <!-- --------------------------------------------------------------------------------- -->
                     <div id="d1">
                        <hr>
                            <p>¿Tu personaje que hace?</p>
                            <input type="radio" name="a" onclick="validar('si','Deportista','','','','','Deportista','Barcelona');"><label>Jugó en el barcelona fc</label>
                            <input type="radio" name="a" onclick="validar('si','Deportista','','','','','Deportista','Mexicana');"><label>Jugó para la selección mexicana</label>
                            <input type="radio" name="a" onclick="validar('si','Deportista','','','','','Deportista','Madrid');"><label>Jugó para el real madrid</label>
                        <hr>
                    </div>
                    <div id="d2">
                        <hr>
                            <p>¿Tu personaje que hace?</p>
                            <input type="radio" name="a" onclick="validar('si','Artista','','','','Negro','','Queen');"><label>Integrante de queen</label>
                            <input type="radio" name="a" onclick="validar('si','Artista','','','','Negro','','Corridos');"><label>Compositor de Corridos</label>
                            <input type="radio" name="a" onclick="validar('si','Artista','','','','Negro','','El sol');"><label>El sol de mexico</label>
                            <input type="radio" name="a" onclick="validar('si','Artista','','','','Negro','','Thriller');"><label>Compositor de thriller</label>
                        <hr>
                    </div>
                    <div id="d3">
                        <hr>
                            <p>¿Tu personaje que oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('si','Entretenimiento','H','','','','Comediante','');"><label>Comediante</label>
                            <input type="radio" name="a" onclick="validar('si','Entretenimiento','H','','','','Youtuber','');"><label>Youtúber</label>
                        <hr>
                    </div>
                    <div id="d4">
                        <hr>
                            <p>¿Tu personaje que oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('si','Historia','','','','Negro','General','');"><label>General</label>
                            <input type="radio" name="a" onclick="validar('si','Historia','','','','Negro','Soldado','');"><label>Soldado</label>
                        <hr>
                    </div>
                    <div id="d5">
                        <hr>
                            <p>¿Tu personaje de que color tiene el cabello?</p>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Humano','','Castaño','','');"><label>Castaño</label>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Humano','','Negro','','');"><label>Negro</label>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Humano','','Rubio','','');"><label>Rubio</label>
                        <hr>
                    </div>
                    <div id="d6">
                        <hr>
                            <p>¿Tu personaje tiene cabello?</p>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Animal','Si','','','');"><label>Sí</label>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Animal','No','','','');"><label>No</label>
                        <hr>
                    </div>
                    <div id="d7">
                        <hr>
                        <p>¿Tu personaje de que color tiene el cabello?</p>
                            <input type="radio" name="a" onclick="validar('no','Anime','','Humano','','Negro','','');"><label>Negro</label>
                            <input type="radio" name="a" onclick="validar('no','Anime','','Humano','','Rubio','','');"><label>Rubio</label>
                        <hr>
                    </div>
                    <div id="d8">
                        <hr>
                        <p>¿Tu personaje de oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('no','Anime','','Saiyajin','','','Erudito','');"><label>Erudito</label>
                            <input type="radio" name="a" onclick="validar('no','Anime','','Saiyajin','','','Luchador','');"><label>Luchador</label>
                        <hr>
                    </div>
                    <div id="d9">
                        <hr>
                            <p>¿Tu personaje que es?</p>
                            <input type="radio" name="a" onclick="validar('no','Pelicula','H','Humano','','','','');"><label>Humano</label>
                            <input type="radio" name="a" onclick="validar('no','Pelicula','H','Animal','','','','');"><label>Animal</label>
                        <hr>
                    </div>
                    <div id="d10">
                        <hr>
                            <p>¿Tu personaje que tipo es?</p>
                            <input type="radio" name="a" onclick="validar('no','Animacion','H','Humano','','','','');"><label>Humano</label>
                            <input type="radio" name="a" onclick="validar('no','Animacion','H','Monstruo','','','','');"><label>Monstruo</label>
                            <input type="radio" name="a" onclick="validar('no','Animacion','H','Animal','','','','');"><label>Animal</label>
                            <input type="radio" name="a" onclick="validar('no','Animacion','H','Hada','','','','');"><label>Hada</label>
                            <input type="radio" name="a" onclick="validar('no','Animacion','H','Mutante','','','','');"><label>Mutante</label>
                        <hr>
                    </div>
                    <!-- --------------------------------------------------------------------------------- -->
                    <div id="e1">
                        <hr>
                            <p>¿Tu personaje que oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('si','Historia','','','','Negro','General','Frances');"><label>Gobernante Frances</label>
                            <input type="radio" name="a" onclick="validar('si','Historia','','','','Negro','Soldado','Austriaco');"><label>Pintor de Austriaco</label>
                        <hr>
                    </div>
                    <div id="e2">
                        <hr>
                            <p>¿Tu personaje que oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Humano','','Castaño','Asesino','');"><label>Asesino</label>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Humano','','Castaño','Plomero','');"><label>Plomero</label>
                        <hr>
                    </div>
                    <div id="e3">
                        <hr>
                            <p>¿Tu personaje que oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Humano','','Negro','Plomero','');"><label>Asesino</label>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Humano','','Negro','Soldado','');"><label>Soldado</label>
                        <hr>
                    </div>
                    <div id="e4">
                        <hr>
                            <p>¿Tu personaje que oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Animal','No','','','');"><label>Asesino</label>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Animal','No','','','');"><label>Soldado</label>
                        <hr>
                    </div>
                    <div id="e5">
                        <hr>
                            <p>¿Tu personaje que oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Animal','No','','Ayudante','');"><label>Ayudante</label>
                            <input type="radio" name="a" onclick="validar('no','Videojuegos','','Animal','No','','Codigo','');"><label>Código</label>
                        <hr>
                    </div>
                    <div id="e6">
                        <hr>
                            <p>¿Tu personaje que oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('no','Anime','','Humano','','Negro','Caballero','');"><label>Caballero</label>
                            <input type="radio" name="a" onclick="validar('no','Anime','','Humano','','Negro','Pirata','');"><label>Pirata</label>
                        <hr>
                    </div>
                    <div id="e7">
                        <hr>
                            <p>¿Tu personaje de que tiene el cabello?</p>
                            <input type="radio" name="a" onclick="validar('no','Pelicula','H','Humano','','Castaño','','');"><label>Castaño</label>
                            <input type="radio" name="a" onclick="validar('no','Pelicula','H','Humano','','Negro','','');"><label>Negro</label>
                        <hr>
                    </div>
                    <div id="e8">
                        <hr>
                            <p>¿Tu personaje de que tiene el cabello?</p>
                            <input type="radio" name="a" onclick="validar('no','Animacion','H','Humano','','Castaño','','');"><label>Castaño</label>
                            <input type="radio" name="a" onclick="validar('no','Animacion','H','Humano','','Negro','','');"><label>Negro</label>
                        <hr>
                    </div>
                    <div id="e8">
                        <hr>
                            <p>¿Tu personaje de que tiene el cabello?</p>
                            <input type="radio" name="a" onclick="validar('no','Animacion','H','Animal','','','Asesino','');"><label>Asesino</label>
                            <input type="radio" name="a" onclick="validar('no','Animacion','H','Animal','','','Cajero','');"><label>Cajero</label>
                        <hr>
                    </div>
                     <!-- --------------------------------------------------------------------------------- -->
                     <div id="f1">
                        <hr>
                            <p>¿Tu personaje que oficio tiene?</p>
                            <input type="radio" name="a" onclick="validar('no','Pelicula','H','Humano','','Castaño','Cantante','');"><label>Cantante</label>
                            <input type="radio" name="a" onclick="validar('no','Pelicula','H','Humano','','Castaño','Estudiante','');"><label>Estudiante</label>
                        <hr>
                    </div>
                    <!-- --------------------------------------------------------------------------------- -->
                    <div id="p1">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Dr simi</h1>
                        </center>
                   </div>
                   <div id="p2">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Triple H</h1>
                        </center>
                   </div>
                   <div id="p3">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Checo Perez</h1>
                        </center>
                   </div>
                   <div id="p4">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Messi</h1>
                        </center>
                   </div>
                   <div id="p5">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Chicharito</h1>
                        </center>
                   </div>
                   <div id="p6">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Cristiano Ronaldo</h1>
                        </center>
                   </div>
                   <div id="p7">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Da Vinci</h1>
                        </center>
                   </div>
                   <div id="p8">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Freddie Mercury</h1>
                        </center>
                   </div>
                   <div id="p9">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Junior. H</h1>
                        </center>
                   </div>
                   <div id="p10">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Luis Miguel</h1>
                        </center>
                   </div>
                   <div id="p11">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Michael Jackson</h1>
                        </center>
                   </div>
                   <div id="p12">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Karely Ruiz</h1>
                        </center>
                   </div>
                   <div id="p13">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Franco Escamilla</h1>
                        </center>
                   </div>
                   <div id="p14">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Mr. Beast</h1>
                        </center>
                   </div>
                   <div id="p15">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Chems</h1>
                        </center>
                   </div>
                   <div id="p16">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Colosio</h1>
                        </center>
                   </div>
                   <div id="p17">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Amlo</h1>
                        </center>
                   </div>
                   <div id="p18">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Juan Escutia</h1>
                        </center>
                   </div>
                   <div id="p19">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Napoleon</h1>
                        </center>
                   </div>
                   <div id="p20">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Adolf Hitler</h1>
                        </center>
                   </div>
                   <div id="p21">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Tigre Toño</h1>
                        </center>
                   </div>
                   <div id="p22">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Kratos</h1>
                        </center>
                   </div>
                   <div id="p23">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Leon S. Kennedy</h1>
                        </center>
                   </div>
                   <div id="p24">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Etzio</h1>
                        </center>
                   </div>
                   <div id="p25">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Mario Bros</h1>
                        </center>
                   </div>
                   <div id="p26">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Wario</h1>
                        </center>
                   </div>
                   <div id="p27">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>El penitente</h1>
                        </center>
                   </div>
                   <div id="p28">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Sonic</h1>
                        </center>
                   </div>
                   <div id="p29">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Yoshi</h1>
                        </center>
                   </div>
                   <div id="p30">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Dinosaurio de Google</h1>
                        </center>
                   </div>
                   <div id="p31">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Naruto</h1>
                        </center>
                   </div>
                   <div id="p32">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Seiya</h1>
                        </center>
                   </div>
                   <div id="p33">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Luffy</h1>
                        </center>
                   </div>
                   <div id="p34">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Son Gohan</h1>
                        </center>
                   </div>
                   <div id="p35">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Son Goku</h1>
                        </center>
                   </div>
                   <div id="p36">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Mulan</h1>
                        </center>
                   </div>
                   <div id="p37">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Bambi</h1>
                        </center>
                   </div>
                   <div id="p38">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Dr. Strange</h1>
                        </center>
                   </div>
                   <div id="p39">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Miguel</h1>
                        </center>
                   </div>
                   <div id="p40">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Andy</h1>
                        </center>
                   </div>
                   <div id="p41">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Wanda</h1>
                        </center>
                   </div>
                   <div id="p42">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Cosmo</h1>
                        </center>
                   </div>
                   <div id="p43">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>La Mole</h1>
                        </center>
                   </div>
                   <div id="p44">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Spiderman</h1>
                        </center>
                   </div>
                   <div id="p45">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Cosmo</h1>
                        </center>
                   </div>
                   <div id="p46">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Come galletas</h1>
                        </center>
                   </div>
                   <div id="p47">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Patricio</h1>
                        </center>
                   </div>
                   <div id="p48">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Calamardo</h1>
                        </center>
                   </div>
                   <div id="p49">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Beelzebu</h1>
                        </center>
                   </div>
                   <div id="p50">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Lucifugio</h1>
                        </center>
                   </div>
                   <div id="p51">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Lucyna Kushinada</h1>
                        </center>
                   </div>
                   <div id="p52">
                        <center>
                            <h1>Tu personaje es:</h1>
                            
                            <h1>Mamá Coca</h1>
                        </center>
                   </div>
            </article>
        </section>
    </center>
</body>
</html>
