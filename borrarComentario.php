<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"])) {
        $id = $_POST["id"];

        // Conectar a la base de datos SQLite
        $db = new SQLite3('tu_base_de_datos.db');

        // Preparar la consulta de eliminación
        $stmt = $db->prepare("DELETE FROM comentarios WHERE id = :id");
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);

        if ($stmt->execute()) {
            // Redirigir a la página principal con un mensaje de éxito
            header("Location: index.php?mensaje=Comentario eliminado");
            exit();
        } else {
            echo "Error al eliminar el comentario.";
        }
    }
}
?>

