<div class="fs-menu" id="fsMenu">
    <div class="fs-left">
        <div>
            <a href="{{ url('/') }}" class="logo">
                <div class="logo-mark">YC</div>
                <div class="logo-text">
                    <span class="sub">Young Chanakya</span>
                    <span class="main">ConnectX</span>
                </div>
            </a>
            <div class="fs-brand-desc">
                <p>Young Chanakya is a movement that connects ambitious minds with inspiring leaders — building a generation of thinkers, creators, and changemakers across India and the world.</p>
                <a href="https://youngchanakya.in" target="_blank" class="fs-website-btn">Visit Young Chanakya ↗</a>
                <div class="fs-socials">
                    <a href="#" class="fs-social">in</a>
                    <a href="#" class="fs-social">tw</a>
                    <a href="#" class="fs-social">ig</a>
                    <a href="#" class="fs-social">yt</a>
                </div>
            </div>
        </div>
    </div>
    <div class="fs-right">
        <div class="fs-close" onclick="toggleMenu()">Close</div>
        <nav class="fs-nav">
            <a href="#about" class="fs-nav-item" onclick="toggleMenu()">
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
                <span class="fs-nav-name">Experiences</span>
                <span class="fs-nav-arrow">→</span>
                <span class="fs-nav-num">04</span>
            </a>
            <a href="#events" class="fs-nav-item" onclick="toggleMenu()">
                <span class="fs-nav-name">Events</span>
                <span class="fs-nav-arrow">→</span>
                <span class="fs-nav-num">05</span>
            </a>
            <a href="#community" class="fs-nav-item" onclick="toggleMenu()">
                <span class="fs-nav-name">Community & Sponsors</span>
                <span class="fs-nav-arrow">→</span>
                <span class="fs-nav-num">06</span>
            </a>
        </nav>
    </div>
</div>

<header id="hdr">
    <a href="{{ url('/') }}" class="logo">
        <div class="logo-mark">YC</div>
        <div class="logo-text">
            <span class="sub">Young Chanakya</span>
            <span class="main">ConnectX</span>
        </div>
    </a>
    <div class="header-right">
        <button class="btn-join">Become a Partner</button>
        <div class="hamburger" id="hambBtn" onclick="toggleMenu()">
            <span></span><span></span><span></span>
        </div>
    </div>
</header>
