<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    
    <!-- CSS Externos -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <!-- Logo -->
        <div class="logo">
            <a href="index.php"><img src="shrek.jpeg" alt="Logo" width="120"></a>
        </div>
        
        <!-- Menu Hamburguer (mobile) -->
        <div class="menu-toggle" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
        
        <!-- Menu de Navegação -->
        <nav class="menu">
            <li><a href="index.php" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Início</a></li>
            <li><a href="sobre.php" class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>">Sobre</a></li>
            <li><a href="servicos.php" class="<?php echo ($currentPage == 'services') ? 'active' : ''; ?>">Serviços</a></li>
            <li><a href="contato.php" class="<?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contato</a></li>
            <li><a href="login.php" class="<?php echo ($currentPage == 'login') ? 'active' : ''; ?>"><i class="fas fa-user"></i> Login</a></li>
        </nav>
    </header>

    <script>
        // Função para toggle do menu mobile
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>