<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>wink </title>

    <style>
        /* Underground Camouflage & Illusion Animation Styling */
        @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');

        :root {
            --black: #0b0b0b;
            --kaki: #6b8e23;
            /* olive drab green */
            --dark-kaki: #2e3c15;
            --light-kaki: #76ba43;
            --green-glow: #0ee30eaa;
            --text-color: #a5f59f;

            --camouflage-colors: #0b0b0b, #638d0f, #161c0d, #7fce46;
        }

        * {
            box-sizing: border-box;
        }

        h2,
        p,
        span,
        div,
        .img,
        iframe,
        .contact-links,
        .contact-link,
        .social-links {
            animation: linear slide;
            animation-timeline: view();
            animation-range: cover 0 cover 20%
        }

        @keyframes slide {
            from {
                transform: translateY(100%);
                opacity: 0
            }

            to {
                transform: translateY(0);
                opacity: 1
            }
        }

        body {
            margin: 0;
            font-family: 'Share Tech Mono', monospace;
            background: var(--black);
            color: var(--text-color);
            overflow-x: hidden;
            user-select: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            min-height: 100vh;
            display: flex;
            flex-direction: column;

        }

        /* Camouflage animated illusion background */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            background:
                radial-gradient(circle at 20% 30%, rgba(22, 206, 43, 0.8) 25%, transparent 40%),
                radial-gradient(circle at 80% 20%, rgba(35, 49, 10, 0.8) 30%, transparent 45%),
                radial-gradient(circle at 50% 50%, rgba(106, 255, 0, 0.8) 40%, transparent 60%),
                radial-gradient(circle at 40% 80%, rgba(11, 11, 11, 0.85) 35%, transparent 50%);
            animation: camouflageMove 20s linear infinite alternate;
            filter: contrast(1.2) brightness(0.85);
        }

        @keyframes camouflageMove {
            0% {
                background-position:
                    0% 0%,
                    100% 0%,
                    50% 50%,
                    40% 80%;
            }

            100% {
                background-position:
                    10% 20%,
                    90% 10%,
                    60% 40%,
                    50% 70%;
            }
        }

        /* Header */
        header {
            background: linear-gradient(90deg, var(--dark-kaki), var(--kaki));
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--green-glow);
            box-shadow: 0 0 8px var(--green-glow);
        }

        header h1 {
            margin: 0;
            font-weight: normal;
            font-size: 1.8rem;
            color: var(--green-glow);
            letter-spacing: 2px;
            text-shadow: 0 0 10px #70ff70aa;
        }

        nav {
            display: flex;
            gap: 16px;
        }

        nav button {
            background: transparent;
            border: none;
            padding: 8px 14px;
            font-family: 'Share Tech Mono', monospace;
            font-size: 1rem;
            color: var(--text-color);
            cursor: pointer;
            border-radius: 4px;
            transition: background 0.3s ease;
            border: 1px solid transparent;
            user-select: none;
        }

        nav button:hover,
        nav button.active {
            background: var(--green-glow);
            color: var(--black);
            border-color: var(--green-glow);
            box-shadow: 0 0 8px var(--green-glow);
        }

        .navbar {
            position: fixed;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #000000;
            padding: 0px 20px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
        }

        .hamburger-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger-menu .bar {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 4px 0;
            transition: 0.4s;
        }

        main {
            flex-grow: 1;
            padding: 24px;
            max-width: 960px;
            margin: 0 auto 24px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            box-shadow: 0 0 15px var(--green-glow);
            min-height: 70vh;
            color: var(--text-color);
        }

        section {
            display: none;
        }

        section.active {
            display: block;
        }

        /* Home page */
        #home h2 {
            font-size: 2rem;
            color: var(--green-glow);
            text-align: center;
            text-shadow: 0 0 10px var(--green-glow);
            margin-top: 0rem;
            margin-bottom: 1rem;
        }

        #home p {
            font-size: 1.1rem;
            line-height: 1.4em;
            max-width: 100%;
            margin: 0 auto;
        }

        #home img {
            margin-left: 5rem;
        }

        /* About */
        #about h2 {
            font-size: 1.8rem;
            border-bottom: 2px solid var(--green-glow);
            margin-bottom: 12px;
            text-align: center;
        }

        #about p {
            max-width: 600px;
            margin: 0 auto;
            font-size: 1rem;
        }

        /* Catalog */

        #catalog,
        main {
            width: 100%;
        }

        #catalog h2 {
            font-size: 1.8rem;
            color: var(--green-glow);
            margin-bottom: 10px;
            text-align: center;
        }

        #catalog-controls {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 14px;
            flex-wrap: wrap;
        }

        #catalog-controls button {
            background-color: var(--dark-kaki);
            border: 1px solid var(--green-glow);
            border-radius: 6px;
            color: var(--text-color);
            padding: 8px 12px;
            cursor: pointer;
            font-family: 'Share Tech Mono', monospace;
            box-shadow: 0 0 6px var(--green-glow);
            transition: background-color 0.3s;
        }

        #catalog-controls button:hover {
            background-color: var(--green-glow);
            color: var(--black);
        }

        #catalog-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 18px;
        }

        .catalog-item {
            background: var(--dark-kaki);
            border-radius: 8px;
            padding: 12px;
            box-shadow: 0 0 8px #405020aa;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--text-color);
            user-select: text;
        }

        .catalog-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 8px;
            box-shadow: 0 0 5px var(--green-glow);
        }

        .catalog-item textarea,
        .catalog-item input[type="text"] {
            background: var(--black);
            border: none;
            border-radius: 6px;
            color: var(--green-glow);
            resize: none;
            width: 100%;
            padding: 6px 8px;
            font-family: 'Share Tech Mono', monospace;
            font-size: 0.9rem;
            box-shadow: 0 0 5px var(--green-glow);
            margin-bottom: 6px;
        }

        .catalog-item textarea {
            height: 60px;
        }

        .catalog-item button {
            background: transparent;
            border: 1px solid var(--green-glow);
            border-radius: 6px;
            color: var(--green-glow);
            cursor: pointer;
            padding: 4px 10px;
            align-self: stretch;
            font-family: 'Share Tech Mono', monospace;
            transition: background-color 0.3s ease;
            margin-top: auto;
        }

        .catalog-item button:hover {
            background: var(--green-glow);
            color: var(--black);
        }

        input[type="file"] {
            display: none;
        }

        label.file-input-label {
            background: var(--dark-kaki);
            border: 1px solid var(--green-glow);
            border-radius: 6px;
            padding: 6px 10px;
            color: var(--text-color);
            cursor: pointer;
            font-family: 'Share Tech Mono', monospace;
            text-align: center;
            box-shadow: 0 0 6px var(--green-glow);
            user-select: none;
            margin: 0 auto;
            display: block;
            width: max-content;
        }

        /* Admin Login */
        #admin h2 {
            color: var(--green-glow);
            margin-bottom: 12px;
            text-align: center;
        }

        .login-form {
            max-width: 320px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 12px;
            background: var(--dark-kaki);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px var(--green-glow);
        }

        .login-form label {
            font-size: 0.9rem;
            margin-bottom: 4px;
            color: var(--text-color);
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="number"] {
            padding: 8px;
            border-radius: 6px;
            border: none;
            font-family: 'Share Tech Mono', monospace;
            font-size: 1rem;
            box-shadow: inset 0 0 5px #304010;
            color: var(--green-glow);
            background: var(--black);
        }

        .login-form button {
            padding: 10px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            background: var(--green-glow);
            color: var(--black);
            font-weight: bold;
            font-family: 'Share Tech Mono', monospace;
            box-shadow: 0 0 10px var(--green-glow);
            transition: background-color 0.3s ease;
            user-select: none;
        }

        .login-form button:hover {
            background: var(--light-kaki);
            color: var(--dark-kaki);
            box-shadow: 0 0 15px var(--green-glow);
        }

        .login-status {
            margin-top: 8px;
            font-size: 0.9rem;
            color: var(--green-glow);
            text-align: center;
            min-height: 20px;
        }

        /* Contact */
        /* .contact-links,
        .contact-link,
         {
            display: inline-flex;
            flex-flow: row;
            justify-content: center;
            align-items: center;
        } */
        #liens {
            width: 150px;
        }

        #liens_img {
            border-radius: 50%;
        }

        #liensNb {
            width: 200px;
        }

        #liensNb0 {
            width: 270px;
        }

        #liensNb1 {
            width: 280px;
        }

        #liensNb1 {
            width: 260px;
        }

        .container {
            border: 1px solid green;
        }

        #contact h2 {
            text-align: center;
            color: var(--green-glow);
            margin-bottom: 12px;
        }

        #contact form {
            max-width: 400px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
            background: var(--dark-kaki);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px var(--green-glow);
        }

        #contact label {
            font-size: 0.9rem;
            color: var(--text-color);
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact textarea {
            padding: 8px;
            border-radius: 6px;
            border: none;
            font-family: 'Share Tech Mono', monospace;
            font-size: 1rem;
            box-shadow: inset 0 0 5px #304010;
            color: var(--green-glow);
            background: var(--black);
            resize: vertical;
        }

        #contact textarea {
            min-height: 80px;
        }

        #contact button {
            background: var(--green-glow);
            border: none;
            padding: 10px;
            border-radius: 6px;
            color: var(--black);
            font-weight: bold;
            font-family: 'Share Tech Mono', monospace;
            cursor: pointer;
            box-shadow: 0 0 10px var(--green-glow);
            transition: background-color 0.3s ease;
            user-select: none;
        }

        #contact button:hover {
            background: var(--light-kaki);
            color: var(--dark-kaki);
            box-shadow: 0 0 15px var(--green-glow);
        }

        #social-links {
            max-width: 400px;
            margin: 20px auto 0;
            display: flex;
            justify-content: center;
            gap: 24px;
            flex-wrap: wrap;
            user-select: none;
        }

        #social-links a {
            text-decoration: none;
            color: var(--green-glow);
            box-shadow: 0 0 5px var(--green-glow);
            font-size: 1.2rem;
            font-family: 'Share Tech Mono', monospace;
            padding: 6px 8px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        #social-links a:hover {
            background: var(--green-glow);
            color: var(--black);
            box-shadow: 0 0 10px var(--green-glow);
        }

        #projet img {
            width: 100%;
        }

        /* Image management */
        #images h2 {
            color: var(--green-glow);
            margin-bottom: 12px;
            text-align: center;
        }

        #image-upload-label {
            margin: 0 auto 14px;
            display: block;
            width: max-content;
            background: var(--dark-kaki);
            border: 1px solid var(--green-glow);
            border-radius: 6px;
            padding: 8px 14px;
            color: var(--text-color);
            cursor: pointer;
            font-family: 'Share Tech Mono', monospace;
            box-shadow: 0 0 6px var(--green-glow);
            user-select: none;
        }

        #image-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 14px;
            max-width: 600px;
            margin: 0 auto;
        }

        .image-thumb {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 8px #405020aa;
        }

        .image-thumb img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            display: block;
            filter: brightness(0.9);
            transition: filter 0.3s ease;
            user-select: none;
        }

        .image-thumb:hover img {
            filter: brightness(1.1);
        }

        .image-remove-btn {
            position: absolute;
            top: 4px;
            right: 4px;
            background: var(--black);
            border: none;
            border-radius: 50%;
            color: var(--green-glow);
            width: 24px;
            height: 24px;
            cursor: pointer;
            font-weight: bold;
            font-family: monospace;
            font-size: 1rem;
            user-select: none;
            box-shadow: 0 0 5px var(--green-glow);
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .image-remove-btn:hover {
            opacity: 1;
            box-shadow: 0 0 10px var(--green-glow);
        }

        img {
            display: flex;
            justify-content: center;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 12px 20px;
            background: var(--dark-kaki);
            box-shadow: inset 0 1px 4px #405020cc;
            font-size: 0.9rem;
            color: var(--green-glow);
            user-select: none;
            letter-spacing: 1px;
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-kaki);
        }

        ::-webkit-scrollbar-thumb {
            background-color: var(--green-glow);
            border-radius: 4px;
        }

        @media only screen and (max-width: 600px) and (min-width: 400px) {

            #home img {
                margin-left: 2rem;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                width: 100%;
            }

            .nav-links li {
                margin: 10px 0;
                text-align: center;
            }

            .hamburger-menu {
                display: flex;
            }

            .nav-links.active {
                display: flex;
            }

            .hamburger-menu.active .bar:nth-child(1) {
                /* transform: rotate(45deg) translate(5px, 5px); */
                transform: translateY(0px) rotate(-135deg);
            }

            .hamburger-menu.active .bar:nth-child(2) {
                opacity: 0;
            }

            .hamburger-menu.active .bar:nth-child(3) {
                /* transform: rotate(-45deg) translate(5px, -5px); */
                transform: translateY(0px) rotate(135deg);
            }
        }
    </style>

