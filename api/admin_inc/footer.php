<section class="trusted-logos">
    <div class="logo-container">

        <!-- Transport for London -->
        <div class="logo-box">
            <img src="image/tfor.jpeg" alt="Transport for London">
        </div>

        <!-- ICO -->
        <div class="logo-box">
            <img src="image/ico.jpeg" alt="ICO">
        </div>

    </div>
</section>
<br><br>
<div style="background:black;">

    <!-- FOOTER NAV -->
    <footer class="site-footer">
        <div class="container-fluid px-4" style="display:flex;">
            <ul class="footer-nav">
                <li><a class="active-link" href="index.php">Home</a></li>
                <li><a href="privateguide.php">Private Guided Tours</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="book.php">Book</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="privacypolicy.php">Privacy Policy</a></li>
                <li><a href="termscondition.php">Terms & Condition</a></li>
            </ul>
        </div>
    </footer>

    <!-- ADDRESS -->
     <div class="container-fluid" style="display: flex; justify-content: space-between;">
     <div class="footer-address col-lg-6 col-md-6" style="color:white; margin-left:20px;">
        <h5 class="footer-heading">Address</h5>
        <p>
            Regus Romer House, 132 Lewisham High Street<br>
            London, SE13 6EE, GB
        </p>
        <p class="mb-0">
            <a href="tel:02035765300">020 3576 5300</a>
            &ensp;&ensp;
            <a href="mailto:info@phoenixtravelandtourslondon.com">
                info@phoenixtravelandtourslondon.com
            </a>
        </p>
    </div>
    <div class="footer-address col-lg-6 col-md-6" style="color:white; margin-left:20px; width:auto; display: flex;
    justify-content: right;">
        <img src="image/logo-removebg-preview (2).png" alt="" style="width: 250px;">
    </div>

     </div>
    
    <!-- BOTTOM BAR -->
    <div class="bottom-bar">

        <div class="bottom-left">
            <span>© 2025 Phoenix Travel and Tours London</span>
            <a href="https://phoenixtravelandtourslondon.com/wp-sitemap.xml">Sitemap</a>
        </div>

        <div class="bottom-right">
            <span>Follow us</span>

            <a href="https://www.facebook.com/people/Phoenix-Travel-and-Tours/61553620327728/">
                <i class="fa-brands fa-facebook"></i>
            </a>

            <a href="https://www.instagram.com/phoenixtravellondon/">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>

    </div>

</div>

<!-- ======================
   STYLES
====================== -->
<style>
/* FOOTER BASE */
.site-footer {
    margin: 0;
    background: #000;
    padding: 15px 0;
}

.footer-nav {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 28px;
    padding: 0;
    margin: 0;
    flex-wrap: wrap;
}

.footer-nav li a {
    color: #fff;
    font-size: 14px;
    text-decoration: none;
    position: relative;
    padding-bottom: 4px;
}

.footer-nav li a:hover {
    color: #f4c430;
}

.footer-nav .active-link {
    color: #f4c430;
}

.footer-nav .active-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #f4c430;
}

/* ADDRESS */
.footer-address {
    margin-bottom: 0;
    padding-bottom: 10px;
}

.footer-address a {
    color: #f4c430;
    text-decoration: none;
}

.footer-address a:hover {
    text-decoration: underline;
}

/* BOTTOM BAR */
.bottom-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #000;
    padding: 12px 20px;
    font-size: 14px;
    color: #fff;
    border-top: 1px solid #222;
    flex-wrap: wrap;
}

.bottom-left {
    display: flex;
    align-items: center;
    gap: 20px;
}

.bottom-left a {
    color: #f4c430;
}

.bottom-right {
    display: flex;
    align-items: center;
    gap: 12px;
}

.bottom-right a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    background: #f4c430;
    color: #000;
    border-radius: 4px;
    text-decoration: none;
}

/* MOBILE */
@media (max-width: 768px) {
    .bottom-bar {
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }

    .bottom-left,
    .bottom-right {
        justify-content: center;
    }
}
</style>
