<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team | PHP Revolution</title>
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
                <li><a href="about.php"><i class="fas fa-code"></i> About PHP</a></li>
                <li><a href="members.php" class="active"><i class="fas fa-users"></i> Members</a></li>
                <!-- <li><a href="#" class="cta-nav"><i class="fas fa-rocket"></i> Get Started</a></li> -->
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="page-hero">
        <div class="hero-content">
            <h1>Meet Our <span>Team</span></h1>
            <p>The brilliant minds behind our PHP expertise</p>
        </div>
        <div class="hero-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
    </section>

    <!-- Members Grid -->
    <section class="content-section">
        <div class="section-container">
            <div class="team-grid">
                <?php
                // Sample member data
                $members = [
                    [
                        'name' => 'Bosah Joy Uchechi',
                        'role' => 'Lead Developer',
                        'matric' => 'F/HD/23/3210058',
                        'image' => '/images/5940692219029736562.jpg',
                        'social' => [
                            'twitter' => '#',
                            'github' => '#',
                            'linkedin' => 'https://www.linkedin.com/in/joy-bosah-52553b248'
                        ],
                        'skills' => ['Copy editor', 'Social Media Manager', 'Junior web developer']
                    ],
                    [
                        'name' => 'Fashogbon Oluwatobiloba Daniel',
                        'role' => 'Full Stack Developer',
                        'matric' => 'F/HD/23/3210084',
                        'image' => '/images/f8492cb2-8185-4bce-954d-136659fdff0c.jpg',
                        'social' => [
                            'twitter' => 'https://x.com/fashtech_autos?s=21',
                            'github' => 'https://github.com/Oluwatobiloba20',
                            'linkedin' => 'https://www.linkedin.com/in/fashogbon-oluwatobiloba-2a18b21b2/'
                        ],
                        'skills' => ['HTML', 'CSS', 'JavaScript', 'C#', 'Entrepreneur', 'Car Dealer']
                    ],
                    [
                        'name' => 'Obamoh Modupe Rejoice',
                        'role' => 'Business analyst',
                        'matric' => 'F/HD/23/3210049',
                        'image' => '/images/5940692219029736563.jpg',
                        'social' => [
                            'twitter' => '#',
                            'github' => '#',
                            'linkedin' => '#'
                        ],
                        'skills' => ['UI/UX', 'Product Manager', 'Business analyst']
                    ],
                    [
                        'name' => 'Jimoh Abdulgafar Olaitan',
                        'role' => 'UI/UX Designer',
                        'matric' => 'F/HD/23/3210143',
                        'image' => 'images/cb0b453b-2af9-4b17-a812-80e1f9fedf82.jpg',
                        'social' => [
                            'twitter' => 'https://x.com/moore__g?s=11&t=_L--Oyl2Z7pW4eps0BUNnQ',
                            'github' => '#',
                            'linkedin' => 'https://www.linkedin.com/in/jimoh-gafar-63a51627a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app'
                        ],
                        'skills' => ['Figma', 'Photoshop', 'Coreldraw', 'Adobe Illustrator']
                    ],
                    [
                        'name' => 'Enunweninka Benedict Ovie',
                        'role' => 'Product Manager',
                        'matric' => 'F/HD/23/3210118',
                        'image' => 'images/63692457-5feb-4be0-b7b2-e44e7536d2bf.jpg',
                        'social' => [
                            'twitter' => '#',
                            'github' => '#',
                            'linkedin' => '#'
                        ],
                        'skills' => ['Banker', 'Naval H.O', 'Product Manager']
                    ],
                    [
                        'name' => 'Oluwatobi Gbenga Michael',
                        'role' => 'Quality Assurance',
                        'matric' => 'F/HD/23/3210131',
                        'image' => 'images/fa577d9c-efed-46bc-bb1c-b85b14674df2.jpg',
                        'social' => [
                            'twitter' => 'https://x.com/OluwatobiO95972?t=bokABD6QGFRnUSkONXh3hQ&s=08',
                            'github' => '#',
                            'linkedin' => '#'
                        ],
                        'skills' => ['Tester', 'Massage Therapist', 'coaching', 'Business Developer' ]
                    ],
                    [
                        'name' => 'Onyeche Micheal Chidi ',
                        'role' => 'Graphic Designer',
                        'matric' => 'F/HD/23/3210033',
                        'image' => 'images/15b6d518-ad19-4fec-8f45-39d2bf13d3c5.jpg',
                        'social' => [
                            'twitter' => 'https://x.com/mikewandeboyz?s=21&t=0Nak33aETV1hQE4u_YFrVg',
                            'github' => '#',
                            'linkedin' => '#'
                        ],
                        'skills' => ['Graphics Designer', 'Programmer', 'Real Estate Agent', 'Forex trader ']
                    ]
                ];

                foreach ($members as $member) {
                    echo '<div class="team-card">';
                    echo '<div class="card-inner">';
                    echo '<div class="card-front">';
                    echo '<div class="member-image" style="background-image: url('.$member['image'].')"></div>';
                    echo '<div class="member-info">';
                    echo '<h3>'.$member['name'].'</h3>';
                    echo '<p class="role">'.$member['role'].'</p>';
                    echo '<p class="matric">'.$member['matric'].'</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="card-back">';
                    echo '<div class="member-skills">';
                    echo '<h4>Skills</h4>';
                    echo '<ul>';
                    foreach ($member['skills'] as $skill) {
                        echo '<li>'.$skill.'</li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                    echo '<div class="member-social">';
                    echo '<a href="'.$member['social']['twitter'].'" target="_blank"><i class="fab fa-twitter"></i></a>';
                    echo '<a href="'.$member['social']['github'].'" target="_blank"><i class="fab fa-github"></i></a>';
                    echo '<a href="'.$member['social']['linkedin'].'" target="_blank"><i class="fab fa-linkedin"></i></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Join Team CTA -->
    <!-- <section class="cta-section">
        <div class="cta-container glass-card">
            <h2>Want to Join Our Team?</h2>
            <p>We're always looking for talented PHP developers to join our revolution</p>
            <a href="#" class="btn-primary pulse">Apply Now</a>
        </div>
    </section> -->

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