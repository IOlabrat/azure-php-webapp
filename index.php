<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Blocked</title>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Comic Sans MS', sans-serif;
            text-align: center;
            padding: 50px;
            color: #333;
        }

        h1 {
            font-size: 4em;
            color: #e74c3c;
            text-shadow: 2px 2px #2c3e50;
        }

        .alert {
            font-size: 2em;
            color: #d35400;
            margin-bottom: 30px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }

        .blockers {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .blocker {
            position: relative;
            width: 150px;
            height: 150px;
            background-color: #ffcc00;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        .blocker img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .traffic-barrier {
            width: 100%;
            height: 40px;
            background: repeating-linear-gradient(
                45deg,
                #e74c3c,
                #e74c3c 10px,
                #f39c12 10px,
                #f39c12 20px
            );
            position: absolute;
            bottom: 0;
        }

        .road {
            width: 100%;
            height: 200px;
            background: #34495e;
            position: relative;
        }

        .road::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 10px;
            background: repeating-linear-gradient(
                90deg,
                #fff,
                #fff 10px,
                #34495e 10px,
                #34495e 20px
            );
        }
    </style>
</head>
<body>

    <h1>Access Blocked!</h1>
    <div class="alert">🚧 You are not allowed to access this website! 🚧</div>

    <div class="blockers">
        <div class="blocker">
            <img src="https://placekitten.com/150/150" alt="Cartoon Cat Blocking">
            <div class="traffic-barrier"></div>
        </div>
        <div class="blocker">
            <img src="https://placebear.com/150/150" alt="Cartoon Bear Blocking">
            <div class="traffic-barrier"></div>
        </div>
        <div class="blocker">
            <img src="https://placekitten.com/151/151" alt="Cartoon Kitten Blocking">
            <div class="traffic-barrier"></div>
        </div>
        <div class="blocker">
            <img src="https://placebear.com/151/151" alt="Cartoon Bear Blocking">
            <div class="traffic-barrier"></div>
        </div>
    </div>

    <div class="road"></div>

    <script>
        window.onload = function() {
            alert("Access to this site has been blocked!");
        };
    </script>

</body>
</html>
