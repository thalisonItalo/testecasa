<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["email"])) {
    // Redirecionar para a página de login
    header("Location: login.php");
    exit();
}

// URL do endpoint que você deseja acessar
$url = "https://jsonplaceholder.typicode.com/users";

// Inicializa a sessão CURL
$ch = curl_init();

// Define as opções da requisição CURL
curl_setopt($ch, CURLOPT_URL, $url); // URL da requisição
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Retorna o resultado da requisição como uma string
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Permite redirecionamentos
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignora a verificação do certificado SSL (não recomendado em produção)

// Executa a requisição e obtém a resposta
$response = curl_exec($ch);

// Verifica se ocorreu algum erro durante a requisição
if ($response === false) {
    $error = curl_error($ch);
    // Trate o erro de acordo com sua necessidade
    echo "Erro na requisição CURL: " . $error;
}

// Fecha a sessão CURL
curl_close($ch);

// Faça algo com a resposta da requisição
$data = json_decode($response,true);








?>
 <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nome de Usuário</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>Website</th>
                <th>Nome da Empresa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $user) : ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['address']['city']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td><?php echo $user['website']; ?></td>
                    <td><?php echo $user['company']['name']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>