<div class="fs-menu" id="fsMenu">
    <div class="fs-left">
        <div>
            <a href="{{ url('/') }}" class="logo">
                <!-- <img src="{{ asset('images/logo/yc.png') }}"
                    alt="Young Chanakya X Logo"
                    class="menu-logo"> -->
                <img src="{{ asset('images/logo/yc.png') }}"
                    alt="Young Chanakya"
                    class="menu-logo">
            </a>

            <div class="fs-brand-desc">
                <p>
                    Young Chanakya is a Business Leadership Launchpad dedicated to empowering the next generation of entrepreneurs, innovators, and leaders. We bridge the gap between education and real-world success.
                </p>

                <a href="https://youngchanakya.com/" target="_blank" class="fs-website-btn">
                    Explore Young Chanakya ↗
                </a>
                <h3> Follow Us </h3>

                <div class="fs-socials">
                    <a href="https://www.linkedin.com/company/youngchanakya" target="_blank" class="fs-social">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="https://x.com/youngchanakya" target="_blank" class="fs-social">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="https://www.instagram.com/youngchanakya/" target="_blank" class="fs-social">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="https://www.youtube.com/youngchanakya" target="_blank" class="fs-social">
                        <i class="bi bi-youtube"></i>
                    </a>

                    <a href="https://www.facebook.com/youngchanakya/" target="_blank" class="fs-social">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="fs-right">
        <div class="fs-close" onclick="toggleMenu()">Close</div>

        <div class="fs-right-content">
            <div class="fs-right-top">
                <a href="{{ url('/') }}" style="display: inline-block; line-height: 0; text-decoration: none;">
                    <img src="{{ asset('images/logo/logo.png') }}"
                        alt="Young Chanakya X"
                        class="fs-right-logo">
                </a>

                <div class="fs-right-socials">
                    <a href="https://www.linkedin.com/showcase/young-chanakya-x/" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="https://x.com/YoungChanakyaX" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.youtube.com/channel/UCunrW6XIpxgonRXd6CjQ9eQ" target="_blank"><i class="bi bi-youtube"></i></a>
                    <a href="https://www.threads.net/@youngchanakyax" target="_blank"><i class="bi bi-threads"></i></a>
                </div>
            </div>

            <nav class="fs-nav">

                <a href="{{ url('/about') }}" class="fs-nav-item {{ request()->is('about') ? 'active' : '' }}" onclick="toggleMenu()">
                    <span class="fs-nav-name">About Young Chanakya X</span>
                    <span class="fs-nav-arrow">→</span>
                    <!-- <span class="fs-nav-num">01</span> -->
                </a>

                <a href="{{ url('/become-a-partner') }}" class="fs-nav-item {{ request()->is('become-a-partner') ? 'active' : '' }}" onclick="toggleMenu()">
                    <span class="fs-nav-name">Become a Partner</span>
                    <span class="fs-nav-arrow">→</span>
                    <!-- <span class="fs-nav-num">02</span> -->
                </a>

                <a href="{{ url('/become-a-sponser') }}" class="fs-nav-item {{ request()->is('become-a-sponser') ? 'active' : '' }}" onclick="toggleMenu()">
                    <span class="fs-nav-name">Become a Sponsor</span>
                    <span class="fs-nav-arrow">→</span>
                    <!-- <span class="fs-nav-num">03</span> -->
                </a>

                <!-- Events page pending -->
                <a href="{{ url('/events') }}" class="fs-nav-item {{ request()->is('events') ? 'active' : '' }}" onclick="toggleMenu()">
                    <span class="fs-nav-name">Events</span>
                    <span class="fs-nav-arrow">→</span>
                    <!-- <span class="fs-nav-num">05</span> -->
                </a>

                <a href="{{ url('/connecters-list') }}" class="fs-nav-item {{ request()->is('connecters-list') ? 'active' : '' }}" onclick="toggleMenu()">
                    <span class="fs-nav-name">Connecters Directory</span>
                    <span class="fs-nav-arrow">→</span>
                    <!-- <span class="fs-nav-num">06</span> -->
                </a>

                <a href="{{ url('/contact') }}" class="fs-nav-item {{ request()->is('contact') ? 'active' : '' }}" onclick="toggleMenu()">
                    <span class="fs-nav-name">Contact</span>
                    <span class="fs-nav-arrow">→</span>
                    <!-- <span class="fs-nav-num">07</span> -->
                </a>

            </nav>
        </div>
    </div>
</div>

<header id="hdr" class="sticky-menu">

    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('images/logo/logo.png') }}"
            alt="Young Chanakya X"
            class="site-logo">
    </a>

    <div class="header-right">

        <button class="btn-join" onclick="window.location.href='/connecters-list'">
            Connect with Us
        </button>

        <div class="hamburger" id="hambBtn" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>

</header>
