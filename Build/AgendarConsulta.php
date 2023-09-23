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

    if(isset($_POST['submit'])){
        $nomeP = $_POST['nomeP'];
        $nomeD = $_POST['nomeD'];
        $atendimento = $_POST['atendimento'];
        $dataA = $_POST['dataA'];
    
        $result = mysqli_query($conexao, "INSERT INTO agendamentos(nomeP,nomeD,atendimento,dataA) VALUES ('$nomeP','$nomeD','$atendimento','$dataA')");  
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Consulta</title>
    <link rel="stylesheet" type="text/css" href="AgendarConsulta.css">
    <link rel="shortcut icon" type="imagex/png" href="Icon.svg">
    <script src="AgendarConsulta.js" type="text/javascript"></script>
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
    <section id="AgendarC">
        <div id="titulo">
            <h3>Agendamento de Consulta</h3>
        </div>
        <div id="CadastroConsulta">
            <form form action="AgendarConsulta.php" method="POST">
                <div id="NomePet">
                    <h6>Nome do Pet:</h6>
                    <input type="text" placeholder="Nome pet" name="nomeP">                   
                </div>
                <div id="NomePessoa">
                    <h6>Nome do Dono:</h6>
                    <input type="text" placeholder="Nome" name="nomeD">                    
                </div>
                <div id="TipoAtendimento">
                    <h6>Tipo Atendimento:</h6>
                    <select name="atendimento" id="Atendimentos">
                        <option id="banho">Banho e Tosa</option>
                        <option id="hospedagem">Hospedagem</option>
                        <option id="adestramento">Adestramento</option>
                        <option id="vacinacao">Vacinação</option>
                        <option id="microchipagem">Microchipagem</option>
                        <option id="exames">Exames Laboratoriais</option>
                    </select>                    
                </div>
                <div id="DataConsulta">
                    <h6>Data da Consulta:</h6>
                    <input type="date" placeholder="data" name="dataA">                    
                </div>
                <div id="Agende">
                    <input type="submit" placeholder="Agendar" value="Agendar" name="submit">
                </div>
            </form>
        </div>
        <div id="Conteudo">
            <img src="Agendar.png" max-width="1817px">
        </div>
        <div id="Info">
            <div id="DescricaoA">
                <h3>Banho e Tosa</h3>
                <h4>Banho</h4>
                <ol>
                    <li>Molhação:</li>
                    <p>O primeiro passo é molhar completamente o animal, garantindo que todo o corpo, incluindo o pelo e a pele, esteja úmido.</p>
                    <li>Shampoo:</li>
                    <p>É aplicado um shampoo adequado ao tipo de pelagem do animal, seja ele de pelo curto, longo, liso, ou encaracolado. Isso ajuda a remover sujeira, oleosidade e possíveis parasitas.</p>
                    <li>Massagem:</li>
                    <p>Durante a aplicação do shampoo, o profissional realiza uma massagem suave para limpar profundamente a pele do animal.</p>
                    <li>Enxágue:</li>
                    <p>Após a limpeza, o pet é enxaguado cuidadosamente para garantir que nenhum resíduo de shampoo permaneça no pelo.</p>
                    <li>Condicionador(opcional):</li>
                    <p>Em alguns casos, é aplicado um condicionador para deixar o pelo mais macio e fácil de pentear.</p>
                    <li>Secagem:</li>
                    <p>O animal é seco com um secador apropriado, evitando o uso de altas temperaturas para não machucar a pele sensível do pet.</p>
                </ol>
                <h4>Tosa</h4>
                <ol>
                    <li>Corte:</li>
                    <p>Dependendo da raça e das preferências do dono, o profissional realiza o corte de pelo de acordo com um estilo específico. Isso pode envolver o uso de tesouras, máquinas de tosa e outros equipamentos especializados.</p>
                    <li>Acabamento:</li>
                    <p>Após o corte, são feitos acabamentos, como a aparagem das unhas, limpeza das orelhas e, em alguns casos, a raspagem das glândulas anais.</p>
                    <li>Pentes e escovas:</li>
                    <p>O pelo é penteado e escovado para remover nós, desembaraçar e dar um aspecto mais bonito e saudável.</p>
                    <li>Estilo:</li>
                    <p>Em muitos casos, o pet shop oferece serviços de estilização, como fazer topetes, cortes específicos da raça ou tingimento do pelo com tintas seguras para animais.</p>
                </ol>
            </div>
            <div id="DescricaoB">
                <h3>Vacinação</h3>
                <ol>
                    <li>Avaliação inicial:</li>
                    <p>Antes de administrar qualquer vacina, um profissional de saúde animal avalia o estado de saúde geral do animal. Isso pode incluir a verificação de temperatura, peso, histórico médico e exame físico.</p>
                    <li>Escolha da vacina:</li>
                    <p>Com base na idade, histórico de vacinação anterior e necessidades específicas do animal, o profissional seleciona as vacinas apropriadas para administrar. As vacinas comuns para animais de estimação incluem aquelas que protegem contra doenças como raiva, parvovirose, cinomose, leptospirose e outras.</p>
                    <li>Preparação e administração:</li>
                    <p>A vacina é preparada de acordo com as instruções do fabricante e as diretrizes veterinárias. Geralmente, as vacinas são administradas por meio de uma injeção subcutânea, que é aplicada sob a pele, na área da nuca ou da lateral do corpo.</p>
                    <li>Registro e lembretes:</li>
                    <p>O pet shop registra as informações sobre a vacinação, incluindo a data, o tipo de vacina e o lote utilizado. Também pode fornecer ao dono do animal um cartão de vacinação com essas informações para facilitar o acompanhamento das próximas doses necessárias.</p>
                    <li>Orientações pós-vacinação:</li>
                    <p>O dono do animal é informado sobre os cuidados após a vacinação, como observar possíveis reações adversas, manter o animal longe de contato com outros animais não vacinados por um período e agendar a próxima dose da vacina, se necessário.</p>
                    <li>Atualização de vacinas:</li>
                    <p>Dependendo do tipo de vacina e do esquema de imunização recomendado, o pet shop pode orientar o dono a retornar para reforços ou atualizações das vacinas em datas específicas.</p>
                    <li>Monitoramento da saúde:</li>
                    <p>Além da vacinação, o pet shop pode oferecer serviços adicionais, como exames de sangue para verificar o estado de imunização do animal e rastrear possíveis problemas de saúde.</p>
                </ol>
            </div>
            <div id="DescricaoC">
                <h3>Microchipagem</h3>
                <ol>
                    <li>Identificação do animal:</li>
                    <p>O processo começa com a identificação do animal por meio de um microchip. Um microchip é um dispositivo do tamanho de um grão de arroz, que contém um número de identificação único e exclusivo para o animal.</p>
                    <li>Preparação:</li>
                    <p>O profissional de saúde animal verifica se o animal está calmo e tranquilo, pois isso facilita o procedimento. Em alguns casos, pode ser necessário acalmar o animal com carinho e mimos antes de prosseguir.</p>
                    <li>Local da implantação:</li>
                    <p>O microchip é implantado sob a pele do animal, geralmente na área entre as omoplatas ou na base do pescoço. Essa é uma região comum para a implantação, pois oferece fácil acesso para leitura futura.</p>
                    <li>Implantação do microchip:</li>
                    <p>Usando uma seringa especial, o profissional insere o microchip sob a pele do animal. Isso é geralmente um procedimento rápido e relativamente indolor.</p>
                    <li>Registro de informações:</li>
                    <p>Após a implantação, o profissional registra as informações relacionadas ao microchip, incluindo o número de identificação único do animal, a data da microchipagem e os dados de contato do dono. Essas informações são essenciais para rastrear o animal até seu proprietário no futuro.</p>
                    <li>Leitura do microchip:</li>
                    <p>Para garantir que o microchip foi implantado corretamente e que está funcionando, o profissional verifica a leitura do microchip com um leitor de microchip. Esse leitor exibe o número de identificação único do animal.</p>
                    <li>Registro permanente:</li>
                    <p>As informações do microchip são registradas em um banco de dados nacional ou internacional de identificação de animais. Isso permite que qualquer pessoa que encontre o animal possa verificar a identidade e os detalhes de contato do dono.</p>
                    <li>Orientações para o dono:</li>
                    <p>O dono recebe informações sobre como atualizar os dados de contato no banco de dados, caso haja alguma mudança em seu endereço ou número de telefone. Também é importante que o dono mantenha o registro do microchip atualizado.</p>
                </ol>
            </div>
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