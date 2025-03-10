<?php
// Variáveis para conteúdo dinâmico
$currentYear = date('Y');
$companyName = 'Nome da Empresa';
$address = 'Av. Exemplo, 123 - Cidade/UF';
$phone = '(11) 98765-4321';
$email = 'contato@empresa.com';
?>

<footer class="footer">
    <div class="footer-content">
        <!-- Seção 1: Links Rápidos -->
        <div class="footer-section">
            <h3>Links Úteis</h3>
            <ul class="footer-menu">
                <li><a href="index.php">Início</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="politica.php">Política de Privacidade</a></li>
            </ul>
        </div>

        <!-- Seção 2: Contato -->
        <div class="footer-section">
            <h3>Contato</h3>
            <p><i class="fas fa-map-marker-alt"></i> <?php echo $address; ?></p>
            <p><i class="fas fa-phone"></i> <?php echo $phone; ?></p>
            <p><i class="fas fa-envelope"></i> <?php echo $email; ?></p>
        </div>

        <!-- Seção 3: Redes Sociais -->
        <div class="footer-section">
            <h3>Redes Sociais</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-bottom">
        <p>&copy; <?php echo $currentYear; ?> <?php echo $companyName; ?> - Todos os direitos reservados</p>
        <a href="#" class="back-to-top" onclick="backToTop()"><i class="fas fa-arrow-up"></i> Topo</a>
    </div>
</footer>

<script>
    // Botão Voltar ao Topo
    function backToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>