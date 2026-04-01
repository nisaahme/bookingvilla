<?php 
    include 'includes/header.php'; 
    include 'includes/nav.php'; 
?>

<header class="hero">
    <div class="hero-body" data-aos="fade-up">
        <div style="color:#f1c40f; font-size:25px; margin-bottom: 15px;">★★★★★</div>
        <h1>LARITA LUXURY HOTEL</h1>
        <p style="font-size: 16px; opacity: 0.9; letter-spacing: 2px; text-transform: uppercase;">
            The most prestigious stay in Pristina.
        </p>
        <br><br>
        <a href="#about" class="explore">EXPLORE OUR WORLD &rarr;</a>
    </div>
</header>

<section id="story" class="story-box" data-aos="zoom-in">
    <span class="gold-txt">TRADITION SINCE 1970</span>
    <h2 style="color: white;">HOW LARITA BEGAN</h2>
    <p style="max-width: 800px; margin: 0 auto; color: #bbb; line-height: 2; font-size: 16px; font-weight: 300;">
        Ideja për LARITA lindi nga pasioni për mikpritjen klasike evropiane. 
        Gjithçka nisi si një vilë e vogël me 5 dhoma, ku qëllimi ishte që çdo mysafir 
        të ndihej si mbret. Sot, pas 54 viteve shërbim të palodhur, ne jemi shndërruar 
        në simbolin e luksit dhe elegancës.
    </p>
</section>

<section id="about" class="welcome">
    <div class="welcome-imgs" data-aos="fade-right">
        <img src="interior1.jpg" alt="Interior 1">
        <img src="interior2.jpg" alt="Interior 2">
    </div>

    <div class="welcome-info" data-aos="fade-left">
        <span class="gold-txt">WELCOME TO LUXURY</span>
        <h2>A stay that speaks<br>for itself.</h2>
        <p style="color:#666; line-height:1.9; margin-bottom: 25px;">
            Larita Luxury Hotel nuk është thjesht një hotel. Është një destinacion ku modernia 
            takohet me klasiken.
        </p>
        <a href="#" class="res-btn" style="padding: 18px 45px;">READ MORE &rarr;</a>
    </div>
</section>

<section id="rooms" class="rooms">
    <span class="gold-txt">EXQUISITE SELECTION</span>
    <h2>Rooms & Suites</h2>
    
    <div class="room-card" data-aos="flip-up">
        <div class="room-desc">
            <span style="color:#888; font-size:12px; text-transform: uppercase;">Starting from:</span>
            <div style="font-size:35px; font-weight:700; color:#1a1a1a; margin-bottom:20px;">$210</div>
            <h3>Standard Luxury Room</h3>
            <p style="color:#777; margin-bottom: 30px;">
                Një ndërthurje e komoditetit dhe stilit modern.
            </p>
            <div style="display:flex; gap:15px;">
                <button class="res-btn">BOOK NOW</button>
            </div>
        </div>
        <div class="room-img-container">
            <img src="room1.jpg" alt="Room Interior">
        </div>
    </div>
</section>

<section class="facilities">
    <span class="gold-txt">AMENITIES</span>
    <h2>World Class Facilities</h2>
    <div class="fac-grid">
        <div class="fac-item" data-aos="fade-up" data-aos-delay="100">
            <div style="font-size:45px; margin-bottom:20px;">📶</div>
            <h4>Ultra-Fast Wifi</h4>
            <p>Qëndroni të lidhur në çdo cep.</p>
        </div>
        <div class="fac-item" data-aos="fade-up" data-aos-delay="200">
            <div style="font-size:45px; margin-bottom:20px;">🅿️</div>
            <h4>Private Parking</h4>
            <p>Parkim i sigurt 24 orë.</p>
        </div>
        <div class="fac-item" data-aos="fade-up" data-aos-delay="300">
            <div style="font-size:45px; margin-bottom:20px;">🍽️</div>
            <h4>Gourmet Dining</h4>
            <p>Shijoni pjatat unike.</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>