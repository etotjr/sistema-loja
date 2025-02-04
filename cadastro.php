
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro PHP</title>
    <style>
        body{
            background-color: rgb(46, 49, 49);
            color: linen;
        }
    </style>
    </head>
    <body>
    <div class="container">
        <h1>Cadastro PHP</h1>
        <?php
    /*
        // Estabelecer conexão com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lojajr";

        // Criar conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexão
        if ($conn->connect_error) {
            die("<div class='error'>Falha na conexão: " . $conn->connect_error . "</div>");
        }
    */
        // Função para validar e sanitizar dados
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        // Inicializar variáveis e mensagens de erro
        $razaoSocial = $nomeFantasia = $cnpj = $telefone = $email = $uf = $cidade = $endereco = $numero = "";
        $error = "";

        // Validar e processar dados do formulário
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ( empty($_POST["tipo"]) || empty($_POST["nome"]) || empty($_POST["cpf"]) ||
                empty($_POST["telefone"]) || empty($_POST["email"]) || empty($_POST["uf"]) ||
                empty($_POST["cidade"]) || empty($_POST["endereco"]) || empty($_POST["numero"]) || 
                empty($_POST["data"]) || empty($_POST["cep"])) {
                $error = "Todos os campos são obrigatórios.";
            } else {
                $tipoPessoa = test_input($_POST["tipo"]);
                $nome = test_input($_POST["nome"]);
                $cpf = test_input($_POST["cpf"]);
                $telefone = test_input($_POST["telefone"]);
                $email = test_input($_POST["email"]);
                $uf = test_input($_POST["uf"]);
                $cidade = test_input($_POST["cidade"]);
                $endereco = test_input($_POST["endereco"]);
                $numero = test_input($_POST["numero"]);
                $data = test_input($_POST["data"]);
                $cep = test_input($_POST["cep"]);
            }//retirar esse fechamento quando for utilizar o inserir dados
        }
    /*
                // Inserir dados no banco de dados
                $sql = "INSERT INTO pessoas (nome, cpf, telefone, email, uf, cidade, endereco, tipo, data_cadastro, cep)
                        VALUES ('$nome', '$cpf', '$telefone', '$email', '$uf', '$cidade', '$endereco', '$tipoPessoa', '$data', '$cep')";

                if ($conn->query($sql) === TRUE) {
                    echo "<div class='data'>Cadastro realizado com sucesso!</div>";
                } else {
                    echo "<div class='error'>Erro: " . $sql . "<br>" . $conn->error . "</div>";
                }
            }
        }

        $conn->close();*/
        ?>

        <?php if (!empty($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
     <div>   
        <div class="data"><strong>Pessoa:</strong> <?php echo $tipoPessoa; ?></div>
        <div class="data"><strong>Nome:</strong> <?php echo $nome; ?></div>
        <div class="data"><strong>CPF/CNPJ:</strong> <?php echo $cpf; ?></div>
        <div class="data"><strong>Telefone:</strong> <?php echo $telefone; ?></div>
        <div class="data"><strong>Email:</strong> <?php echo $email; ?></div>
        <div class="data"><strong>UF:</strong> <?php echo $uf; ?></div>
        <div class="data"><strong>Cidade:</strong> <?php echo $cidade; ?></div>
        <div class="data"><strong>Endereço:</strong> <?php echo $endereco; ?></div>
        <div class="data"><strong>Número:</strong> <?php echo $numero; ?></div>
        <div class="data"><strong>Data:</strong> <?php echo $data; ?></div>
        <div class="data"><strong>CEP:</strong> <?php echo $cep; ?></div>
    </div>


    <?php
// Verificar e processar dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar campos obrigatórios aqui, se necessário

    // Verificar checkboxes marcados
    $clienteChecked = isset($_POST['cliente']) ? "Cliente" : "";
    $fornecedorChecked = isset($_POST['fornecedor']) ? "Fornecedor" : "";
    $representanteChecked = isset($_POST['representante']) ? "Representante" : "";
    $transportadoraChecked = isset($_POST['transportadora']) ? "Transportadora" : "";
    $prestadorChecked = isset($_POST['prestador-servico']) ? "Prestador de serviço" : "";

    // Exemplo de como você pode imprimir os resultados
    echo "<br>";
    echo "<div class='data'> <strong> Tipo de Pessoa:</strong> </div>";
    echo "<div class='data'> $clienteChecked</div>";
    echo "<div class='data'> $fornecedorChecked</div>";
    echo "<div class='data'> $representanteChecked</div>";
    echo "<div class='data'> $transportadoraChecked</div>";
    echo "<div class='data'> $prestadorChecked</div>";
}
?>

    </body>
</html> 
