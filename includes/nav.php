<?php
$current = trim(basename($_SERVER['REQUEST_URI'], ".php"));
if ($current === '') $current = 'index';
?>
<nav class="main-nav">
    <div class="logo-container">
        <!-- <img src="<?= $baseUrl ?>/assets/images/example.svg" alt=""> -->
        <a href="<?= $baseUrl ?>/">Computer Wizard</a>
    </div>
    <ul class="desktop">
        <li><a href="<?= $baseUrl ?>/"
                class="<?= $current === 'index' ? 'active' : '' ?>">Home</a></li>
        <li><a href="<?= $baseUrl ?>/about"
                class="<?= $current === 'about' ? 'active' : '' ?>">About</a></li>
        <li><a href="<?= $baseUrl ?>/contact"
                class="<?= $current === 'contact' ? 'active' : '' ?>">Contact</a></li>
    </ul>
    <div class="mobile">
        <div class="hamburger" onclick="this.classList.toggle('active')">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path class="line top" d="M4 6H20" />
                <path class="line middle" d="M4 12H20" />
                <path class="line bottom" d="M4 18H20" />
            </svg>
        </div>
    </div>
    <!-- <ul>
        <li><a href="<?= $baseUrl ?>/"
                class="<?= $current === 'index' ? 'active' : '' ?>">Home</a></li>
        <li><a href="<?= $baseUrl ?>/about"
                class="<?= $current === 'about' ? 'active' : '' ?>">About</a></li>
        <li><a href="<?= $baseUrl ?>/contact"
                class="<?= $current === 'contact' ? 'active' : '' ?>">Contact</a></li>
    </ul> -->
</nav>
