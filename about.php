<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About PHP | PHP Revolution</title>
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
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="about.php" class="active"><i class="fas fa-code"></i> About PHP</a></li>
                <li><a href="members.php"><i class="fas fa-users"></i> Members</a></li>
                <!-- <li><a href="#" class="cta-nav"><i class="fas fa-rocket"></i> Get Started</a></li> -->
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="page-hero">
        <div class="hero-content">
            <h1>Modern <span>PHP</span> Development</h1>
            <p>Everything you need to know about building web applications with PHP</p>
        </div>
        <div class="hero-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
    </section>

    <!-- PHP Intro -->
    <section class="content-section">
        <div class="section-container">
            <div class="content-card glass-card slide-in">
                <h2>What is PHP?</h2>
                <p>PHP (Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>
                <p>Originally created by Rasmus Lerdorf in 1994, PHP now powers millions of websites and web applications worldwide, including major platforms like WordPress, Wikipedia, and Facebook.</p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">1994</div>
                    <div class="timeline-content glass-card">
                        <h3>PHP Created</h3>
                        <p>Rasmus Lerdorf creates PHP/FI (Personal Home Page/Forms Interpreter)</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">1998</div>
                    <div class="timeline-content glass-card">
                        <h3>PHP 3 Released</h3>
                        <p>Zeev Suraski and Andi Gutmans rewrite the parser, forming PHP 3</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2004</div>
                    <div class="timeline-content glass-card">
                        <h3>PHP 5</h3>
                        <p>Major update with improved OOP support and the Zend Engine II</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2020</div>
                    <div class="timeline-content glass-card">
                        <h3>PHP 8</h3>
                        <p>Introduction of JIT compilation, attributes, named arguments, and more</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PHP Features -->
    <section class="full-width-section">
        <div class="parallax-bg"></div>
        <div class="section-container">
            <h2 class="section-title">Key <span>Features</span></h2>
            <div class="features-showcase">
                <div class="feature-highlight">
                    <div class="feature-icon"><i class="fas fa-server"></i></div>
                    <h3>Server-Side Scripting</h3>
                    <p>PHP executes on the server, generating HTML which is sent to the client.</p>
                </div>
                <div class="feature-highlight">
                    <div class="feature-icon"><i class="fas fa-database"></i></div>
                    <h3>Database Integration</h3>
                    <p>Supports MySQL, PostgreSQL, MongoDB, and more with native drivers.</p>
                </div>
                <div class="feature-highlight">
                    <div class="feature-icon"><i class="fas fa-box-open"></i></div>
                    <h3>Rich Ecosystem</h3>
                    <p>Composer, Packagist, and thousands of open source packages.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frameworks -->
    <section class="content-section">
        <div class="section-container">
            <h2 class="section-title">Popular <span>Frameworks</span></h2>
            <div class="framework-carousel">
                <div class="framework-card">
                    <div class="framework-logo laravel">
                        <i class="fab fa-laravel"></i>
                    </div>
                    <h3>Laravel</h3>
                    <p>The most popular PHP framework with elegant syntax and robust features.</p>
                </div>
                <div class="framework-card">
                    <div class="framework-logo symfony">
                        <i class="fab fa-symfony"></i>
                    </div>
                    <h3>Symfony</h3>
                    <p>A set of reusable PHP components and a web application framework.</p>
                </div>
                <div class="framework-card">
                    <div class="framework-logo codeigniter">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>CodeIgniter</h3>
                    <p>A powerful PHP framework with a very small footprint.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="content-card glass-card">
    <h2>Client-Server Architecture</h2>
    <p>In web development, the client-server model consists of:</p>
    <ul>
        <li><strong>Client:</strong> Typically a web browser (Chrome, Firefox) that sends HTTP requests</li>
        <li><strong>Server:</strong> A computer running web server software (Apache, Nginx) that processes requests and sends responses</li>
    </ul>
    <div class="architecture-diagram">
        <div class="client">Client (Browser)</div>
        <div class="arrow">⇄ HTTP Request/Response ⇄</div>
        <div class="server">Web Server (Apache/Nginx)</div>
        <div class="arrow">⇄ Database Queries ⇄</div>
        <div class="database">Database (MySQL)</div>
    </div>
</div>

<div class="content-card glass-card">
    <h2>Web Pages: Static vs Dynamic</h2>
    
    <h3>Static Web Pages</h3>
    <ul>
        <li>Pre-built HTML files stored on server</li>
        <li>Content remains the same for all users</li>
        <li>Example: Basic brochure websites</li>
    </ul>
    
    <h3>Dynamic Web Pages</h3>
    <ul>
        <li>Generated on-the-fly by server-side scripts (PHP)</li>
        <li>Content can change based on user input/database</li>
        <li>Example: Social media sites, e-commerce</li>
    </ul>
</div>

<div class="timeline-item">
    <div class="timeline-date">1994</div>
    <div class="timeline-content glass-card">
        <h3>PHP/FI Created</h3>
        <p>Rasmus Lerdorf creates Personal Home Page Tools (PHP Tools) for tracking visits to his online resume</p>
    </div>
</div>
<div class="timeline-item">
    <div class="timeline-date">1997</div>
    <div class="timeline-content glass-card">
        <h3>PHP 3.0</h3>
        <p>Andi Gutmans and Zeev Suraski rewrite the parser, forming the base of modern PHP</p>
    </div>
</div>
<div class="timeline-item">
    <div class="timeline-date">2004</div>
    <div class="timeline-content glass-card">
        <h3>PHP 5</h3>
        <p>Introduction of robust OOP support with Zend Engine II</p>
    </div>
</div>
<div class="timeline-item">
    <div class="timeline-date">2020</div>
    <div class="timeline-content glass-card">
        <h3>PHP 8.0</h3>
        <p>JIT compilation, named arguments, attributes, and union types</p>
    </div>
</div>

<div class="content-card glass-card">
    <h2>MySQL & PHP: Perfect Partners</h2>
    <p><strong>MySQL History:</strong></p>
    <ul>
        <li>Created in 1995 by Michael Widenius</li>
        <li>Open-source relational database system</li>
        <li>Acquired by Oracle in 2010</li>
    </ul>
    
    <p><strong>Why MySQL fits PHP:</strong></p>
    <ul>
        <li>Native PHP support through mysqli and PDO extensions</li>
        <li>LAMP stack compatibility (Linux, Apache, MySQL, PHP)</li>
        <li>Excellent performance for web applications</li>
        <li>Simple to install and configure with PHP</li>
    </ul>
</div>


<div class="features-grid">
    <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-server"></i></div>
        <h3>Web Server</h3>
        <p>Handles HTTP requests (Apache, Nginx)</p>
        <ul>
            <li>Serves static content</li>
            <li>Passes dynamic requests to app server</li>
        </ul>
    </div>
    <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-code"></i></div>
        <h3>Application Server</h3>
        <p>Executes business logic (PHP-FPM)</p>
        <ul>
            <li>Processes PHP scripts</li>
            <li>Connects to databases</li>
        </ul>
    </div>
</div>


<div class="content-card glass-card">
    <h2>Installing PHP</h2>
    <h3>Windows:</h3>
    <ol>
        <li>Download from <a href="https://windows.php.net/download/">windows.php.net</a></li>
        <li>Add PHP directory to system PATH</li>
        <li>Configure php.ini file</li>
    </ol>
    
    <h3>Linux (Ubuntu):</h3>
    <pre><code>sudo apt update
sudo apt install php libapache2-mod-php php-mysql</code></pre>
    
    <h3>macOS:</h3>
    <pre><code>brew install php</code></pre>
</div>


<div class="content-card glass-card">
    <h2>Server Management</h2>
    
    <h3>Windows (XAMPP):</h3>
    <ul>
        <li><strong>Start:</strong> Use XAMPP Control Panel</li>
        <li><strong>Stop:</strong> Click "Stop" for Apache/MySQL</li>
    </ul>
    
    <h3>Linux:</h3>
    <pre><code># Start
sudo systemctl start apache2
sudo systemctl start mysql

# Stop
sudo systemctl stop apache2
sudo systemctl stop mysql

# Check status
sudo systemctl status apache2</code></pre>
</div>

<div class="content-card glass-card">
    <h2>Configuring phpMyAdmin</h2>
    <ol>
        <li>Install: <code>sudo apt install phpmyadmin</code></li>
        <li>Link to Apache: <code>sudo ln -s /usr/share/phpmyadmin /var/www/html</code></li>
        <li>Access at <code>http://localhost/phpmyadmin</code></li>
        <li>Secure with: <code>sudo mysql_secure_installation</code></li>
    </ol>
    
    <h3>Testing MySQL:</h3>
    <ol>
        <li>Login to phpMyAdmin</li>
        <li>Create new database</li>
        <li>Run test query: <code>SELECT version();</code></li>
    </ol>
</div>


<div class="content-card glass-card">
    <h2>Setting Up Xdebug</h2>
    <ol>
        <li>Install: <code>pecl install xdebug</code></li>
        <li>Add to php.ini:
            <pre>[xdebug]
zend_extension="xdebug.so"
xdebug.mode=debug
xdebug.client_host=localhost
xdebug.client_port=9003</pre>
        </li>
        <li>Restart Apache: <code>sudo systemctl restart apache2</code></li>
    </ol>
</div>


<div class="content-card glass-card">
    <h2>Recommended Text Editors</h2>
    <div class="editor-grid">
        <div class="editor-card">
            <h3>VS Code</h3>
            <p><a href="https://code.visualstudio.com/">Download</a> and install PHP Intelephense extension</p>
        </div>
        <div class="editor-card">
            <h3>PHPStorm</h3>
            <p>Premium IDE with excellent PHP support</p>
        </div>
    </div>
</div>

<div class="content-card glass-card">
    <h2>Verifying Your Setup</h2>
    <ol>
        <li>PHP: Create <code>info.php</code> with <code>&lt;?php phpinfo(); ?></code></li>
        <li>Apache: Access <code>http://localhost</code></li>
        <li>MySQL: Run <code>mysql -u root -p</code> in terminal</li>
        <li>phpMyAdmin: Verify login at <code>http://localhost/phpmyadmin</code></li>
    </ol>
</div>

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