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

<body>
    <div class="grandeGrid">
        <div class="perfilzao">
            <div class="perfil">
                <img src="img/image (1).jfif">
            </div>
            <div class="conteudoPerfil">
                <p>Lurder da Silva</p>
                <span>lurdezinha@gmail.com</span>
                <div class="a">
                    <a href="#" onclick="returnHome()">Plano Premium</a>
                    <i class='bx bx-edit'></i>
                </div>
            </div>
        </div>
        <div class="centro">
            <div class="supervisionado">
                <h2 id="nomeSupervisionado">Josenilton da Silva</h2>
                <p>Vigiado</p>
            </div>
            <table id="dados">
                <tr>
                    <th COLSPAN="2">Histórico de localização</th>
                </tr>
                <tr>
                    <td>
                        23:45
                    </td>
                    <td>
                        Está no Club Amnesia - Rua Alfredo Zamlutti
                    </td>
                </tr>
                <tr>
                    <td>
                        20:30
                    </td>
                    <td>
                        Parou no Barzinho de seu João - Rua Gaspar Aranha
                    </td>
                </tr>
                <tr>
                    <td>
                        16:20
                    </td>
                    <td>
                        Parou na padaria Puro Pão - Rua Tamandaré
                    </td>
                </tr>
            </table>
        </div>
        <div class="canto">
            <div class="titleSuper">
                Outros vigiados
            </div>
            <div class="grid" id="gridPessoas">
                <div class="others">
                    <img src="img/1.jfif">
                    <a href="#" onclick="tbFilho('Antônio da Silva')">Antônio da Silva</a>
                </div>
                <div class="others">
                    <img src="img/2.jfif">
                    <a href="#" onclick="tbFilho('Anastácia da Silva')">Anastácia da Silva</a>
                </div>
                <div class="others">
                    <img src="img/3.jfif">
                    <a href="#" onclick="tbFilho('Josenilton Junior')">Josenilton Junior</a>
                </div>
            </div>
        </div>
    </div>

    <script src="index.js"></script>
</body>

</html>