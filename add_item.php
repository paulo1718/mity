<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $itemName = $_POST['item_name'];

    if (!empty($itemName)) {
        // Inserir o item no banco de dados
        $db = new SQLite3('items.db');
        $stmt = $db->prepare('INSERT INTO items (name) VALUES (:name)');
        $stmt->bindValue(':name', $itemName, SQLITE3_TEXT);
        $stmt->execute();
        $db->close();

        echo 'Item adicionado com sucesso!';
    } else {
        echo 'Por favor, insira um nome para o item.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Item</title>
</head>
<body>
<h2>Adicionar Item</h2>
<form method="POST">
    <input type="text" name="item_name" placeholder="Nome do item">
    <button type="submit">Adicionar</button>
</form>
</body>
</html>
