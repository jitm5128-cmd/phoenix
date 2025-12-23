<?php
include("admin_inc/navbar.php")
?>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<section class="git-contact-wrap" style="background-image: url('image/screen6.png');">
    <div class="git-bg-overlay" style="    justify-content: center;
    display: flex;
    margin-top: 50px;">
      <div class="git-container" style="    padding-left: 20px;">
  
        <h2 class="git-title">Get In Touch</h2>
        <p class="git-desc">
          We appreciate the opportunity to assist you. Whether you have questions about our services,
          need assistance with a booking, or have specific requirements, our dedicated team is here to help.
        </p>
  
        <form class="git-form">
  
          <div class="git-form-left">
            <label class="git-label">First name</label>
            <input type="text" class="git-input">
  
            <label class="git-label">Last name</label>
            <input type="text" class="git-input">
  
            <label class="git-label">Your email</label>
            <input type="email" class="git-input">
  
            <label class="git-label">Email subject</label>
            <input type="text" class="git-input">
  
            <label class="git-label">Your phone</label>
            <input type="tel" class="git-input">
          </div>
  
          <div class="git-form-right">
            <label class="git-label">Your message</label>
            <textarea class="git-textarea"></textarea>
          </div>
  
          <div class="consent-row">
  <label>
    <input type="checkbox" id="consentCheck">
    By checking this box and submitting your information, you are granting us permission to email you.
  </label>
</div>

<!-- CAPTCHA ROW -->
<div class="captcha-row" id="captchaRow">
  <div class="captcha-box">
    <input type="checkbox" >
    <span>I'm not a robot</span>
    <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="captcha">
  </div>
</div>

<label>
    <input type="submit" style="background: #f5c400;
  border: none;
  padding: 12px 30px;
  font-size: 15px;
  cursor: pointer;">
  </label>

  
        </form>
  
      </div>
    </div>
  </section>


  <script>
  const consentCheck = document.getElementById("consentCheck");
  const captchaRow = document.getElementById("captchaRow");

  consentCheck.addEventListener("change", function () {
    if (this.checked) {
      captchaRow.style.display = "block";
    } else {
      captchaRow.style.display = "none";
    }
  });
</script>
<!-- FOOTER  -->
<?php
include("admin_inc/footer.php")
?>