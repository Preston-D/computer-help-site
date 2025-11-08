<?php
$pageTitle = "Home | My PHP Site";
include 'templates/header.php';
?>
<main>
    <div class="parallax image-1">
        <div class="wrapper">
            <div class="parallax-container" data-speed="0.2">
                <div class="bg-container-medium">
                    <div class="blurred-background">
                    </div>
                    <div class="bg-container-forground">
                        <h1><b>Helpful Computer Service<br>in the Seattle Area</b></h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis sequi, cum reiciendis debitis praesentium nesciunt exercitationem impedit tenetur consequuntur, amet aliquid et earum reprehenderit totam quod nam. Exercitationem, iste maxime?</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="scroll-section" data-speed="1">
        This div is just here to enable scrolling.
    </div>

    <div class="parallax image-2">
        <div class="wrapper">
            <div class="parallax-container" data-speed="0.5">
                <h1>Second Parallax Section</h1>
            </div>
        </div>
    </div>


    <div class="scroll-section" data-speed="1">
        This div is just here to enable scrolling.
    </div>

</main>
<?php include 'templates/footer.php'; ?>

<script>
    const parallaxElements = document.querySelectorAll("[data-speed]");

    window.addEventListener("scroll", () => {
        const scrollY = window.scrollY;

        parallaxElements.forEach((el) => {
            const speed = parseFloat(el.dataset.speed);
            el.style.transform = `translateY(${scrollY * speed * -0.6}px)`;
        });
    });
</script>