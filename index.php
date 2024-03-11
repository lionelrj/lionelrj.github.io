<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI AMOR NO T ENOJESH</title>
    <style>
        body {
            text-align: center;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: flex-start;
            margin: 0;
            background-color: #f7f7f7;
            background-size: cover;
            align-items: center;
        }

        #encuesta {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        #si {
            background-color: #f44336;
            color: white;
            position: relative;
        }

        #si:hover {
            right: 300px; /* Mueve el botón a la izquierda */
            left: 300px; /* Mueve el botón 50px a la derecha */
            top: 300px;  /* Mueve el botón 20px hacia abajo */
        }

        #ups {
            font-size: 18px;
            color: #FF4081; /* Un tono rosado amigable */
        }

        #no {
            background-color: #4CAF50;
            color: white;
        }

        button {
            font-size: 18px;
            margin: 10px;
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        #no:hover {
            background-color: #555;
        }

        .heart-rain {
            position: absolute;
            width: 80px;
            height: 80px;
            pointer-events: none;
            background-image: url('angry.png');
            background-size: cover;
            animation: fall 7s linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translateY(50) rotate(4deg);
            }
            100% {
                transform: translateY(50vh) rotate(450deg);
            }
        }
    </style>
</head>
<body>
    <div id="encuesta">
        <p>Me perdonas?</p>
        <button id="si">No</button>
        <button id="no" onclick="redireccionar()">Obvio mi amor</button>
    </div>

    <script>
        function redireccionar() {
            // Cambia la URL a la que deseas redirigir
            window.location.href = 'myonlilov.php';
        }
        const siButton = document.getElementById('si');

        siButton.addEventListener('mouseover', () => {
            const newX = Math.random() * 300 - 300; // Posición aleatoria entre -50px y 50px en X
            const newY = Math.random() * 300 - 300;  // Posición aleatoria entre -20px y 20px en Y
            siButton.style.left = `${newX}px`;
            siButton.style.top = `${newY}px`;
        });
    </script>
</body>
</html>