</head>

<body id="content" class="body">
    <header>
        <!-- Navbar section ------------->
        <nav class="navbar">
            <div class="hamburger-menu" id="hamburgerMenu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <h1>wink</h1>

            <ul class="nav-links" id="navLinks">
                <li><a href="http://localhost:8000/wink.php#Accueil/wink.php">Accueil</a></li>
                <li><a href="http://localhost:8000/wink.php/wink.php#À propos/wink.php">À propos</a></li>
                <li><a href="http://localhost:8000/wink.php/#catalog/">Catalogue</a></li>
                <li><a href="http://localhost:8000/wink.php#images/wink.php">Images</a></li>
                <li><button data-page="admin" aria-label="Administration">Administration</button></li>
                <li><button data-page="contact" aria-label="Contact">Contact</button></li>
                <li><button data-page="projet" aria-label="Projet">Projet</button></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="active" aria-label="Accueil">
            <h2>Bienvenue sur wink</h2> <img src="img/levelUp.jpeg" width="80%" alt="levelUp">
        </section>

        <section id="about" aria-label="À propos">
            <h2>À propos de wink</h2>
            <p>wink est une application web underground immersive conçue avec un design camouflage animée et des
                fonctionnalités modernes : gestion de catalogue, authentification sécurisée avec support intégré.</p>
            <p>Ce prototype frontend montre l'interface et la navigation. Pour la fonctionnalité complète avec base de
                données phpMyAdmin et authentification Google Authenticator, un backend PHP/MySQL est nécessaire.</p>
        </section>

        <section id="catalog" aria-label="Catalogue">
            <h2>Catalogue d'items</h2>
            <div id="catalog-controls">
                <button id="add-item-btn" title="Ajouter un item">➕ Ajouter</button>
                <label for="import-items-file" class="file-input-label" title="Importer items JSON">📂 Importer
                    JSON</label>
                <input type="file" id="import-items-file" accept=".json" />
                <button id="export-items-btn" title="Exporter items JSON">📤 Exporter JSON</button>
                <button id="clear-items-btn" title="Tout supprimer">🗑️ Tout supprimer</button>
            </div>
            <div id="catalog-list" aria-live="polite" aria-relevant="additions removals"></div>
        </section>

        <section id="images" aria-label="Gestion des images">
            <h2>Gestion des images</h2>
            <label for="image-upload" id="image-upload-label" title="Ajouter une image">📷 Ajouter une image</label>
            <input type="file" id="image-upload" accept="image/*" multiple />
            <div id="image-list" aria-live="polite" aria-relevant="additions removals"></div>
        </section>

        <section id="admin" aria-label="Administration">
            <h2>Administration & Authentification</h2>
            <form id="login-form" class="login-form" aria-label="Formulaire de connexion">
                <label for="username-input">Nom d'utilisateur</label>
                <input type="text" id="username-input" autocomplete="username" placeholder="Entrez votre nom"
                    required />
                <label for="password-input">Mot de passe</label>
                <input type="password" id="password-input" autocomplete="current-password"
                    placeholder="Entrez votre mot de passe" required />
                <label for="otp-input">Code Authentificator (Google Authenticator)</label>
                <input type="number" id="otp-input" autocomplete="one-time-code" placeholder="000000" pattern="[0-9]*"
                    inputmode="numeric" />
                <button type="submit">Se connecter</button>
                <div class="login-status" id="login-status" role="alert" aria-live="assertive"></div>
            </form>
            <div id="admin-content" style="display:none; margin-top: 1em; color: var(--green-glow);">
                <p>Connecté en tant qu'administrateur.</p>
                <button id="logout-btn">Se déconnecter</button>
            </div>
            <p style="margin-top:16px; font-size: 0.8rem; color: #707050;">
                * Note: Ce prototype simule l'authentification. L'intégration réelle avec backend et Google
                Authenticator est requise pour la production.
            </p>
        </section>

        <section id="contact" aria-label="Contact">
            <h2>Contact & Support</h2>
            <form id="contact-form" aria-label="Formulaire de contact">
                <label for="contact-name">Nom</label>
                <input type="text" id="contact-name" required placeholder="Votre nom" />
                <label for="contact-email">E-mail</label>
                <input type="email" id="contact-email" required placeholder="Votre e-mail" />
                <label for="contact-message">Message</label>
                <textarea id="contact-message" required placeholder="Votre message"></textarea>
                <button type="submit">Envoyer</button>
                <p id="contact-status" role="alert" aria-live="polite" style="margin-top:8px;"></p>
            </form>
            <div id="social-links" aria-label="Réseaux sociaux">
                <a href="https://www.facebook.com/maverick.bash" target="_blank" rel="noopener noreferrer"
                    aria-label="Facebook">📘
                    Facebook</a>

                <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" aria-label="Twitter">🐦
                    Twitter</a>

                <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">📸
                    Instagram</a>

                <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">🔗
                    LinkedIn</a>

                <a href="https://github.com/" target="_blank" rel="noopener noreferrer" aria-label="GitHub">🐙
                    GitHub</a>

                <a id="liens" href="http://www.youtube.com/@TeK2OuF" target="_blank" rel="noopener noreferrer"
                    aria-label="YouTube" width="10%"><img src="img/8066-youtubemusic.png" width="30px">YouTube</a>

                <a id="liens" href="https://bandcamp.com/tek2ouf" target="_blank" rel="noopener noreferrer"
                    aria-label="Bandcamp" width="10%"><img src="img/8066-youtubemusic.png" width="30px">Bandcamp</a>

                <a id="liens" href="https://www.mixcloud.com/yo_t2osound6tm/" target="_blank" rel="noopener noreferrer"
                    aria-label="Mixcloud" width="10%"><img id="liens_img" src="img/icon_mixcloud.png"
                        width="30px">Mixcloud</a>

                <a id="liensNb" href="https://soundcloud.com/yoan-de-menezes/sets/tek2ouf" target="_blank"
                    rel="noopener noreferrer" aria-label="Soundcloud" width="10%"><img src="img/icon_soundcloud.jpg"
                        width="30px">Soundcloud0</a>

                <a id="liensNb" href="https://soundcloud.com/tek2ouf" target="_blank" rel="noopener noreferrer"
                    aria-label="Soundcloud" width="10%"><img src="img/icon_soundcloud.jpg" width="30px">Soundcloud1</a>

                <a id="liensNb" href="https://soundcloud.com/mav-yo" target="_blank" rel="noopener noreferrer"
                    aria-label="Soundcloud" width="10%"><img src="img/icon_soundcloud.jpg" width="30px">
                    Soundcloud2</a>

                <a id="liensNb0" href="https://artistsinaction.bandcamp.com/music" target="_blank"
                    rel="noopener noreferrer" aria-label="Artists In Action" width="10%"><img id="liens_img"
                        src="img/aia.jpg" width="40px">
                    Artists In Action</a>

                <a id="liensNb2" href="http://www.technoplus.org/t,1/1071/qui-sommes-nous-?" target="_blank"
                    rel="noopener noreferrer" aria-label="TECHNO PLUS" width="10%"><img src="img/headert+.png" width="50px">
                    TECHNO PLUS</a>

                <a id="liensNb" href="http://freeform.fr/qui-sommes-nous/" target="_blank" rel="noopener noreferrer"
                    aria-label="Freeform.fr" width="10%"><img src="img/freefrom-logo@2x.png" width="50px">
                    Freeform.fr</a>

                <a id="liensNb2" href="http://www.keep-smiling.com/?p=238" target="_blank" rel="noopener noreferrer"
                    aria-label="KEEP SMILING" width="10%"><img src="img/Presentation-ks-logo.jpg.crdownload" width="50px">
                    KEEP SMILING</a>

                <a id="liensNb0" href="http://sound-system-unity.forumactif.org" target="_blank"
                    rel="noopener noreferrer" aria-label="Sound System Unity" width="10%"><img src="img/sts10.jpg"
                        width="50px">
                    Sound System Unity</a>

                <div class="contact-link">
                    <h2>Mail : 000tek2ouf000@gmail.com</h2>
                    <div class="beforeFooter">
                        <img class="imgLogo" src="img/logoTeK2OuF02.jpg" alt="logo TeK2OuF 02">
        </section>

        </section>
        <section id="projet" aria-label="Projet">
            <h2>Projet</h2>
            <img src="img/chatGPT_Image2_catalogue.png" alt="Projet catalogue @onlineformapro">
        </section>
    </main>

    <footer>
        &copy; 2025 Projet catalogue - wink - @onlineformapro
    </footer>

    <script>
        // Navigation
        // const navButtons = document.querySelectorAll('nav button');
        // const sections = document.querySelectorAll('main section');

        // navButtons.forEach(btn => {
        //     btn.addEventListener('click', () => {
        //         navButtons.forEach(b => b.classList.remove('active'));
        //         btn.classList.add('active');
        //         const page = btn.dataset.page;
        //         sections.forEach(s => s.classList.toggle('active', s.id === page));
        //     });
        // });

        // * script mobile menu
        document.getElementById('hamburgerMenu').addEventListener('click', function() {
            this.classList.toggle('active');
            document.getElementById('navLinks').classList.toggle('active');
        });

        // Catalog functionality
        const catalogListEl = document.getElementById('catalog-list');
        const addItemBtn = document.getElementById('add-item-btn');
        const importItemsFile = document.getElementById('import-items-file');
        const exportItemsBtn = document.getElementById('export-items-btn');
        const clearItemsBtn = document.getElementById('clear-items-btn');

        function loadCatalog() {
            let catalogData;
            try {
                catalogData = JSON.parse(localStorage.getItem('wink_catalog')) || [];
            } catch (e) {
                catalogData = [];
            }
            return catalogData;
        }

        function saveCatalog(data) {
            localStorage.setItem('wink_catalog', JSON.stringify(data));
        }

        function createCatalogItemElement(item, index) {
            const container = document.createElement('div');
            container.className = 'catalog-item';

            const img = document.createElement('img');
            img.src = item.image || 'https://via.placeholder.com/240x150?text=No+Image';
            img.alt = item.title || 'Item Image';
            container.appendChild(img);

            const titleInput = document.createElement('input');
            titleInput.type = 'text';
            titleInput.value = item.title || '';
            titleInput.placeholder = "Titre";
            container.appendChild(titleInput);

            const descInput = document.createElement('textarea');
            descInput.value = item.description || '';
            descInput.placeholder = "Description";
            container.appendChild(descInput);

            const saveBtn = document.createElement('button');
            saveBtn.textContent = '💾 Sauvegarder';
            saveBtn.title = 'Sauvegarder cet item';
            saveBtn.onclick = () => {
                const catalog = loadCatalog();
                catalog[index] = {
                    title: titleInput.value.trim(),
                    description: descInput.value.trim(),
                    image: img.src
                };
                saveCatalog(catalog);
                alert('Item sauvegardé.');
            };
            container.appendChild(saveBtn);

            const delBtn = document.createElement('button');
            delBtn.textContent = '❌ Supprimer';
            delBtn.title = 'Supprimer cet item';
            delBtn.style.marginTop = '6px';
            delBtn.onclick = () => {
                if (confirm('Supprimer cet item ?')) {
                    let catalog = loadCatalog();
                    catalog.splice(index, 1);
                    saveCatalog(catalog);
                    renderCatalog();
                }
            };
            container.appendChild(delBtn);

            // Clicking on image lets user change it via image prompt dialog (simulate upload)
            img.style.cursor = 'pointer';
            img.title = "Cliquer pour changer l'image (base64)";
            img.onclick = () => {
                const url = prompt('Collez l\'URL ou base64 de l\'image à utiliser:');
                if (url) {
                    img.src = url;
                }
            };

            return container;
        }

        function renderCatalog() {
            catalogListEl.innerHTML = '';
            const catalog = loadCatalog();
            if (catalog.length === 0) {
                catalogListEl.textContent = 'Aucun item dans le catalogue. Ajoutez-en !';
                return;
            }
            catalog.forEach((item, index) => {
                const el = createCatalogItemElement(item, index);
                catalogListEl.appendChild(el);
            });
        }

        addItemBtn.addEventListener('click', () => {
            const catalog = loadCatalog();
            catalog.push({
                title: '',
                description: '',
                image: ''
            });
            saveCatalog(catalog);
            renderCatalog();
        });

        importItemsFile.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function(evt) {
                try {
                    const json = JSON.parse(evt.target.result);
                    if (Array.isArray(json)) {
                        saveCatalog(json);
                        renderCatalog();
                        alert('Catalogue importé avec succès.');
                    } else {
                        alert('Fichier JSON invalide.');
                    }
                } catch (e) {
                    alert('Erreur de lecture du fichier JSON.');
                }
            };
            reader.readAsText(file);
            importItemsFile.value = '';
        });

        exportItemsBtn.addEventListener('click', () => {
            const dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(loadCatalog(), null, 2));
            const dlAnchor = document.createElement('a');
            dlAnchor.setAttribute('href', dataStr);
            dlAnchor.setAttribute('download', 'wink_catalog.json');
            dlAnchor.click();
        });

        clearItemsBtn.addEventListener('click', () => {
            if (confirm('Supprimer tous les items du catalogue ?')) {
                saveCatalog([]);
                renderCatalog();
            }
        });

        renderCatalog();

        // Image management
        const imageListEl = document.getElementById('image-list');
        const imageUploadInput = document.getElementById('image-upload');

        function loadImages() {
            try {
                return JSON.parse(localStorage.getItem('wink_images')) || [];
            } catch (e) {
                return [];
            }
        }

        function saveImages(images) {
            localStorage.setItem('wink_images', JSON.stringify(images));
        }

        function createImageElement(src, index) {
            const div = document.createElement('div');
            div.className = 'image-thumb';

            const img = document.createElement('img');
            img.src = src;
            div.appendChild(img);

            const btn = document.createElement('button');
            btn.className = 'image-remove-btn';
            btn.title = 'Supprimer image';
            btn.textContent = '×';
            btn.onclick = () => {
                if (confirm('Supprimer cette image ?')) {
                    let images = loadImages();
                    images.splice(index, 1);
                    saveImages(images);
                    renderImages();
                }
            };
            div.appendChild(btn);

            return div;
        }

        function renderImages() {
            imageListEl.innerHTML = '';
            const images = loadImages();
            if (images.length === 0) {
                imageListEl.textContent = 'Aucune image ajoutée.';
                return;
            }
            images.forEach((src, idx) => {
                imageListEl.appendChild(createImageElement(src, idx));
            });
        }

        imageUploadInput.addEventListener('change', (e) => {
            const files = Array.from(e.target.files);
            if (files.length === 0) return;
            const images = loadImages();

            let filesLoaded = 0;
            files.forEach(file => {
                const reader = new FileReader();
                reader.onload = function(evt) {
                    images.push(evt.target.result);
                    filesLoaded++;
                    if (filesLoaded === files.length) {
                        saveImages(images);
                        renderImages();
                    }
                };
                reader.readAsDataURL(file);
            });

            imageUploadInput.value = '';
        });

        renderImages();

        // Admin login simulation with Google Authenticator input (stub)

        const loginForm = document.getElementById('login-form');
        const loginStatus = document.getElementById('login-status');
        const adminContent = document.getElementById('admin-content');
        const logoutBtn = document.getElementById('logout-btn');

        // Simulated credentials for demo
        const DEMO_USER = 'admin';
        const DEMO_PASS = 'password123';
        // Simulated OTP (in real case, would check TOTP via backend)
        const DEMO_OTP = '123456';

        function setLoggedIn(state) {
            if (state) {
                loginForm.style.display = 'none';
                adminContent.style.display = 'block';
            } else {
                loginForm.style.display = 'flex';
                adminContent.style.display = 'none';
                loginForm.reset();
            }
        }

        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            loginStatus.textContent = '';
            const username = loginForm['username-input'].value.trim();
            const password = loginForm['password-input'].value;
            const otp = loginForm['otp-input'].value.trim();

            // This is a demo validation only
            if (username === DEMO_USER && password === DEMO_PASS) {
                if (otp === '' || otp === DEMO_OTP) {
                    loginStatus.style.color = 'var(--green-glow)';
                    loginStatus.textContent = 'Connexion réussie!';
                    setTimeout(() => {
                        setLoggedIn(true);
                    }, 600);
                } else {
                    loginStatus.style.color = '#ff4444';
                    loginStatus.textContent = 'Code Authentificator incorrect.';
                }
            } else {
                loginStatus.style.color = '#ff4444';
                loginStatus.textContent = 'Nom d\'utilisateur ou mot de passe incorrect.';
            }
        });

        logoutBtn.addEventListener('click', () => {
            setLoggedIn(false);
            loginStatus.textContent = 'Vous êtes déconnecté.';
            loginStatus.style.color = (--green - glow);
        });

        // Initialize login state from localStorage demo
        setLoggedIn(false);

        // Contact form handling simulation
        const contactForm = document.getElementById('contact-form');
        const contactStatus = document.getElementById('contact-status');

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            contactStatus.textContent = '';
            const name = contactForm['contact-name'].value.trim();
            const email = contactForm['contact-email'].value.trim();
            const message = contactForm['contact-message'].value.trim();

            if (!name || !email || !message) {
                contactStatus.style.color = '#ff4444';
                contactStatus.textContent = 'Veuillez remplir tous les champs.';
                return;
            }

            // Here you could do actual API call to server for sending message.
            // For demo, just simulate with timeout
            contactStatus.style.color = --green - glow;
            contactStatus.textContent = 'Envoi en cours...';

            setTimeout(() => {
                contactStatus.textContent = 'Merci pour votre message ! Nous vous répondrons bientôt.';
                contactForm.reset();
            }, 1400);
        });
    </script>
</body>

</html>