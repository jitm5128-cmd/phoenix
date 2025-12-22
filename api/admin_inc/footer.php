<section class="trusted-logos">
    <div class="logo-container">

        <!-- Transport for London -->
        <div class="logo-box">
            <img src="image/tfor.jpeg" alt="Transport for London">
            <!-- <span>Transport<br>for London</span> -->
        </div>

        <!-- ICO -->
        <div class="logo-box">
            <img src="image/ico.jpeg" alt="ICO">
            <!-- <span class="small-text">Information Commissioner's Office</span> -->
        </div>

    </div>
</section>

<div class="container">
    <footer class="site-footer">
        <div class="container-fluid">
        <footer class="site-footer">
    <div class="container-fluid px-4" style="display: flex;">
        <ul class="footer-nav">
            <li>
                <a class="active-link" href="index.php">Home</a>
            </li>
            <li>
                <a href="privateguide.php">Private Guided Tours</a>
            </li>
            <li class="footer-dropdown">
                <a href="contact.php">Contact Us</a>
                <!-- <ul class="footer-dropdown-menu">
                    <li><a href="privacypolicy.php">Privacy Policy</a></li>
                    <li><a href="termscondition.php">Terms & Condition</a></li>
                </ul> -->
            </li>
            <li>
                <a href="book.php">Book</a>
            </li>
            <li>
                <a href="gallery.php">Gallery</a>
            </li>
            <li>
                <a href="privacypolicy.php">privacy policy</a>
            </li>
            <li>
                <a href="termscondition.php">terms & condition</a>
            </li>
            
            
        </ul>
    </div>
</footer>


    </footer>
    <div class="col-lg-6 col-md-12 mb-3">
        <h5 class="footer-heading">Address</h5>
        <p>
            Regus Romer House, 132 Lewisham High Street<br>
            London, SE13 6EE, GB
        </p>
        <p class="mb-0">
            <span>
                <a href="tel:02035765300">020 3576 5300</a>

            </span> &ensp;&ensp;
            <span>
                <a href="mailto:info@phoenixtravelandtourslondon.com">
                    info@phoenixtravelandtourslondon.com
                </a>

            </span>

        </p>
    </div>
</div>

</div>


<!-- Bottom Footer -->
<style>
  /* ======================
   FOOTER BASE
====================== */
.site-footer {
    background:rgb(255, 255, 255);
    padding: 20px 0;
}

.footer-nav {
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 28px;
    margin: 0;
    padding: 0;
    flex-wrap: wrap;
}

.footer-nav li a {
    color:#111;
    font-size: 14px;
    text-decoration: none;
    position: relative;
    padding-bottom: 4px;
    transition: color 0.3s ease;
}

.footer-nav li a:hover {
    color: #f4c430;
}

/* Active link */
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

/* ======================
   DROPDOWN (FOOTER)
====================== */
.footer-dropdown {
    position: relative;
}

.footer-dropdown-menu {
    list-style: none;
    position: absolute;
    bottom: 130%;
    left: 0;
    color: #111;
    background: #111;
    padding: 10px 0;
    min-width: 180px;
    display: none;
    border-radius: 6px;
}

.footer-dropdown-menu li a {
    display: block;
    padding: 8px 15px;
    font-size: 13px;
    color: #111;
}

.footer-dropdown-menu li a:hover {
    background: #f4c430;
    color: #000;
}

/* Show dropdown on hover (desktop) */
.footer-dropdown:hover .footer-dropdown-menu {
    display: block;
}

/* ======================
   MOBILE RESPONSIVE
====================== */
@media (max-width: 768px) {

    .footer-nav {
        flex-direction: row;
        gap: 14px;
        text-align: center;
    }

    .footer-dropdown-menu {
        position: static;
        display: block;
        background: transparent;
        padding: 0;
        margin-top: 6px;
    }

    .footer-dropdown-menu li a {
        padding: 6px 0;
        font-size: 13px;
    }

    /* Remove underline on mobile */
    .active-link::after {
        display: none;
    }
}

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

<div class="bottom-bar" style="
  display:flex;
  justify-content:space-between;
  align-items:center;
  background:#d9d9d9;
  padding:12px 40px;
  font-size:16px;
  font-family:Arial, sans-serif;
  flex-wrap:wrap;
">

  <!-- LEFT -->
  <div class="bottom-left" style="
    display:flex;
    align-items:center;
    gap:20px;
  ">
    <span>© 2025 Phoenix Travel and Tours London</span>

    <a href="https://phoenixtravelandtourslondon.com/wp-sitemap.xml" style="
      color:#333;
      text-decoration:underline;
    ">sitemap</a>
  </div>

  <!-- RIGHT -->
  <div class="bottom-right" style="
    display:flex;
    align-items:center;
    gap:12px;
  ">
    <span>Follow us</span>

    <a href="https://www.facebook.com/people/Phoenix-Travel-and-Tours/61553620327728/" style="
      display:inline-flex;
      align-items:center;
      justify-content:center;
      width:28px;
      height:28px;
      background:#f5c842;
      color:#000;
      text-decoration:none;
      font-weight:bold;
      border-radius:4px;
    "><i class="fa-brands fa-facebook"></i></a>

    <a href="https://www.instagram.com/phoenixtravellondon/" style="
      display:inline-flex;
      align-items:center;
      justify-content:center;
      width:28px;
      height:28px;
      background:#f5c842;
      color:#000;
      text-decoration:none;
      font-weight:bold;
      border-radius:4px;
    "><i class="fa-brands fa-instagram"></i></a>

    
  </div>

</div>

</body>
