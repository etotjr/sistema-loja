
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
        $dbname = "meu_banco_de_dados";

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
            if ( empty($_POST["tipo-pessoa"]) || empty($_POST["razao-social"]) || empty($_POST["nome-fantasia"]) || empty($_POST["cnpj"]) ||
                empty($_POST["telefone"]) || empty($_POST["email"]) || empty($_POST["uf"]) ||
                empty($_POST["cidade"]) || empty($_POST["endereco"]) || empty($_POST["numero"])) {
                $error = "Todos os campos são obrigatórios.";
            } else {
                $tipoPessoa = test_input($_POST["tipo-pessoa"]);
                $razaoSocial = test_input($_POST["razao-social"]);
                $nomeFantasia = test_input($_POST["nome-fantasia"]);
                $cnpj = test_input($_POST["cnpj"]);
                $telefone = test_input($_POST["telefone"]);
                $email = test_input($_POST["email"]);
                $uf = test_input($_POST["uf"]);
                $cidade = test_input($_POST["cidade"]);
                $endereco = test_input($_POST["endereco"]);
                $numero = test_input($_POST["numero"]);
            }//retirar esse fechamento quando for utilizar o inserir dados
        }
    /*
                // Inserir dados no banco de dados
                $sql = "INSERT INTO cadastro_empresas (razao_social, nome_fantasia, cnpj, telefone, email, uf, cidade, endereco, numero)
                        VALUES ('$razaoSocial', '$nomeFantasia', '$cnpj', '$telefone', '$email', '$uf', '$cidade', '$endereco', '$numero')";

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
        
        <div class="data"><strong>Pessoa:</strong> <?php echo $tipoPessoa; ?></div>
        <div class="data"><strong>Razão Social:</strong> <?php echo $razaoSocial; ?></div>
        <div class="data"><strong>Nome Fantasia:</strong> <?php echo $nomeFantasia; ?></div>
        <div class="data"><strong>CNPJ:</strong> <?php echo $cnpj; ?></div>
        <div class="data"><strong>Telefone:</strong> <?php echo $telefone; ?></div>
        <div class="data"><strong>Email:</strong> <?php echo $email; ?></div>
        <div class="data"><strong>UF:</strong> <?php echo $uf; ?></div>
        <div class="data"><strong>Cidade:</strong> <?php echo $cidade; ?></div>
        <div class="data"><strong>Endereço:</strong> <?php echo $endereco; ?></div>
        <div class="data"><strong>Número:</strong> <?php echo $numero; ?></div>
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
