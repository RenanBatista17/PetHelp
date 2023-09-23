<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Login.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetHelp</title>
    <link rel="stylesheet" type="text/css" href="HomePage.css">
    <link rel="shortcut icon" type="imagex/png" href="Icon.svg">
    <script src="HomePage.js" type="text/javascript"></script>
</head>
<body>
    <nav>
        <h3>Bem vindo(a) ao PetHelp!</h3>
    </nav>
    <header>
            <div id="logo">
                <a href="HomePage.php">
                    <img src="PetHelp.png">
                </a>
            </div>
            <img src="Agendar.svg" height="20px" width="20px" id="icon">
            <a href="AgendarConsulta.php">Agendar Consulta</a>
            <img src="Cadastro.svg" height="20px" width="20px" id="icon">
            <a href="CadastroPet.php">Cadastro Pet</a>
            <img src="Perfil.svg" height="20px" width="20px" id="icon">
            <a href="">Perfil</a>
            <img src="Historico.svg" height="20px" width="20px" id="icon">
            <a href="">Histórico de Consultas</a>
            <a href="Login.php">Sair</a>
    </header>
    <section id="Menu">
        <div id="Novidades">
            <img src="Banner.png" alt="banner1" id="banner1" width="1805px">
        </div>
        <h4 id="agend">Agendamentos</h4>
        <div id="Agendamentos">
            <div id="Introducao">
                <p>
                    <b>Central de Agendamentos do PetHelp</b><br><br>
                    Olá, querido cliente do PetHelp,<br><br>
                    Estamos felizes em receber você em nossa central de agendamentos, o coração de nossa operação para garantir o melhor cuidado para seu querido animal de estimação. Aqui, você encontrará todas as informações necessárias para marcar um horário conosco e garantir que seu peludo receba os cuidados que merece.
                </p>
            </div>
            <div id="Comunicacao">
                <p>
                    <b>Telefone:</b><br><br>(44) 3523-5940, onde nossos simpáticos atendentes estarão prontos para ajudar com agendamentos, dúvidas ou consultas sobre nossos serviços.<br><br>
                    <b>Agendamento Online:</b><br><br>www.petshopamigofiel.com.br É fácil e rápido! Basta selecionar os serviços desejados, escolher a data e o horário disponíveis e confirmar a reserva.<br><br>
                    <b>E-mail:</b><br><br>atendimento@petshopamigofiel.com.br e nossa equipe entrará em contato com você o mais breve possível.
                </p>
            </div>
            <div id="Hora">
                <p>
                    <b>Horários de Atendimento:</b><br><br>
                    Segunda a Sexta: Das 8h às 20h.<br>
                    Sábados: Das 9h às 17h.<br>
                    Domingos: Fechado (exceto para serviços de emergência).<br>
                </p>
            </div>
        </div>
        <div id="DAten">
            <button onclick="Agendar();" class="Botao">Agendar</button>
        </div>
    </section>
    <section id="BarraDeRolagem"></section>
    <div id="Desconto">
        <img src="Banner2.png" alt="banner2" id="banner2" width="1805px">
    </div>
    <div id="Pets">
        <h4>Pet's</h4>
    </div>
    <section id="Pet">
        <div id="Imagens">
            <img src="Golden.png" onmouseover="showText('Max')" onmouseout="hideText('Max')">
            <img src="Pug.png" onmouseover="showText('Pug')" onmouseout="hideText('Pug')">
            <img src="Capeta.png" onmouseover="showText('Capeta')" onmouseout="hideText('Capeta')">
            <img src="Shitsu.png" onmouseover="showText('Shitsu')" onmouseout="hideText('Shitsu')">
        </div>
        <div id="DescricaoP">
            <p id="Max">
                <b>Max</b><br><br>
                  Max, o golden retriever, é um verdadeiro raio de sol de quatro patas, que adora brincar e fazer amigos, trazendo alegria a todos com sua personalidade animada e afetuosa
              </p>
            <!-- Adicione descrições para os outros pets aqui -->
        </div>
    </section>
    <div id="Pro">
        <h4>Produtos</h4> 
    </div>
    <section id="Alimentos">
        <div id="Racao">
            <img src="Racao1.png" title="Racao">
            <h6>Ração Seca Pedigree para Cães Filhotes Raças Médias e Grandes</h6>
            <button onclick="Agendar();" class="SM">Saiba Mais!</button>
        </div>
        <div id="Racao">
            <img src="Racao2.png" title="Racao2">
            <h6>Ração Special Cat Ultralife Gatos Adultos Frango E Arroz 3 Kg</h6>
            <button onclick="Agendar();" class="SM">Saiba Mais!</button>
        </div>
        <div id="Racao">
            <img src="Racao1.png" title="Racao">
            <h6>Ração Seca Pedigree para Cães Filhotes Raças Médias e Grandes</h6>
            <button onclick="Agendar();" class="SM">Saiba Mais!</button>
        </div>
        <div id="Racao">
            <img src="Racao1.png" title="Racao">
            <h6>Ração Seca Pedigree para Cães Filhotes Raças Médias e Grandes</h6>
            <button onclick="Agendar();" class="SM">Saiba Mais!</button>
        </div>
    </section>
    <footer>
        <ul id="Lista">
            <li id="Titulo"><b>Institucional</b></li>
            <li><p>Termos de Uso</p></li>
            <li><p>Política de Privacidade</p></li>
            <li><p>Contato</p></li>
            <li><p>Sobre PetHelp</p></li>
        </ul>
        <div id="Redes">
            <div id="Titulo">
                <b>Siga-nos</b>
            </div>
            <div id="Itens">
                <a href="" id="Red">
                    <img src="Instagram.svg" height="30px" width="30px">
                </a>
                <a href="" id="Red">
                    <img src="Facebook.svg" height="30px" width="30px">
                </a>
            </div>
        </div>
    </footer>
</body>
</html>