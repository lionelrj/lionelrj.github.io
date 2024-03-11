<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YO SABÍA K NO ESTABAS</title>
    <style>
        body {
            text-align: center;
            padding: 20px; /* Ajustado para dispositivos móviles */
            font-family: 'Comic Sans MS', cursive, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: url('Small-Hearts-Falling-Animated-Attern-Gif.gif') center center fixed;
            background-size: cover;
        }

        h1 {
            font-size: 24px; /* Ajustado para dispositivos móviles */
            margin-bottom: 80px; /* Ajustado para dispositivos móviles */
            font-weight: bold;
            color: #FF4081;
            text-shadow: 1px 1px 2px rgba(119, 119, 119, 0.5);
        }

        iframe {
            width: 100%;
            height: 200px; /* Ajusta según tus necesidades */
            margin-top: 20px;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4CAF50; /* Color verde para el botón */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Transición suave de color de fondo */
            margin-top: 20px; /* Añadido margen superior */
        }

        a.button:hover {
            background-color: #45a049; /* Cambia de color al pasar el ratón sobre el botón */
        }

        .heart-rain {
            position: absolute;
            width: 20px;
            height: 20px;
            pointer-events: none;
            background-image: url('hearg.png');
            background-size: cover;
            animation: fall 2s linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translateY(0) rotate(45deg);
            }
            100% {
                transform: translateY(100vh) rotate(45deg);
            }
        }

        @media (min-width: 768px) {
            /* Estilos para pantallas más grandes (tabletas y computadoras) */
            body {
                padding: 50px;
            }

            h1 {
                font-size: 36px;
                margin-bottom: 140px;
            }

            iframe {
                height: 315px;
            }
        }
    </style>
</head>
<body>
    <h1>TE AMO MI AMOR HERMOSA</h1>
   

    <!-- Botón "Regalito" que abre el enlace al video de YouTube -->
    <a class="button" href="https://www.youtube.com/watch?v=1zQXPyo6WDw" target="_blank">AMOR</a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const heartContainer = document.body;
            const numberOfHearts = 30; // Reducido para dispositivos móviles

            for (let i = 0; i < numberOfHearts; i++) {
                createHeart();
            }

            function createHeart() {
                const heart = document.createElement('div');
                heart.className = 'heart-rain';
                heart.style.left = Math.random() * window.innerWidth + 'px';
                heart.style.animationDuration = Math.random() * 2 + 1 + 's';

                heartContainer.appendChild(heart);

                heart.addEventListener('animationiteration', () => {
                    heart.style.left = Math.random() * window.innerWidth + 'px';
                    heart.style.animationDuration = Math.random() * 2 + 1 + 's';
                });
            }
        });
    </script>
</body>
</html>
