<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakistan Explorer</title>
    <link rel="stylesheet" href="HOME PAGE STYLE.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap">
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="HEADER-CONTAINER">
            <div class="LOGO">
                <i class="fas fa-mountain-sun"></i>
                <h1>Pakistan Explorer</h1>
            </div>
            <p class="TAGLINE">Discover the Land of Beauty, Hospitality and Adventure</p>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        <div class="CONTAINER">
            <!-- HERO SECTION -->
            <section class="HERO-SECTION">
                <div class="HERO-CONTENT">
                    <h2>Experience the Magic of Pakistan</h2>
                    <p>From majestic mountains to ancient ruins, discover Pakistan's diverse attractions.</p>
                    <div class="HERO-BUTTONS">
                        <button id="COLOR-BUTTON" class="CTA-BUTTON"><i class="fas fa-palette"></i> CHANGE COLOR</button>
                        <button class="CTA-BUTTON SECONDARY"><i class="fas fa-compass"></i> EXPLORE NOW</button>
                    </div>
                </div>
                <div class="HERO-STATS">
                    <div class="STAT"><i class="fas fa-mountain"></i><h3>8+</h3><p>MOUNTAIN RANGES</p></div>
                    <div class="STAT"><i class="fas fa-landmark"></i><h3>100+</h3><p>HISTORICAL SITES</p></div>
                    <div class="STAT"><i class="fas fa-tree"></i><h3>50+</h3><p>NATIONAL PARKS</p></div>
                    <div class="STAT"><i class="fas fa-utensils"></i><h3>200+</h3><p>TRADITIONAL DISHES</p></div>
                </div>
            </section>

            <!-- INTRODUCTION -->
            <section class="CONTENT-SECTION">
                <div class="SECTION-HEADER">
                    <i class="fas fa-compass section-icon"></i>
                    <h2>INTRODUCTION</h2>
                    <div class="SECTION-LINE"></div>
                </div>
                <div class="CONTENT-CARD">
                    <p id="PARAGRAPH">WELCOME TO <span class="HIGHLIGHT">PAKISTAN EXPLORATION</span>! Discover hidden beauty, rich culture, and breathtaking landscapes of Pakistan.</p>
                    <p>Whether you're an adventurer, history lover, or simply curious, discover the true essence of Pakistan with us.</p>
                    <div class="FEATURES">
                        <div class="FEATURE"><i class="fas fa-hiking"></i><span>Adventure Tours</span></div>
                        <div class="FEATURE"><i class="fas fa-history"></i><span>Cultural Heritage</span></div>
                        <div class="FEATURE"><i class="fas fa-utensils"></i><span>Local Cuisine</span></div>
                        <div class="FEATURE"><i class="fas fa-hotel"></i><span>Best Stays</span></div>
                    </div>
                </div>
            </section>

            <!-- TEAM -->
            <section class="CONTENT-SECTION">
                <div class="SECTION-HEADER">
                    <i class="fas fa-users section-icon"></i>
                    <h2>OUR TEAM</h2>
                    <div class="SECTION-LINE"></div>
                </div>
                <div class="CONTENT-CARD">
                    <p class="TEAM-INTRO">Meet our passionate team:</p>
                    <div class="TEAM-MEMBERS">
                        <div class="MEMBER-CARD">
                            <div class="MEMBER-AVATAR"><i class="fas fa-user-circle"></i></div>
                            <h3>Khadija Alvi</h3>
                            <p class="MEMBER-ROLE">Project Lead</p>
                            <div class="MEMBER-SKILLS"><span>Web Design</span><span>Research</span></div>
                        </div>
                        <div class="MEMBER-CARD">
                            <div class="MEMBER-AVATAR"><i class="fas fa-user-circle"></i></div>
                            <h3>Rabia Ozair</h3>
                            <p class="MEMBER-ROLE">Content Creator</p>
                            <div class="MEMBER-SKILLS"><span>Content</span><span>Photography</span></div>
                        </div>
                        <div class="MEMBER-CARD">
                            <div class="MEMBER-AVATAR"><i class="fas fa-user-circle"></i></div>
                            <h3>Abeera Amjad</h3>
                            <p class="MEMBER-ROLE">UI/UX Designer</p>
                            <div class="MEMBER-SKILLS"><span>UI Design</span><span>Graphics</span></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- GALLERY -->
            <section class="CONTENT-SECTION">
                <div class="SECTION-HEADER">
                    <i class="fas fa-images section-icon"></i>
                    <h2>PHOTO GALLERY</h2>
                    <div class="SECTION-LINE"></div>
                </div>
                <p class="GALLERY-INTRO">A glimpse of Pakistan's beauty</p>
                
                <div class="COMPACT-GALLERY">
                    <div class="COMPACT-ROW">
                        <div class="COMPACT-ITEM" data-index="0">
                            <div class="COMPACT-IMAGE"><img src="PAKISTAN.jpg" alt="Pakistan" loading="lazy"></div>
                            <div class="COMPACT-LABEL">PAKISTAN</div>
                        </div>
                        <div class="COMPACT-ITEM" data-index="1">
                            <div class="COMPACT-IMAGE"><img src="KOTDIJI.jpg" alt="Kot Diji" loading="lazy"></div>
                            <div class="COMPACT-LABEL">SINDH</div>
                        </div>
                        <div class="COMPACT-ITEM" data-index="2">
                            <div class="COMPACT-IMAGE"><img src="PUNJAB.jpg" alt="Punjab" loading="lazy"></div>
                            <div class="COMPACT-LABEL">PUNJAB</div>
                        </div>
                        <div class="COMPACT-ITEM" data-index="3">
                            <div class="COMPACT-IMAGE"><img src="KPK.jpg" alt="KPK" loading="lazy"></div>
                            <div class="COMPACT-LABEL">KPK</div>
                        </div>
                    </div>
                    <div class="COMPACT-ROW">
                        <div class="COMPACT-ITEM" data-index="4">
                            <div class="COMPACT-IMAGE"><img src="BALOCHISTAN.jpg" alt="Balochistan" loading="lazy"></div>
                            <div class="COMPACT-LABEL">BALOCHISTAN</div>
                        </div>
                        <div class="COMPACT-ITEM" data-index="5">
                            <div class="COMPACT-IMAGE"><img src="GILGIT.jpg" alt="Gilgit" loading="lazy"></div>
                            <div class="COMPACT-LABEL">GILGIT</div>
                        </div>
                        <div class="COMPACT-ITEM" data-index="6">
                            <div class="COMPACT-IMAGE"><img src="ISLAMABAD.jpg" alt="Islamabad" loading="lazy"></div>
                            <div class="COMPACT-LABEL">ISLAMABAD</div>
                        </div>
                        <div class="COMPACT-ITEM" data-index="7">
                            <div class="COMPACT-IMAGE"><img src="KASHMIR.jpg" alt="Kashmir" loading="lazy"></div>
                            <div class="COMPACT-LABEL">KASHMIR</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- SIMPLE FOOTER -->
    <footer class="SIMPLE-FOOTER">
        <p>© <?php echo date('Y') Pakistan Explorer | Created by: Khadija Alvi, Rabia Ozair, Abeera Amjad</p>
        <p>Karachi, Pakistan | info@pakistanexplorer.com</p>
        <a href="Links.html">Quick Links</a>
    </footer>

    <!-- BASIC JAVASCRIPT -->
    <script>
        document.getElementById("COLOR-BUTTON").onclick = function() {
            const colors = ["#f8f9fa", "#fff0f5", "#f0fff0", "#f0f8ff", "#fffaf0"];
            document.body.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        };
    </script>
</body>
</html>




