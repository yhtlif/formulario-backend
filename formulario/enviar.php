<?php
$host = 'localhost';
$dbname = 'feedback_db'; 
$user = 'root';  
$pass = '';  

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $gender = $_POST['gender'];
        $feedback = $_POST['feedback'];
        $avaliacao = $_POST['avaliacao'];

        $sql = "INSERT INTO feedbacks (firstname, lastname, email, telefone, data_nascimento, gender, feedback, avaliacao)
                VALUES (:firstname, :lastname, :email, :telefone, :data_nascimento, :gender, :feedback, :avaliacao)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':email' => $email,
            ':telefone' => $telefone,
            ':data_nascimento' => $data_nascimento,
            ':gender' => $gender,
            ':feedback' => $feedback,
            ':avaliacao' => $avaliacao,
        ]);

        echo "Feedback enviado com sucesso!";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>