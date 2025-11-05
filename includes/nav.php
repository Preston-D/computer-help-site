<?php
$current = basename($_SERVER['REQUEST_URI'], ".php");
if ($current === '') $current = 'index';
?>
<nav>
    <ul>
        <li><a href="<?= $baseUrl ?>/"
            class="<?= $current === 'index' ? 'active' : '' ?>">Home</a></li>
        <li><a href="<?= $baseUrl ?>/about"
            class="<?= $current === 'about' ? 'active' : '' ?>">About</a></li>
        <li><a href="<?= $baseUrl ?>/contact"
            class="<?= $current === 'contact' ? 'active' : '' ?>">Contact</a></li>
    </ul>
</nav>
