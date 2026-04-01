<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>LARITA LUXURY HOTEL</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* CSS TOTALISHT BRENDA */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Montserrat', sans-serif; }
        body { background-color: #1a1a1a; padding: 20px; }
        .wrapper { background: white; max-width: 1300px; margin: 0 auto; border-radius: 50px; overflow: hidden; }
        
        /* HERO */
        .hero { 
            height: 80vh; 
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1618773928121-c32242e63f39?w=1600');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: space-between; padding: 30px;
        }
        nav { background: white; padding: 10px 30px; border-radius: 50px; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-weight: bold; color: #333; }
        .res-btn { background: #c19d77; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-size: 12px; }
        .hero-mid { text-align: center; color: white; }
        .hero-mid h1 { font-size: 50px; font-weight: 300; letter-spacing: 5px; }

        /* WELCOME SECTION - Nga Fotoja 1 */
        .welcome { display: flex; padding: 80px 5%; gap: 40px; align-items: center; }
        .welcome-imgs { flex: 1; display: flex; gap: 10px; }
        .welcome-imgs img { width: 48%; border-radius: 10px; }
        .welcome-text { flex: 1; }
        .welcome-text h2 { font-size: 35px; margin: 15px 0; }
        .gold { color: #c19d77; font-weight: bold; }

        /* ROOMS - Nga Fotoja 3 */
        .rooms { padding: 60px 5%; background: #f9f9f9; }
        .room-card { display: flex; background: white; border: 1px solid #eee; margin-top: 30px; }
        .room-info { flex: 1; padding: 40px; }
        .room-img { flex: 1; background: url('https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800') center/cover; }
        
        /* SERVICES - Nga Fotoja 4 */
        .services { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; padding: 60px 5%; }
    </style>
</head>
<body>
    <div class="wrapper">
        <header class="hero">
            <nav>
                <div class="logo">◆ LARITA</div>
                <div style="display:flex; gap:20px; font-size:11px; font-weight:600;">
                    <span>HOME</span><span>ROOMS</span><span>EXPLORE</span><span>CONTACT</span>
                </div>
                <a href="#" class="res-btn">RESERVATION</a>
            </nav>
            <div class="hero-mid">
                <div style="color:gold;">★★★★★</div>
                <h1>LARITA LUXURY HOTEL</h1>
                <p>Located in the heart of the city.</p>
            </div>
            <div style="background:white; padding:15px; border-radius:50px; color:#333; font-size:12px; display:flex; justify-content:space-between;">
                <span>SINCE 1970 - 54 YEARS</span>
                <span><b>+6.4K</b> Bookings</span>
            </div>
        </header>

        <section class="welcome">
            <div class="welcome-imgs">
                <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=400">
                <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=400">
            </div>
            <div class="welcome-text">
                <p class="gold">WELCOME TO LARITA</p>
                <h2>Luxury hotel in the heart of the city.</h2>
                <p style="color:#666;">Experience the best stay with us.</p>
            </div>
        </section>

        <section class="rooms">
            <h2 style="text-align:center;">Room collection</h2>
            <div class="room-card">
                <div class="room-info">
                    <p>From: <b style="font-size:25px;">$210</b> /night</p>
                    <h3>Standard room</h3>
                    <p style="color:#777; margin:15px 0;">Cozy and modern stay.</p>
                    <button class="res-btn" style="border:none;">BOOK NOW</button>
                </div>
                <div class="room-img"></div>
            </div>
        </section>

        <section class="services">
            <div><b class="gold">📶</b><h4>High Speed Wifi</h4><p>Seamless access.</p></div>
            <div><b class="gold">🅿️</b><h4>Parking Space</h4><p>Secure parking.</p></div>
            <div><b class="gold">🍽️</b><h4>Restaurant</h4><p>Gourmet dishes.</p></div>
        </section>
    </div>
</body>
</html>