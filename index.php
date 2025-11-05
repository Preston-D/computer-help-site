<?php
$pageTitle = "Home | My PHP Site";
include 'templates/header.php';
?>
<main>
    <div class="wrapper">
        <section class="about">
            <h2>Welcome! about us.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem possimus dolorum pariatur libero? Ducimus, quam similique. Placeat, ab. Fugiat sit iusto eius magni necessitatibus id ex. Animi facere recusandae deserunt!</p>
        </section>
        <h2>Welcome!</h2>
        <p>This is the homepage of your PHP site. Edit freely in VS Code.</p>
        <p>Server time: <?= date('Y-m-d H:i:s'); ?></p>
    </div>

</main>
<?php include 'templates/footer.php'; ?>
