<?php
$pageTitle = 'Ederson roberto da Costa o Site';
$currentPage = 'home';
include 'header.php';
?>

<!-- Conteúdo Principal -->
<main class="main-content">
    <!-- Seção Hero -->
    <section class="hero">
        <div class="container">
            <h1>Bem-vindo ao Nosso Site</h1>
            <p>Soluções inovadoras para o seu negócio</p>
            <a href="contato.php" class="btn">Fale Conosco</a>
        </div>
    </section>

    <!-- Seção de Serviços em Destaque -->
    <section class="features">
        <div class="container">
            <h2>Nossos Serviços</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <i class="fas fa-cogs"></i>
                    <h3>Desenvolvimento Web</h3>
                    <p>Criação de sites e aplicações modernas</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-chart-line"></i>
                    <h3>Marketing Digital</h3>
                    <p>Estratégias para aumentar suas vendas</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Aplicativos Mobile</h3>
                    <p>Apps nativos para Android e iOS</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Sobre Nós -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <img src="img/about.jpg" alt="Sobre Nós" class="about-image">
                <div class="about-text">
                    <h2>Quem Somos</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    <a href="sobre.php" class="btn-secondary">Saiba Mais</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section class="testimonials">
        <div class="container">
            <h2>O que dizem nossos clientes</h2>
            <div class="testimonial-slider">
                <div class="testimonial-item">
                    <p>"Excelente serviço! Profissionais qualificados e atendimento rápido."</p>
                    <cite>João Silva - Empresa X</cite>
                </div>
                <div class="testimonial-item">
                    <p>"Melhorou significativamente nossa presença online. Recomendo!"</p>
                    <cite>Maria Oliveira - Empresa Y</cite>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
        <div class="container">
            <h3>Pronto para crescer?</h3>
            <p>Entre em contato e descubra como podemos ajudar sua empresa</p>
            <a href="contato.php" class="btn">Solicite um Orçamento</a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
