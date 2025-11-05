<?php
http_response_code(404);
$pageTitle = "404 - Page Not Found";
include 'templates/header.php';
?>
<main>
    <h2>404 - Page Not Found</h2>
    <p>Sorry, the page you’re looking for doesn’t exist.</p>
    <p><a href="<?= $baseUrl ?>/">Return to home</a></p>
</main>
<?php include 'templates/footer.php'; ?>
