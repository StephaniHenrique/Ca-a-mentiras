function perfil() {
    window.location.href = "index3.php"
}

function tbFilho(name) {
    var nomeCont = document.getElementById('nomeSupervisionado');
    var dados = document.getElementById('dados');
    var grid = document.getElementById('gridPessoas');
    switch (name) {
        case 'Antônio da Silva':
            nomeCont.innerHTML = 'Antônio da Silva';
            cont = '';
            cont += '<tr><th COLSPAN="2">Histórico de localização</th></tr>';
            cont += '<tr><td>18:45</td><td>Está na empresa Itaú - Rua da Mooca</td></tr>';
            cont += '<tr><td>09:17</td><td>Parou na padaria Doces Sonhos - Rua Josefina Arnoni</td></tr>';
            cont += '<tr><td>08:20</td><td>Passou pela rua Quarenta e Oito</td></tr>';
            dados.innerHTML = cont;

            user1 = "'" + 'Josenilton da Silva' + "'";
            user2 = "'" + 'Anastácia da Silva' + "'";
            user3 = "'" + 'Josenilton Junior' + "'";
            contOthers = '';
            contOthers += '<div class="others"><img src="img/img4.png"><a href="#" onclick="tbFilho(' + user1 + ')">Josenilton da Silva</a></div><div class="others"><img src="img/2.jfif"><a href="#" onclick="tbFilho(' + user2 + ')">Anastácia da Silva</a></div><div class="others"><img src="img/3.jfif"><a href="#" onclick="tbFilho(' + user3 + ')">Josenilton Junior</a></div>';
            grid.innerHTML = contOthers;
            break;
        case 'Anastácia da Silva':
            nomeCont.innerHTML = 'Anastácia da Silva'
            cont = '';
            cont += '<tr><th COLSPAN="2">Histórico de localização</th></tr>';
            cont += '<tr><td>09:00</td><td>Estava na escola</td></tr>';
            cont += '<tr><td>11:00</td><td>Está em casa!</td></tr>';
            dados.innerHTML = cont;

            user1 = "'" + 'Antônio da Silva' + "'";
            user2 = "'" + 'Josenilton da Silva' + "'";
            user3 = "'" + 'Josenilton Junior' + "'";
            contOthers = '<div class="others"><img src="img/1.jfif"><a href="#" onclick="tbFilho(' + user1 + ')">Antônio da Silva</a></div><div class="others"><img src="img/img4.png"><a href="#" onclick="tbFilho(' + user2 + ')">Josenilton da Silva</a></div><div class="others"><img src="img/3.jfif"><a href="#" onclick="tbFilho(' + user3 + ')">Josenilton Junior</a></div>';
            grid.innerHTML = contOthers;
            break;
        case 'Josenilton Junior':
            nomeCont.innerHTML = 'Josenilton Junior';
            cont = '';
            cont += '<tr><th COLSPAN="2">Histórico de localização</th></tr>';
            cont += '<tr><td>14:00</td><td>Parou no Supermercado Guaio - Rua João de Lima Paiva</td></tr>';
            cont += '<tr><td>12:30</td><td>Parou no restaurante Comida Caseira da dona Cida - Rua do Cabeça</td></tr>';
            cont += '<tr><td>12:00</td><td>Passou pela rua Lagoa de Esmoriz</td></tr>';
            cont += '<tr><td>09:00</td><td>Passou pela rua Borboletas Psicodélicas</td></tr>';
            dados.innerHTML = cont;

            user1 = "'" + 'Antônio da Silva' + "'";
            user2 = "'" + 'Anastácia da Silva' + "'";
            user3 = "'" + 'Josenilton da Silva' + "'";
            contOthers = '<div class="others"><img src="img/1.jfif"><a href="#" onclick="tbFilho(' + user1 + ')">Antônio da Silva</a></div><div class="others"><img src="img/2.jfif"><a href="#" onclick="tbFilho(' + user2 + ')">Anastácia da Silva</a></div><div class="others"><img src="img/img4.png"><a href="#" onclick="tbFilho(' + user3 + ')">Josenilton da Silva</a></div>';
            grid.innerHTML = contOthers;
            break;
        case 'Josenilton da Silva':
            nomeCont.innerHTML = 'Josenilton da Silva';

            cont = '';
            cont += '<tr><th COLSPAN="2">Histórico de localização</th></tr>';
            cont += '<tr><td>23:45</td><td>Está no Club Amnesia - Rua Alfredo Zamlutti</td></tr>';
            cont += '<tr><td>20:30</td><td>Parou no Barzinho de seu João - Rua Gaspar Aranha</td></tr>';
            cont += '<tr><td>16:20</td><td>Parou na padaria Puro Pão - Rua Tamandaré</td></tr>';
            dados.innerHTML = cont;

            user1 = "'" + 'Antônio da Silva' + "'";
            user2 = "'" + 'Anastácia da Silva' + "'";
            user3 = "'" + 'Josenilton Junior' + "'";
            contOthers = '<div class="others"><img src="img/1.jfif"><a href="#" onclick="tbFilho(' + user1 + ')">Antônio da Silva</a></div><div class="others"><img src="img/2.jfif"><a href="#" onclick="tbFilho(' + user2 + ')">Anastácia da Silva</a></div><div class="others"><img src="img/3.jfif"><a href="#" onclick="tbFilho(' + user3 + ')">Josenilton Junior</a></div>';
            grid.innerHTML = contOthers;
            break;
    }
}

function returnHome() {
    window.location.href = "index2.php"
}