<?php
$current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == '') $current_page = 'index.php';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENTUS Cactus Shop</title>
    <!-- นำเข้าฟอนต์ Itim และ Kanit จาก Google Fonts ให้เหมือนใน PDF -->
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a3b2b; /* สีเขียวเข้มแบบ MENTUS */
            --secondary-color: #2c5e43;
            --bg-color: #112b1a;
            --text-color: #f4f6f5;
        }
        
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body {
            font-family: 'Kanit', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        h1, h2, h3, .nav-links a, .logo {
            font-family: 'Itim', cursive;
        }

        /* Navbar */
        nav {
            background-color: var(--bg-color);
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            flex-wrap: wrap;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        .logo { font-size: 28px; color: white; font-weight: bold; text-decoration: none; }
        
        .nav-links { display: flex; gap: 25px; flex-wrap: wrap; align-items: center; }
        .nav-links a { 
            text-decoration: none; 
            color: rgba(255,255,255,0.8); 
            font-size: 18px; 
            transition: 0.3s; 
            position: relative;
            padding: 5px 0;
        }
        .nav-links a:hover { color: white; }
        
        /* Active State for normal links */
        .nav-links a.active { color: white; font-weight: bold; }
        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 2px;
            background-color: #4caf50;
            border-radius: 2px;
        }

        /* Button styling */
        .btn-contact { 
            background-color: #0b451d; 
            padding: 8px 25px !important; 
            border-radius: 25px; 
            color: white !important; 
            transition: 0.3s;
        }
        .btn-contact:hover { 
            background-color: #146c2e; 
            transform: translateY(-2px);
        }
        .btn-contact.active-btn { 
            background-color: #146c2e; 
            font-weight: bold;
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.4);
        }
        .btn-contact.active-btn::after {
            content: '';
            position: absolute;
            bottom: -6px; /* ขยับเส้นลงมาใต้ปุ่ม */
            left: 50%;
            transform: translateX(-50%);
            width: 50%; /* ให้เส้นสั้นกว่าความกว้างปุ่มนิดหน่อย */
            height: 2px;
            background-color: #4caf50;
            border-radius: 2px;
            background-color: #4caf50;
            border-radius: 2px;
            display: block;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .delay-1 { transition-delay: 100ms; }
        .delay-2 { transition-delay: 200ms; }
        .delay-3 { transition-delay: 300ms; }

        .menu-toggle { display: none; flex-direction: column; cursor: pointer; gap: 5px; }
        .menu-toggle .bar { width: 25px; height: 3px; background-color: white; border-radius: 3px; transition: 0.3s; }

        /* Hero Section */
        .hero-slider-container {
            position: relative; 
            width: 100%; 
            height: 400px; 
            overflow: hidden; 
            border-radius: 20px;
        }
        .hero {
            background: linear-gradient(rgba(26, 59, 43, 0.7), rgba(26, 59, 43, 0.7)), url('https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .hero h1 { font-size: 48px; margin-bottom: 10px; }
        .hero p { font-size: 20px; max-width: 600px; margin: 0 auto; }

        /* General Section Layout */
        .section { padding: 40px 5%; max-width: 1200px; margin: auto; }
        .section-title { text-align: center; color: var(--primary-color); font-size: 36px; margin-bottom: 25px; }

        /* Product Grid (Responsive 1-3 columns) */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            text-align: center;
        }
        .card:hover { 
            transform: translateY(-10px); 
            box-shadow: 0 15px 30px rgba(0,0,0,0.3); 
        }
        .card img { width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s ease; }
        .card:hover img { transform: scale(1.05); }
        .card-body { padding: 20px; }
        .price { color: #d9534f; font-size: 24px; font-weight: bold; margin: 15px 0; }

        /* About & Articles */
        .about-text, .article-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }
        
        .article-box h3 { color: var(--secondary-color); margin-bottom: 10px; font-size: 22px; }

        /* Contact Form */
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .contact-info { background: var(--primary-color); color: white; padding: 40px; border-radius: 15px; }
        .contact-info h3 { font-size: 28px; margin-bottom: 20px; }
        .contact-info p { font-size: 18px; margin-bottom: 10px; }
        
        form { display: flex; flex-direction: column; gap: 15px; }
        input, textarea {
            width: 100%; padding: 15px; border: 1px solid #ccc; border-radius: 8px; font-family: inherit;
        }
        button {
            background: var(--primary-color); color: white; border: none; padding: 15px; border-radius: 8px;
            font-size: 18px; font-family: 'Itim', cursive; cursor: pointer; transition: 0.3s;
        }
        button:hover { background: var(--secondary-color); }

        /* Footer */
        footer {
            background: var(--primary-color); color: white; text-align: center; padding: 40px 20px 20px;
        }
        .features { display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-bottom: 30px; }
        .features span { background: rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 20px; }

        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .menu-toggle { display: flex; }
            .nav-links { 
                display: none; 
                flex-direction: column; 
                width: 100%; 
                text-align: center; 
                gap: 20px;
                position: absolute;
                top: 100%;
                left: 0;
                padding: 20px 0;
                background: rgba(17, 43, 26, 0.95);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            }
            .nav-links.show-menu { display: flex; }
            .hero-slider-container { height: 250px; }
            .hero h1 { font-size: 36px; }
            .section { padding: 25px 5%; }
            .card img { height: 200px; }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <a href="index.php" class="logo"><img src="photo/logo.png" alt="MENTUS" style="height: 50px; vertical-align: middle; border-radius: 50%;"> MENTUS</a>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="nav-links">
            <a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">หน้าแรก</a>
            <a href="products.php" class="<?= ($current_page == 'products.php') ? 'active' : '' ?>">สินค้า</a>
            <a href="article.php" class="<?= ($current_page == 'article.php') ? 'active' : '' ?>">บทความ</a>
            <a href="about.php" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">เกี่ยวกับเรา</a>
            <a href="contact.php" class="btn-contact <?= ($current_page == 'contact.php') ? 'active-btn' : '' ?>">ติดต่อเรา</a>
        </div>
    </nav>

    <!-- Scroll Animation & Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile Menu
            const mobileMenu = document.getElementById('mobile-menu');
            const navLinks = document.querySelector('.nav-links');
            if(mobileMenu) {
                mobileMenu.addEventListener('click', () => {
                    navLinks.classList.toggle('show-menu');
                });
            }

            // Scroll Animation
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
        });
    </script>
