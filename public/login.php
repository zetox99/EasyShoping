<?php
session_start();

// Simulation de base de données (à remplacer)
$admins = [
    'admin@example.com' => [
        'password' => password_hash('admin123', PASSWORD_DEFAULT),
        'role' => 'admin'
    ]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($admins[$email]) {
        if (password_verify($password, $admins[$email]['password'])) {
            $_SESSION['user'] = [
                'email' => $email,
                'role' => $admins[$email]['role']
            ];
            header('Location: redirect.php');
            exit();
        }
    }
    
    header('Location: login.html?error=1');
    exit();
}
?>