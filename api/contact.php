<?php
include("admin_inc/navbar.php")
?>

<section class="contact-section">
  <div class="overlay">
    <div class="container">
      
      <h1>Get In Touch</h1>
      <p class="subtitle">
        We appreciate the opportunity to assist you. Whether you have questions about our services,
        need assistance with a booking, or have specific requirements, our dedicated team is here to help.
      </p>

      <form class="contact-form">
        <!-- Left side -->
        <div class="form-left">
          <label>First name</label>
          <input type="text" required>

          <label>Last name</label>
          <input type="text" required>

          <label>Your email</label>
          <input type="email" required>

          <label>Email subject</label>
          <input type="text">

          <label>Your phone</label>
          <input type="tel">
        </div>

        <!-- Right side -->
        <div class="form-right">
          <label>Your message</label>
          <textarea required></textarea>
        </div>
      </form>

    </div>
  </div>
</section>


<!-- FOOTER  -->
<?php
include("admin_inc/footer.php")
?>