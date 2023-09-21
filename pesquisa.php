<?php
// Verifica se o parâmetro 'query' foi enviado via método GET
if (isset($_GET['query'])) {
    // Captura o valor do parâmetro 'query'
    $pesquisa = $_GET['query'];

    // Lógica para verificar a palavra específica
    if ($pesquisa == "instalação") {
        // Redireciona o usuário para a página específica usando um cabeçalho de redirecionamento
        header("Location: index2.html");
        exit(); // Certifique-se de sair para evitar que o código continue a ser executado
    }

    // Se a palavra não for encontrada, você pode realizar outra lógica de processamento aqui
    echo "Você pesquisou por: " . htmlspecialchars($pesquisa, ENT_QUOTES, 'UTF-8');
} else {
    // Se o parâmetro 'query' não foi enviado, exibe um formulário de pesquisa
    echo '<form action="' . htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8') . '" method="GET">
            <input type="text" name="query" placeholder="Digite sua pesquisa...">
            <button type="submit">Pesquisar</button>
          </form>';
}
?>
