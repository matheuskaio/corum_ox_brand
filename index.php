<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/image/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <title>CORUM - Biotecnologia</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap');
        /* RESET */
        
        * {
            margin: 0;
            padding: 0;
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
            font-size: 1rem;
        }
        
        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 50px;
            background-color: #4E0F10;
        }
        
        .container img {
            max-height: 288px;
            max-width: 868px;
            /* padding: 200px; */
        }
        
        .container h1 {
            font-size: 50px;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            color: #FFFFFF;
        }
        
        .container h4 {
            max-width: 80%;
            font-size: 38px;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-weight: 100;
            color: #FFFFFF;
        }
        
        .redes_sociais {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 15px
        }
        
        .redes_sociais a i {
            text-decoration: none;
            color: #FFFFFF;
            font-size: 30px;
            transition: 0.3s;
        }
        
        .redes_sociais a i:hover {
            cursor: pointer;
            color: #e34a15;
        }
        
        @media (max-width: 900px) {
            .container img {
                height: 190px;
            }
            .container h1 {
                font-size: 35px;
            }
            .container h4 {
                font-size: 30px;
            }
        }
        
        @media (max-width: 650px) {
            .container img {
                height: 125px;
            }
            .container h1 {
                font-size: 28px;
                line-height: 42px;
            }
            .container h4 {
                font-size: 22px;
                line-height: 33px;
                text-align: center;
            }
            .redes_sociais a i {
                font-size: 25px;
            }
        }
        
        @media (max-width:550px) {}
    </style>
</head>

<body>
    <div class="container">
        <img src="./assets/image/logo.png" alt="">
        <h1>NOSSA PLATAFORMA ESTÁ EM DESENVOLVIMENTO</h1>
        <h4>ENQUANTO ISSO, NOS ACOMPANHE NAS REDES SOCIAIS!</h4>
        <div class="redes_sociais">
            <a href="https://www.facebook.com/CORUM-Biotecnologia-102028615585937"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/corum.biotecnologia/"><i class="fab fa-instagram "></i></a>
            <a href="https://www.linkedin.com/company/corum-biotecnologia/"><i class="fab fa-linkedin"></i></a>

        </div>
    </div>
</body>

</html>