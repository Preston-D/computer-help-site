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

</main>
<?php include 'templates/footer.php'; ?>

<!-- <script>
    const parallaxElements = document.querySelectorAll("[data-speed]");

    window.addEventListener("scroll", () => {
        const scrollY = window.scrollY;

        parallaxElements.forEach((el) => {
            const speed = parseFloat(el.dataset.speed);
            el.style.transform = `translateY(${scrollY * speed * -0.6}px)`;
        });
    });
</script> -->
<script>
    const parallaxElements = document.querySelectorAll("[data-speed]");

    window.addEventListener("scroll", () => {
        parallaxElements.forEach((el) => {
            const speed = parseFloat(el.dataset.speed);
            const rect = el.getBoundingClientRect(); // element's position in viewport
            const windowHeight = window.innerHeight;

            // Calculate how far the element has moved into the viewport
            const scrollProgress = 1 - (rect.top + rect.height) / (windowHeight + rect.height);

            // Apply translation only when in view
            if (scrollProgress > 0 && scrollProgress < 1.5) {
                const translateY = scrollProgress * 100 * speed * -0.6; // tune multiplier
                el.style.transform = `translateY(${translateY}px)`;
            }
        });
    });
</script>
<!-- <script>
    (() => {
        const parallaxElements = document.querySelectorAll("[data-speed]");
        let ticking = false;

        // Skip parallax if user prefers reduced motion or small screens
        const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
        const isMobile = window.innerWidth < 768;
        if (reducedMotion || isMobile) return;

        function updateParallax() {
            const windowHeight = window.innerHeight;

            parallaxElements.forEach((el) => {
                const speed = parseFloat(el.dataset.speed);
                const rect = el.getBoundingClientRect();

                // Compute how far element has entered the viewport (0 → 1)
                const progress = 1 - (rect.top + rect.height) / (windowHeight + rect.height);

                if (progress > -0.2 && progress < 1.2) {
                    // Adjust multiplier to taste
                    const translateY = progress * windowHeight * speed * -0.5;
                    el.style.transform = `translateY(${translateY}px)`;
                } else {
                    // Reset off-screen elements
                    el.style.transform = "translateY(0)";
                }
            });
        }

        window.addEventListener("scroll", () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    updateParallax();
                    ticking = false;
                });
                ticking = true;
            }
        });
    })();
</script> -->