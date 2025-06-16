<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Revolution | Modern Web Development</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Animated Background -->
    <div class="animated-bg"></div>
    
    <!-- Navigation -->
    <nav class="glass-nav">
        <div class="nav-container">
            <div class="logo">
                <span class="logo-icon"><i class="fab fa-php"></i></span>
                <span class="logo-text">PHP<span>Revolution</span></span>
            </div>
            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>
            <ul class="nav-menu">
                <li><a href="index.php" class="active"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="about.php"><i class="fas fa-code"></i> About PHP</a></li>
                <li><a href="members.php"><i class="fas fa-users"></i> Members</a></li>
                <!-- <li><a href="#" class="cta-nav"><i class="fas fa-rocket"></i> Get Started</a></li> -->
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="title-word title-word-1">Powering</span>
                <span class="title-word title-word-2">the</span>
                <span class="title-word title-word-3">Web</span>
                <span class="title-word title-word-4">with</span>
                <span class="title-word title-word-5">PHP</span>
            </h1>
            <p class="hero-subtitle">The most powerful server-side scripting language for modern web development</p>
            <div class="hero-buttons">
                <a href="/about.php" class="btn-primary pulse">Explore PHP</a>
                <a href="/members.php" class="btn-secondary">Meet Our Team</a>
            </div>
        </div>
        <div class="hero-image">
            <div class="code-animation">
                <div class="code-line"></div>
                <div class="code-line"></div>
                <div class="code-line"></div>
                <div class="code-line"></div>
                <div class="code-line"></div>
                <div class="php-logo-float">
                    <i class="fab fa-php"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-card glow">
                <div class="stat-icon"><i class="fas fa-globe"></i></div>
                <div class="stat-number" data-count="78">0</div>
                <div class="stat-label">of Websites Use PHP</div>
            </div>
            <div class="stat-card glow">
                <div class="stat-icon"><i class="fas fa-users"></i></div>
                <div class="stat-number" data-count="5000000">0</div>
                <div class="stat-label">PHP Developers</div>
            </div>
            <div class="stat-card glow">
                <div class="stat-icon"><i class="fas fa-heart"></i></div>
                <div class="stat-number" data-count="95">0</div>
                <div class="stat-label">Developer Satisfaction</div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="section-header">
            <h2>Why <span>PHP</span> Rocks</h2>
            <p>Discover the power of modern PHP development</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                <h3>Blazing Fast</h3>
                <p>PHP 8.x offers incredible performance improvements with JIT compilation.</p>
                <div class="feature-wave"></div>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Secure</h3>
                <p>Built-in security features and regular updates keep your apps safe.</p>
                <div class="feature-wave"></div>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-puzzle-piece"></i></div>
                <h3>Flexible</h3>
                <p>Integrates seamlessly with databases, APIs, and modern frameworks.</p>
                <div class="feature-wave"></div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="glass-footer">
        <div class="footer-content">
            <div class="footer-logo">
                <i class="fab fa-php"></i> PHP<span>Revolution</span>
            </div>
            <div class="footer-links">
                <a href="https://github.com/Oluwatobiloba20/php-school-project"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <p class="footer-copy">&copy; 2025 PHP Revolution. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>