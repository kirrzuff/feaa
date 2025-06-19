!DOCTYPE html>
<html>
<head>
    <title>I Love You Feaa</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #fff0f5;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            text-align: center;
        }

        h1 {
            margin-top: 150px;
            color: #e60073;
            font-size: 60px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .heart {
            position: absolute;
            color: red;
            animation: fall 5s linear infinite;
        }

        @keyframes fall {
            0% {
                top: -10%;
                opacity: 1;
            }
            100% {
                top: 110%;
                opacity: 0;
            }
        }
    </style>
</head>
<body>

    <h1><?php echo "I ❤️ You, Feaa"; ?></h1>

    <!-- Muzik romantik autoplay -->
    <audio autoplay loop>
        <source src="https://www.bensound.com/bensound-music/bensound-love.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Love jatuh -->
    <script>
        const hearts = ["💖", "❤️", "💕", "💘", "💗"];
        const numHearts = 30;

        for (let i = 0; i < numHearts; i++) {
            let heart = document.createElement("div");
            heart.className = "heart";
            heart.style.left = Math.random() * 100 + "vw";
            heart.style.fontSize = (Math.random() * 30 + 20) + "px";
            heart.style.animationDuration = (Math.random() * 3 + 3) + "s";
            heart.innerText = hearts[Math.floor(Math.random() * hearts.length)];
            document.body.appendChild(heart);
        }
    </script>

</body>
</html>
