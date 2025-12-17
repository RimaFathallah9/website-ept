<?php get_header(); ?>

<main id="main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">We Are IEEE EPT Student Branch</h1>
            <p class="hero-subtitle">The largest Student Branch in Tunisia Section as well as Region 8. Fostering technological innovation and excellence.</p>
            <a href="#about" class="hero-btn">Discover More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="about-content">
            <h2 class="section-title">About Us</h2>
            <div class="about-text">
                <p>
                    IEEE EPT Student Branch is the largest SB in Tunisia Section as well as Region 8. 
                    Founded in 2017, IEEE EPT Student Branch made its way to being ranked as the largest Student Branch 
                    in Tunisia Section as well as the Region 8.
                </p>
                <p>
                    It includes 3 technical chapters (CS, SMCS) alongside one affinity group (WIE).
                    We are dedicated to advancing technology for the benefit of humanity.
                </p>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section" style="background-color: var(--ieee-dark-blue); color: white; padding: 4rem 2rem;">
        <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; max-width: 1200px; margin: 0 auto; text-align: center;">
            <div class="stat-item">
                <h3 style="font-size: 3rem; color: var(--ieee-yellow); margin-bottom: 0.5rem;">+1200</h3>
                <p style="font-size: 1.2rem; text-transform: uppercase; font-weight: bold;">Active Members</p>
            </div>
            <div class="stat-item">
                <h3 style="font-size: 3rem; color: var(--ieee-yellow); margin-bottom: 0.5rem;">+50</h3>
                <p style="font-size: 1.2rem; text-transform: uppercase; font-weight: bold;">Awards</p>
            </div>
            <div class="stat-item">
                <h3 style="font-size: 3rem; color: var(--ieee-yellow); margin-bottom: 0.5rem;">+100</h3>
                <p style="font-size: 1.2rem; text-transform: uppercase; font-weight: bold;">Events</p>
            </div>
            <div class="stat-item">
                <h3 style="font-size: 3rem; color: var(--ieee-yellow); margin-bottom: 0.5rem;">5</h3>
                <p style="font-size: 1.2rem; text-transform: uppercase; font-weight: bold;">Units</p>
            </div>
        </div>
    </section>

    <!-- Units/Chapters Section -->
    <section class="units-section">
        <div class="header-container" style="text-align:center; padding-bottom: 2rem;">
            <h2 class="section-title">Our Units</h2>
        </div>
        
        <div class="units-grid">
            <div class="unit-card">
                <h3>CS Chapter</h3>
                <p>Computer Society</p>
            </div>
            <div class="unit-card">
                <h3>SMCS Chapter</h3>
                <p>Systems, Man, and Cybernetics Society</p>
            </div>
            <div class="unit-card">
                <h3>WIE Affinity Group</h3>
                <p>Women in Engineering</p>
            </div>
        </div>
    </section>

    <!-- ExCom Section -->
    <section class="excom-section" style="padding: 4rem 2rem; background-color: #f9f9f9;">
        <div class="header-container" style="text-align:center; padding-bottom: 2rem;">
            <h2 class="section-title">Executive Committee</h2>
        </div>
        <div class="excom-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; max-width: 1200px; margin: 0 auto;">
            <!-- Member 1 -->
            <div class="excom-member" style="text-align: center;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/board/member1.jpg" alt="Taysir Rezgui" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin-bottom: 1rem;">
                <h3>Taysir Rezgui</h3>
                <p style="color: #666;">Counselor</p>
                <a href="mailto:taysir.rezgui@ieee.org">taysir.rezgui@ieee.org</a>
            </div>
            <!-- Member 2 -->
            <div class="excom-member" style="text-align: center;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/board/member2.jpg" alt="Ahmed Kaffel" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin-bottom: 1rem;">
                <h3>Ahmed Kaffel</h3>
                <p style="color: #666;">Chair</p>
                <a href="mailto:ahmed.kaffel@ieee.org">ahmed.kaffel@ieee.org</a>
            </div>
            <!-- Member 3 -->
            <div class="excom-member" style="text-align: center;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/board/member3.jpg" alt="Nour Ben Amor" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin-bottom: 1rem;">
                <h3>Nour Ben Amor</h3>
                <p style="color: #666;">Vice-chair</p>
                <a href="mailto:nour.benamor@ieee.org">nour.benamor@ieee.org</a>
            </div>
            <!-- Member 4 -->
            <div class="excom-member" style="text-align: center;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/board/member4.jpg" alt="Wiem Aouadi" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin-bottom: 1rem;">
                <h3>Wiem Aouadi</h3>
                <p style="color: #666;">Treasurer</p>
                <a href="mailto:wiem.aouadi@ieee.org">wiem.aouadi@ieee.org</a>
            </div>
            <!-- Member 5 -->
            <div class="excom-member" style="text-align: center;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/board/member5.jpg" alt="Nidhal Ben Rejeb" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin-bottom: 1rem;">
                <h3>Nidhal Ben Rejeb</h3>
                <p style="color: #666;">Secretary</p>
                <a href="mailto:nidhal.benrejeb@ieee.org">nidhal.benrejeb@ieee.org</a>
            </div>
            <!-- Member 6 -->
            <div class="excom-member" style="text-align: center;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/board/member6.jpg" alt="Baha Fraoua" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin-bottom: 1rem;">
                <h3>Baha Fraoua</h3>
                <p style="color: #666;">Webmaster</p>
                <a href="mailto:baha.fraoua@ieee.org">baha.fraoua@ieee.org</a>
            </div>
        </div>
    </section>

    <!-- Partner Reveal Section -->
    <section class="partner-section" style="padding: 4rem 2rem; text-align: center;">
        <h2 class="section-title">Our Partners</h2>
        <div class="partner-content" style="margin-top: 2rem;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/partner1.jpg" alt="Partner Reveal" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        </div>
    </section>

    <!-- Events Section -->
    <section class="events-section" style="padding: 4rem 2rem; background-color: #f9f9f9;">
        <div class="header-container" style="text-align: center; padding-bottom: 2rem;">
            <h2 class="section-title">Latest Events</h2>
            <p>Industrial Visits & Workshops</p>
        </div>
        <div class="events-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 1.5rem; max-width: 1200px; margin: 0 auto;">
            <!-- Displaying a selection of event images -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/5.png" alt="Event" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/6.png" alt="Event" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/Mr Fakhri karray .png" alt="Event" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/Mr daminos.png" alt="Event" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
             <!-- Additional images can be added here dynamically -->
        </div>
    </section>
</main>

<?php get_footer(); ?>
