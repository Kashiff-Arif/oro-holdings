<header class="header">
    <div class="container">
        <div class="header__wrapper">

            <div class="header__logo">
                <a href="index" aria-label="ORO Holdings - Home">
                    <div class="header__logo--image" aria-hidden="true">
                         <svg width="697" height="579" viewBox="0 0 697 579">
                            <use xlink:href="#logo"></use>
                        </svg>
                    </div>

                    <div class="header__logo--text">
                        ORO
                        <p>Holdings</p>
                    </div>
                </a>
            </div>

            <div class="d-flex align-items-center gap-3">

                <nav id="site-navigation" class="header__nav" aria-label="Main navigation">
                    <ul>
                        <li>
                            <a href="index">Home</a>
                        </li>

                        <li>
                            <a href="about">About</a>
                        </li>
                        <li>
                            <a href="companies">ORO Companies</a>
                        </li>
                        <li>
                            <a href="careers">Careers</a>
                        </li>
                         <li>
                            <a href="global-presence">Global Presence</a>
                        </li>
                        <li>
                            <a href="contact" class="btn btn-primary">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>

                <button
                    type="button"
                    class="header__menuIcon"
                    aria-label="Open navigation menu"
                    aria-expanded="false"
                    aria-controls="site-navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>
        </div>
    </div>
</header>


<script>
        document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       Sticky Header
    ========================= */
    const header = document.querySelector(".header");

    if (header) {
        window.addEventListener("scroll", function () {
            header.classList.toggle("sticky", window.scrollY > 40);
        });
    }



    /* =========================
       Mobile Menu Button
    ========================= */
    const menuIcon = document.querySelector(".header__menuIcon");

    if (menuIcon) {
        menuIcon.addEventListener("click", function () {
            document.documentElement.classList.toggle("overflow-hidden");
            document.body.classList.toggle("menu-active");
        });
    }

});
</script>