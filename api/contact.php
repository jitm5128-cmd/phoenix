<?php
include("admin_inc/navbar.php")
?>

<section class="git-contact-wrap">
    <div class="git-bg-overlay">
      <div class="git-container">
  
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
  
          <div class="git-form-bottom">
            <div class="git-checkbox">
              <input type="checkbox">
              <span>
                By checking this box and submitting your information, you are granting us permission
                to email you. You may unsubscribe at any time.
              </span>
            </div>
   <!-- reCAPTCHA placeholder -->
 
        <input type="checkbox" class="recaptcha-box">
        <span>I’m not a robot</span>
        <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="recaptcha">
           <p>
           <button type="submit" class="git-submit-btn">Send Message</button>
           </p> 
          </div>

  
        </form>
  
      </div>
    </div>
  </section>

<!-- FOOTER  -->
<?php
include("admin_inc/footer.php")
?>