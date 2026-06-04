<div class="fs-menu" id="fsMenu">
    <div class="fs-left">
        <div>
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo/connectx.png') }}" 
                     alt="ConnectX Logo" 
                     class="menu-logo">
            </a>

            <div class="fs-brand-desc">
                <p>
                    ConnectX is a global creator ecosystem built to connect creators,
                    influencers, speakers, podcasters, founders, and modern digital voices
                    through meaningful collaborations, networking, and experiences.
                </p>

                <a href="{{ url('/') }}" class="fs-website-btn">
                    Explore ConnectX ↗
                </a>

                <div class="fs-socials">
                    <a href="#" class="fs-social">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="#" class="fs-social">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="#" class="fs-social">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#" class="fs-social">
                        <i class="bi bi-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="fs-right">
        <div class="fs-close" onclick="toggleMenu()">Close</div>

        <nav class="fs-nav">

            <a href="/about-us" class="fs-nav-item" onclick="toggleMenu()">
                <span class="fs-nav-name">About ConnectX</span>
                <span class="fs-nav-arrow">→</span>
                <span class="fs-nav-num">01</span>
            </a>

            <a href="#partner" class="fs-nav-item" onclick="toggleMenu()">
                <span class="fs-nav-name">Who Can Partner</span>
                <span class="fs-nav-arrow">→</span>
                <span class="fs-nav-num">02</span>
            </a>

            <a href="#how" class="fs-nav-item" onclick="toggleMenu()">
                <span class="fs-nav-name">How It Works</span>
                <span class="fs-nav-arrow">→</span>
                <span class="fs-nav-num">03</span>
            </a>

            <a href="#exp" class="fs-nav-item" onclick="toggleMenu()">
                <span class="fs-nav-name">Community & Sponsors</span>
                <span class="fs-nav-arrow">→</span>
                <span class="fs-nav-num">04</span>
            </a>

            <a href="#events" class="fs-nav-item" onclick="toggleMenu()">
                <span class="fs-nav-name">Events</span>
                <span class="fs-nav-arrow">→</span>
                <span class="fs-nav-num">05</span>
            </a>

            <a href="/contact" class="fs-nav-item" onclick="toggleMenu()">
                <span class="fs-nav-name">contact</span>
                <span class="fs-nav-arrow">→</span>
                <span class="fs-nav-num">06</span>
            </a>

        </nav>


    </div>
</div>

<header id="hdr" class="sticky-menu">

    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('images/logo/connectx.png') }}"
             alt="ConnectX"
             class="site-logo">
    </a>

    <div class="header-right">

        <button class="btn-join">
            Become a Partner
        </button>

        <div class="hamburger" id="hambBtn" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>

</header>