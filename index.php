<?php
$pageTitle = "Home | My PHP Site";
include 'templates/header.php';
?>
<main>
    <h2>Welcome!</h2>
    <p>This is the homepage of your PHP site. Edit freely in VS Code.</p>
    <p>Server time: <?= date('Y-m-d H:i:s'); ?></p>
</main>
<?php include 'templates/footer.php'; ?>
