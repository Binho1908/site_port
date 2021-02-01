<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-AU-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso php</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Projetos</h1>
        <h2>Estudos 2021</h2>
    </header>
    
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo laranja">
                    <h3>Site de Hotel</h3>
                    <ul>
                        <li>
                            <center>
                            <p>Hotel Paraiso</p>
                            <a href="hotel_paraiso/index.php">
                            <img src="imagens/site_flex.png" alt="Site FlexBox"></a>
                            <p>Site feito com html, css, JavaScript, PHP</p>
                            </center>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Estações</h3>
                    <ul>
                        <li>
                            <center>
                            <p>Fotos Estações</p>
                            <a href="projectDayOne/index.html">
                            <img src="imagens/sum.png" alt="Sites Js"></a>
                            <p>Site feito com html, css, JavaScript</p>
                            </center>
                        </li>

                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Etapa Dinâmica</h3>
                    <ul>
                        <li>
                            <center>
                            <p>ETAPAS DE PROGRESSO</p>
                            <a href="projectDayTwo/index.html">
                            <img src="imagens/steps.png" alt="Sites Js"></a>
                            <p>Site feito com html, css, JavaScript</p>
                            </center>
                        </li>

                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Etapa Dinâmica</h3>
                    <ul>
                        <li>
                            <center>
                            <p>ETAPAS DE PROGRESSO</p>
                            <a href="ProjectDayThree/index.html">
                            <img src="imagens/steps.png" alt="Sites Js"></a>
                            <p>Site feito com html, css, JavaScript</p>
                            </center>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </main>
    
    <footer class="rodape">
    FABIO © <?= date('Y');?> 
    </footer>
</body>
</html>