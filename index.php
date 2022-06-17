<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="RATING" content="RTA-5042-1996-1400-1577-RTA" />
    <title>Exowish</title>
    <link rel="stylesheet" href="src/css/pages/normalize.min.css">
    <link rel="stylesheet" href="src/css/fonts/font-icons.min.css">
    <link rel="stylesheet" href="src/css/fonts/font-main.min.css">
    <link rel="stylesheet" href="src/css/pages/index.min.css">
</head>
<body class="background-main">
    <header class="header-properties">
        <a class="header-logotipo-link" href="/">
            <img class="header-logotipo" src="src/src-images/images/Logotipo.png" alt="Logotipo de Exowish">
        </a>
        <div class="header-div-form">
            <form class="header-form-search">
                <input class="header-input-search" type="Search" placeholder="Buscar">
                <span class="icon-input-search icon-rocket"></span>
                <button class="button-search" type="submit">
                    <span class="icon-input-search-right icon-magnifying-glass"></span>
                </button>
            </form>
        </div>
        <nav class="header-nav">
            <ul class="header-ul">
                <li class="header-li">
                    <a class="header-link" href="notifications.php">
                        <span style="transform: rotate(15deg);" class="icon-header-li icon-bell"></span>
                        <!-- <span class="icon-header-li icon-new"></span> -->
                    </a>
                </li>
                <li class="header-li">
                    <a class="header-link" href="chats.php">
                        <span class="icon-header-li icon-chat"></span>
                    </a>
                </li>
                <li class="header-li">
                    <a class="header-link" href="account_settings.php">
                        <span style="transform: rotate(270deg);" class="icon-header-li icon-sound-mix"></span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="section-menu-interaction">
        <div>
            <img class="menu-interaction-image" src="src/src-images/avatars/default_men.jpg" alt="Tú imagen de perfil.">
            <div class="div-menu-interaction">
                <a class="menu-interaction-nameuser" href="#">Usuario</a>
            </div>
        </div>
        <nav>
            <ul>
                <li class="menu-interaction-li">
                    <a class="menu-interaction-link" href="Index.php">Inicio</a>
                    <span class="icon-interaction-li icon-home"></span>
                </li>
                <li class="menu-interaction-li">
                    <a class="menu-interaction-link" href="suggestions.php">Sugerencias</a>
                    <span class="icon-interaction-li icon-new-message"></span>
                </li>
                <li class="menu-interaction-li">
                    <a class="menu-interaction-link" href="donations.php">Donaciones</a>
                    <span class="icon-interaction-li icon-paypal"></span>
                </li>
            </ul>
        </nav>
    </section>
    <main class="main">
        <div class="publications-box">
            <form action="">
                <textarea class="publications-box-textarea" name="" id="" rows="5" placeholder="¿Algo qué quieras compartir?" required></textarea>
                <input class="publications-box-input" id="filesUP[]" type="file" data-multiple-caption="{count}" accept="image/*,video/*,audio/*" multiple>
                <label class="publications-box-input-label" for="filesUP[]">
                    Subir fotos/videos
                    <span id="FilesUPCount" class="FilesUPCount"></span>
                </label>
                <button class="publications-box-submit" type="submit">Publicar</button>
            </form>
        </div>

        <section class="section-others">
            <div class="friends-requests">
                <h2 class="friends-requests-title">Solicitudes de amistad:</h2>
                <nav class="friend-requests">
                    <ul>
                        <li class="friend-request-li">
                            <a class="friend-request-username" href="#">Usuario</a>
                            <form class="friend-request-form" action="">
                                <button class="friend-request-button-accept" type="submit">Aceptar</button>
                                <button class="friend-request-button-reject" type="submit">Rechazar</button>
                            </form>
                            <a class="friend-request-avatar-link" href="#">
                                <img class="friend-request-avatar" src="src/src-images/avatars/default_men.jpg" alt="Imagen chico">
                            </a>
                        </li>
                        <!-- Más contenedores para prueba de solicitudes -->
                        <li class="friend-request-li">
                            <a class="friend-request-username" href="#">Usuario</a>
                            <form class="friend-request-form" action="">
                                <button class="friend-request-button-accept" type="submit">Aceptar</button>
                                <button class="friend-request-button-reject" type="submit">Rechazar</button>
                            </form>
                            <a class="friend-request-avatar-link" href="#">
                                <img class="friend-request-avatar" src="src/src-images/avatars/default_woman.jpg" alt="Imagen chica">
                            </a>
                        </li>
                        <li class="friend-request-li">
                            <a class="friend-request-username" href="#">Usuario</a>
                            <form class="friend-request-form" action="">
                                <button class="friend-request-button-accept" type="submit">Aceptar</button>
                                <button class="friend-request-button-reject" type="submit">Rechazar</button>
                            </form>
                            <a class="friend-request-avatar-link" href="#">
                                <img class="friend-request-avatar" src="src/src-images/avatars/default_men.jpg" alt="Imagen chico">
                            </a>
                        </li>
                        <!-- Fin contenedores para prueba -->
                        <button class="see-more">
                            Ver más
                        </button>
                    </ul>
                </nav>
            </div>
            <div class="direct">
                <h2 class="direct-title">
                    Directos:
                </h2>
                <nav class="direct-online">
                    <ul>
                        <li class="direct-online-li">
                            <a class="direct-online-link" href="#">
                                <img class="direct-online-img" src="src/src-images/images/Example_one.jpg" alt="Ejemplo #1">
                            </a>
                            <span class="direct-online-viewers">17</span>
                        </li>
                        <button class="see-more">
                            Ver más
                        </button>
                    </ul>
                </nav>
            </div>
            <div class="people-interest">
                <h2 class="people-interest-text">Creemos que estás personas tal vez sean de tu interes</h2>
                <nav class="people-interest-user">
                    <ul>
                        <li class="people-interest-li">
                            <a class="people-interest-link" href="#">
                                <img class="people-interest-avatar" src="src/src-images/avatars/default_woman.jpg" alt="Chica de 19 años de edad.">
                            </a>
                            <div class="people-info">
                                <p class="people-interest-info">Edad: 19 años.</p>
                                <p class="people-interest-info">País: Colombia</p>
                                <p class="people-interest-info">Genero: Mujer</p>
                            </div>
                        </li>
                        <!-- Más contenedores para prueba de intereses-->
                        <li class="people-interest-li">
                            <a class="people-interest-link" href="#">
                                <img class="people-interest-avatar" src="src/src-images/avatars/default_men.jpg" alt="Chico de 25 años de edad.">
                            </a>
                            <div class="people-info">
                                <p class="people-interest-info">Edad: 25 años.</p>
                                <p class="people-interest-info">País: Ecuador</p>
                                <p class="people-interest-info">Genero: Hombre</p>
                            </div>
                        </li>
                        <li class="people-interest-li">
                            <a class="people-interest-link" href="#">
                                <img class="people-interest-avatar" src="src/src-images/avatars/default_woman.jpg" alt="Persona de 23 años de edad.">
                            </a>
                            <div class="people-info">
                                <p class="people-interest-info">Edad: 23 años.</p>
                                <p class="people-interest-info">País: Venezuela</p>
                                <p class="people-interest-info">Genero: No definido</p>
                            </div>
                        </li>
                        <!-- Fin contenedores para prueba -->
                        <button class="see-more">
                            Ver más
                        </button>
                    </ul>
                </nav>
            </div>
            <aside class="advertisements">
                <h2 class="advertisements-title">Publicidad</h2>
                <div class="advertisements-box">
                    <a class="ads-url" href="#">
                        <img class="advertisements-img" src="src/src-images/images/anuncios-en-web.png" alt="ASDS">
                    </a>
                </div>
                <div class="contact-ads">
                    <h3 class="contact-title" >¿Quieres anunciarte?</h3>
                    <a class="contact-link" href="#">¡Contactanos!</a>
                </div>
            </aside>
        </section>
        <div class="publications">
            <div class="publications-user">
                <img class="publications-user-avatar" src="src/src-images/avatars/default_men.jpg" alt="">
                <a class="publications-user-username" href="#">xYeei17</a>
                <span class="publications-user-date">05-12-2018</span>
                <!-- <div class="publications-user-privacy"></div> -->
                <div class="publications-user-options icon-cog" id="publication-option-button">
                    <ul class="publications-user-options-ul" id="publication-options">
                        <li class="publications-user-options-li">
                            <span class="publications-user-options-icons icon-bookmark"></span>
                            <a class="publications-user-options-link" href="#">Guardar publicación</a>
                        </li>
                        <li class="publications-user-options-li">
                            <span class="publications-user-options-icons icon-new"></span>
                            <a class="publications-user-options-link" href="#">Reportar</a>
                        </li>
                        <li class="publications-user-options-li">
                            <span class="publications-user-options-icons icon-trash"></span>
                            <a class="publications-user-options-link" href="#">Eliminar publicación</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="publications-user-description">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="publications-user-content">
                <img class="publications-user-content-img" src="src/src-images/images/Example_two.jpg" alt="">
            </div>
            <div class="publications-user-reactions">
                <div class="publications-user-reaction">
                    <a class="publications-user-reaction-link" href="#">
                        <span class="publications-user-reaction-icons icon-star-outlined"></span>
                    </a>
                </div>
                <div class="publications-user-reaction">
                    <label for="input-comments" class="publications-user-reaction-link">
                        <span class="publications-user-reaction-icons icon-message">
                            <p style="display: inline-block;">Comentar</p>
                        </span>
                    </label>
                </div>
            </div>
            <div class="publications-comments">
                <div class="publications-comments-user">
                    <img src="" alt="">
                    <div>
                        <p></p>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="publications-user-comment">
                <div class="publications-user-comment-user">
                    <img class="publications-user-comment-user-avatar" src="src/src-images/avatars/default_woman.jpg" alt="">
                    <form class="publications-user-comment-form" action="">
                        <input id="input-comments" class="publications-user-comment-input" type="text" placeholder="Escribe un comentario...">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <section class="section-online-friends">
        <!-- <div class="online-friends-text">
            <h2 class="online-friends-title">Amigos conectados</h2> 
        </div> -->
        <div class="friends-online">
            <!-- <form action="">
                <input class="friends-online-search" type="Search" placeholder="Buscar amigo online">
                <span class="friends-online-search-icon icon-rocket"></span>
                <button class="friends-online-search-button">
                    <span class="friends-online-search-button-right icon-magnifying-glass"></span>
                </button>
            </form>
            <p class="friends-havent-online">No tienes amigos conectados :(</p> -->
            <p class="friends-havent-online">Proximamente (En desarrollo)</p>
        </div>
    </section>
    <script src="src/js/index/FilesUPCount.js"></script>
    <script src="src/js/index/PublicationOptions.js"></script>
</body>
</html>