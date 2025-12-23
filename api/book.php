<?php 
include("admin_inc/navbar.php");
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<br>

<form action="insert.php" method="post" id="bookingForm">
  <div class="container">
    <br><br>

    <h2 style="margin-top: 5%; padding-bottom:10px">Book Now</h2>

    <p class="text">Pickup Address</p>
    <p>Address Line 1</p>
    <input class="form-control" type="text" name="Addressline1" placeholder="Address Line 1" data-required>
    <small class="error-msg">This field is required</small><br>

    <p>Drop-off Address</p>
    <p>Address Line 1</p>
    <input class="form-control" type="text" name="dropAddressline1" placeholder="Address Line 1" data-required>
    <small class="error-msg">This field is required</small><br>

    <p>Date / Time</p>
    <input class="form-control" type="date" name="Datetime" data-required>
    <small class="error-msg">This field is required</small><br>

    <p>Passengers</p>
    <input class="form-control" type="text" name="Passengers" data-required>
    <small class="error-msg">This field is required</small><br>

    <div class="row">
      <div class="col-md-6">
        <span>First Name</span>
        <input class="form-control" type="text" name="Firstname" placeholder="First Name" data-required>
        <small class="error-msg">This field is required</small><br>
      </div>

      <div class="col-md-6">
        <span>Last Name</span>
        <input class="form-control" type="text" name="lastname" placeholder="Last Name" data-required>
        <small class="error-msg">This field is required</small><br>
      </div>
    </div>

    <p>Email</p>
    <input class="form-control" type="email" name="Email" placeholder="Email Address" data-required>
    <small class="error-msg">This field is required</small><br>

    <label for="comment">Your Message:</label>
    <textarea class="form-control" rows="5" id="comment" name="YourMessage" data-required></textarea>
    <small class="error-msg">This field is required</small><br>

    <input class="btn btn-primary" type="submit" name="submit" value="Submit Form" style="margin-bottom: 5%;">
  </div>
</form>

<br>
<script>
document.getElementById("bookingForm").addEventListener("submit", function (e) {
  let isValid = true;
  const fields = this.querySelectorAll("[data-required]");

  fields.forEach(field => {
    const error = field.nextElementSibling;

    if (field.value.trim() === "") {
      field.classList.add("error");
      error.style.display = "block";
      isValid = false;
    } else {
      field.classList.remove("error");
      error.style.display = "none";
    }
  });

  if (!isValid) {
    e.preventDefault();
  }
});
</script>

<?php 
include("admin_inc/footer.php");
?>
