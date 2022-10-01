<div class="footer" data-aos="fade-up" data-aos-duration="3000">
        <div class="img-bg-footer">
            <img src="public/images/img-bg-footer.png" alt="">
        </div>
        <div class="container">
            <div class="footer-content">
                <div class="title-footer">
                    <h2>My Logs Travels</h2>
                </div>
                <div class="items-menu-footer">
                    <div class="title-menu-footer">
                        <h2>Quick Links</h2>
                    </div>
                    <div class="item-menu-footer">
                        <div class="menu-footer">
                            <?php footer_menu_1('footer-menu-1'); ?>
                        </div>
                        <div class="menu-footer">
                            <?php footer_menu_2('footer-menu-2'); ?>
                        </div>
                        <div class="menu-footer">
                            <?php footer_menu_3('footer-menu-3'); ?>
                        </div>
                        <div class="menu-footer">
                            <?php footer_menu_4('footer-menu-4'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-reserved text-center">
            <p>2021 - 2022 My Logs Travels. All Rights Reserved.</p>
        </div>
    </div>
    <!-- <script>
        const toggle = document.querySelector('.toggle');
        const nav_menu = document.querySelector('.nav-menu');
        const nav_header = document.querySelector('.nav-header');

        toggle.addEventListener("click", () => {
        toggle.classList.toggle("active");
        nav_menu.classList.toggle("active");
        nav_header.classList.toggle("active");
                
        });

        document.querySelectorAll('.nav-link').forEach(n => n.addEventListener("click", () => {
        toggle.classList.remove("active");
            nav_menu.classList.remove("active");
            nav_header.classList.remove("active");
                    
        }));

        $('.items-staff').slick({
            infinite : true,
            slidesToShow: 3,
            slidesToScroll:1,
            draggable: true,
            // autoplay: true,
            autoplaySpeed: 2000,
        });
                
        $('.items-place').slick({
            slidesToShow: 1,
            slidesToScroll:1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows:false,
            speed: 1000,
        });
    </script> -->
    <?php wp_footer() ?>
</body>
</html>