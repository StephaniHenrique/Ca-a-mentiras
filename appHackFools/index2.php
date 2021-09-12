<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body style="background-color: #fff">
    <div class="lateral">
        <table>
            <tr>
                <th style="background-color: #f2f2f2">CAÇA MENTIRAS</th>
            </tr>
            <tr>
                <td><button class="btn btn-blue">Ajuda</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-blue">Comentários</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-blue">Informações</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-blue">Planos</button></td>
            </tr>
        </table>
        <table>
            <tr>
                <td><button class="btn btn-red">Cadastro</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-blue2" onclick="perfil()">Login</button></td>
            </tr>
        </table>

    </div>
    <div class="main2">
        <div class="logo">
            <div>
                <p>CAÇA</p>
                <div class="subtitle">
                    <div class="space">
                        <span>MENTIRAS</span>
                    </div>
                </div>
            </div>
            <div class="imgLogo">
                <img src="img/brava.png">
            </div>

        </div>

        <div class="conteudo1">

            <table cellspacing="20">
                <tr>
                    <th> Benefícios</th>
                    <th>Novidades</th>
                </tr>
                <tr>
                    <td>
                        <div class="tb">
                            <img src="img/parceria.png">
                            <div class="p">
                                Com a ajuda do CAÇA MENTIRAS você não sera mais enganado!</div>
                        </div>
                    </td>
                    <td>
                        <div class="tb">
                            <img src="img/new.png">
                            <div class="p">Agora persiga toda a familia no plano PREMIUM</div>

                        </div>
                    </td>
                </tr>

            </table>

        </div>

        <div class="conteudo2">
            <div class="title">PLANOS</div>
            <table>
                <tr>
                    <th>Básico</th>
                    <th>Premium</th>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Vigie uma pessoa</li>
                            <li>Selecione 5 locais proibidos</li>
                            <li>Saiba se esta pessoa esta perto de locais proibidos</li>
                            <li>Receba uma notificação na sua conta quando a pessoa se aproximar de um lugar proibido</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Vigie 3 pessoas</li>
                            <li>Selecione 15 locais proibidos</li>
                            <li>Saiba se esta pessoa esta perto de locais proibidos</li>
                            <li>Receba uma notificação na sua conta quando a pessoa se aproximar de um lugar proibido</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>

        <div class="conteudo3">
            <div class="imagem">
                <img src="img/explosao.png">
            </div>
            <div class="planoPum">
                <div class="title"><a href="https://www.fontspace.com/category/marvel"><img src="https://see.fontimg.com/api/renderfont4/pXBv/eyJyIjoiZnMiLCJoIjo4MSwidyI6MTAwMCwiZnMiOjgxLCJmZ2MiOiIjRTgwODA4IiwiYmdjIjoiI0YxMTMxMyIsInQiOjF9/RXhwbG9kYSBBbWFkbw/golden-sentry.png" alt="Marvel fonts"></a></div>
                <div class="desc">
                    Já chegou no seu limite? Chegou a hora de explodir! <br>
                    Quando a pessoa vigiada se aproximar de um local proibido, exploda ela! <br>
                    *Isentos de punições judiciarias
                </div>
            </div>
        </div>

        <div class="conteudo4">
            <div class="title">AVALIAÇÕES</div>
            <table style="margin-top: -20px;">
                <tr>
                    <td><img style="width: 300px; height: 210px" src="img/balao1.png">
                        <div class="comentario">
                            Por meio do caça-mentiras, descobri que meu filho não estava indo para a escola! Dei umas belas palmadas nele. Obrigada caça-mentiras!
                        </div>
                        <div class="imgPerfil">
                            <img src="img/coment1.jpg" style="width: 60px; height: 60px;" alt="">
                        </div>
                    </td>
                    <td><img style="width: 300px; height: 210px" src="img/balao1.png">
                        <div class="comentario">
                            Explodi meu marido ao descobrir uma traição! O melhor de tudo é que o plano explode amado me isentou do crime :)
                        </div>
                        <div class="imgPerfil">
                            <img src="img/coment2.jpg" style="width: 60px; height: 60px;" alt="">
                        </div>
                    </td>
                    <td><img style="width: 300px; height: 210px" src="img/balao1.png">
                        <div class="comentario">
                            Descobri que minha mulher passava no bar depois do trabalho e me dizia fazer hora-extra. Agora ela pelo menos me traz uma cerveja!
                        </div>
                        <div class="imgPerfil">
                            <img src="img/coment3.jpg" style="width: 60px; height: 60px;" alt="">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <script src="index.js"></script>
</body>

</html>