<?php 
include("admin_inc/navbar.php")
?>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
   <br>
    <form action="insert.php" method="post">
    <div class="container">
        <br><br><br>
        <p class="text">Pickup Address</p>
        <p>Address Line 1</p>
       <input class="form-control" type="text" name="Addressline1" placeholder="Address Line 1"><br>
       <p>Drop-off Address</p>
        <p>Address Line 1</p>
       <input class="form-control" type="text" name="dropAddressline1" placeholder="Address Line 1"><br>
        <p>Date/Time</p>
       <input class="form-control" type="date" name="Datetime" ><br>
        <p>Passengers</p>
       <input class="form-control" type="text" name="Passengers"><br>
       
        <div class="row">
            <div class="col-md-6">
            <span>First Name</span>
            <input class="form-control" type="text" name="Firstname" placeholder="First Name"><br>

            </div>
        <div class="col-md-6">
        <span>Last Name</span>
        <input class="form-control" type="text" name="lastname" placeholder="Last Name"><br>
        </div>
        
        </div>
       
        <p>Email</p>
       <input class="form-control" type="email" name="Email" placeholder="Email Address"><br>
        
       <label for="comment">Your Message:</label>
<textarea class="form-control" rows="5" id="comment" name="YourMessage"></textarea><br>
<input class="btn btn-primary" type="submit" name="submit" value="Submit Form">
    </form>
<br>
    </div>
    <div>
    <?php 
include("admin_inc/footer.php")
?>
    </div>
   