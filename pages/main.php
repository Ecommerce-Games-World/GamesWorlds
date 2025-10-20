<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesWorlds</title>
    <link rel="shortcut icon" href="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/desktop.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <style>
        :root {

            /* Cores */
            --red: #D31621;
            --white: #FAF3E9; 
            --gray: #D9D9D9;
            --black: #190709;
            --beige: #E7B59D;

            /* Fontes */
            /* 
            --inter: ;
            --interBold: ;
            --interBlack:;
            */
        }

        nav div {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 250px;
            height: 200px;
            margin: 10px 20px 40px 20px;

            color: white;
            background: black url(../Assets/images/Dead_BY_Daylight_IMAGE_jpg.jpg) no-repeat center center / cover;
            opacity: 65%;
            border: 1px solid white;
            border-radius: 20px;
        }

        nav div:hover { 
            transform: scale(1.1);
            opacity: 100%;
            border: none;
        }

        div p {
            opacity: 100%;
        }

        .category h2,
        .recommend h2,
        .previouslySeen h2 {
            display: block;

            width: 350px;
            margin-bottom: 40px;
            padding: 15px;

            border-bottom: 1px solid var(--red);
        }

        .category nav,
        .recommend nav,
        .previouslySeen nav{
            display: flex;
            flex-flow: nowrap row;

            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <a href="main.php"><img src="../Assets/images/Hollow Knight Hornet & Needle--pointer--SweezyCursors.png" alt="Hornet" class="storeBrand"></a>
            <div class="inputWrapper">
                <i class="fi fi-rr-search"></i>
                <input type="text" name="searchBar" id="searchBar">
            </div>
            <i class="fi fi-rr-shopping-cart"></i>
            <a href="login.php"><button class="loginRegister"><i class="fi fi-rr-user"></i>Login/Cadastro</button></a>
        </div>
    </header>
    <div class="curved">
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(25, 7, 9, 1)" offset="0%"></stop><stop stop-color="rgba(25, 7, 9, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,196L120,228.7C240,261,480,327,720,334.8C960,343,1200,294,1440,261.3C1680,229,1920,212,2160,228.7C2400,245,2640,294,2880,294C3120,294,3360,245,3600,187.8C3840,131,4080,65,4320,49C4560,33,4800,65,5040,73.5C5280,82,5520,65,5760,49C6000,33,6240,16,6480,81.7C6720,147,6960,294,7200,343C7440,392,7680,343,7920,326.7C8160,310,8400,327,8640,318.5C8880,310,9120,278,9360,277.7C9600,278,9840,310,10080,334.8C10320,359,10560,376,10800,334.8C11040,294,11280,196,11520,204.2C11760,212,12000,327,12240,375.7C12480,425,12720,408,12960,392C13200,376,13440,359,13680,359.3C13920,359,14160,376,14400,367.5C14640,359,14880,327,15120,326.7C15360,327,15600,359,15840,343C16080,327,16320,261,16560,204.2C16800,147,17040,98,17160,73.5L17280,49L17280,490L17160,490C17040,490,16800,490,16560,490C16320,490,16080,490,15840,490C15600,490,15360,490,15120,490C14880,490,14640,490,14400,490C14160,490,13920,490,13680,490C13440,490,13200,490,12960,490C12720,490,12480,490,12240,490C12000,490,11760,490,11520,490C11280,490,11040,490,10800,490C10560,490,10320,490,10080,490C9840,490,9600,490,9360,490C9120,490,8880,490,8640,490C8400,490,8160,490,7920,490C7680,490,7440,490,7200,490C6960,490,6720,490,6480,490C6240,490,6000,490,5760,490C5520,490,5280,490,5040,490C4800,490,4560,490,4320,490C4080,490,3840,490,3600,490C3360,490,3120,490,2880,490C2640,490,2400,490,2160,490C1920,490,1680,490,1440,490C1200,490,960,490,720,490C480,490,240,490,120,490L0,490Z"></path></svg>
    </div>
    <main>
        <section class="category">
            <h2>Categorias</h2>
            <nav>
                <div>
                    <p>Terror</p>
                </div>
                <div>
                    <p>Terror</p>
                </div>
                <div>
                    <p>Terror</p>
                </div>
                <div>
                    <p>Terror</p>
                </div>
                <div>
                    <p>Terror</p>
                </div>
            </nav>
        </section>
        <section class="recommend">
            <h2>Recomendados</h2>
            <nav>
                <div>
                    <p>Dead by Daylight</p>
                </div>
                <div>
                    <p>Dead by Daylight</p>
                </div>
                <div>
                    <p>Dead by Daylight</p>
                </div>
                <div>
                    <p>Dead by Daylight</p>
                </div>
                <div>
                    <p>Dead by Daylight</p>
                </div>
            </nav>
        </section>
        <section class="previouslySeen">
            <h2>Visto Anteriormente</h2>
            <nav>
                <div>
                    <p>Dead by Daylight</p>
                </div>
                <div>
                    <p>Dead by Daylight</p>
                </div>
                <div>
                    <p>Dead by Daylight</p>
                </div>
                <div>
                    <p>Dead by Daylight</p>
                </div>
                <div>
                    <p>Dead by Daylight</p>
                </div>
            </nav>          
        </section>
    </main>
</body>
</html>