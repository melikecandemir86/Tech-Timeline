<?php
/* Proje: Tech-Timeline (Dijital Müze) 
   Kurum: Ahi Evran Üniversitesi
   Geliştirici: Melike Candemir
*/
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech-Timeline | Ahi Evran Üniversitesi Dijital Müze</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo">
                <span class="logo-icon">⚙️</span>
                <div class="logo-text">
                    <h1>TECH-TIMELINE</h1>
                    <p>Dijital Müze</p>
                </div>
            </div>
            
            <nav class="navigation">
                <ul>
                    <li><a href="index.php" class="nav-link active">Ana Sayfa</a></li>
                    <li><a href="pages/zaman-tuneli.php" class="nav-link">Zaman Tüneli</a></li>
                    <li><a href="pages/icatlar.php" class="nav-link">İcatlar</a></li>
                    <li><a href="pages/iletisim.php" class="nav-link">İletişim</a></li>
                </ul>
            </nav>

            <div class="university-logo">
                <img src="assets/img/aeu-logo.png" alt="Ahi Evran Üniversitesi">
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h2 class="hero-title">Teknoloji Tarihinin Yolculuğuna Hoş Geldiniz</h2>
                <p class="hero-subtitle">Geçmişten geleceğe uzanan dijital bir yolculuk. İnsanlığın en büyük buluşlarını keşfedin.</p>
                <div class="hero-buttons">
                    <a href="pages/zaman-tuneli.php" class="btn btn-primary">Keşfetmeye Başla</a>
                    <a href="pages/iletisim.php" class="btn btn-secondary">Bize Ulaşın</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="floating-element element-1">
                    <svg width="120" height="120" viewBox="0 0 120 120">
                        <circle cx="60" cy="60" r="55" fill="none" stroke="#FFB81C" stroke-width="2" opacity="0.5"/>
                        <circle cx="60" cy="60" r="45" fill="none" stroke="#00592D" stroke-width="2" opacity="0.5"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="innovations">
        <div class="section-header">
            <h2>Öne Çıkan İcatlar</h2>
        </div>
        <div class="cards-grid">
            <div class="card innovation-card">
                <div class="card-header"><span class="card-icon">💻</span><span class="card-year">1950'ler</span></div>
                <h3>Bilgisayarların Doğuşu</h3>
                <p>ENIAC'tan günümüze uzanan işlem gücü yolculuğu.</p>
                <div class="card-footer"><a href="pages/icatlar.php" class="card-link">Detaylar →</a></div>
            </div>
            </div>
    </section>

    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; 2026 Tech-Timeline | Melike Candemir - Ahi Evran Üniversitesi</p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
