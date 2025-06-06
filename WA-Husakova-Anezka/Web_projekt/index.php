<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slovanská Mythologie - Index</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #ffffff;
            color: #1a1a1a; 
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #000f33; 
            color: #fef3c7;
            font-size: 20px;
            border-bottom: 3px solid #facc15; 
            padding: 1rem;
            text-align: center;
        }

        .navbar h1 {
            margin: 0;
            color: #fef3c7;
        }

        .page-wrapper {
            width: 80%;
            margin: 0 auto;
            background-color: rgb(255, 255, 255);
            padding: 20px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
            margin-top: 20px;
        }

        .auth-section {
            text-align: center;
            margin: 20px 0;
        }

        .auth-btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #facc15;
            color:rgb(0, 35, 118);
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .auth-btn:hover {
            background-color: #fde68a;
            transform: translateY(-2px);
        }

        .main-link {
            background-color: #000f33;
            color: #fef3c7;
            font-size: 1.2em;
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .main-link:hover {
            background-color: #1e3a8a;
            color: #fff;
        }

        @media (max-width: 768px) {
            .page-wrapper {
                width: 95%;
            }
            
            .auth-btn {
                display: block;
                margin: 10px auto;
                width: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Slovanská Mythologie</h1>
    </div>

    <div class="page-wrapper">
        <div class="auth-section">
            <a href="http://localhost/Web_Slovanska_Mythologie/WA-Husakova-Anezka/Web_projekt/views/auth/login.php" class="auth-btn">Přihlášení</a>
            <a href="http://localhost/Web_Slovanska_Mythologie/WA-Husakova-Anezka/Web_projekt/views/auth/register.php" class="auth-btn">Registrace</a>
        </div>

        <div class="grid-container">
            <div class="card main-link">
                <a href="http://localhost/Web_Slovanska_Mythologie/WA-Husakova-Anezka/Web_projekt/views/informazione/base.php" style="color: inherit; text-decoration: none;">
                    <h2>Hlavní stránka</h2>
                    <p>Klikněte zde pro vstup na hlavní stránku webu</p>
                </a>
        </div>
    </div>
</body>
</html>