<?php 
include("admin_inc/navbar.php")
?>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<style>
  * {
    margin: 0;
    padding: 0;
    /* box-sizing: border-box; */
    font-family: Arial, Helvetica, sans-serif;
  }
  
  /* HEADER */
  .pdf-header {
    text-align: center;
    padding: 80px 20px;
    background: #f4f4f4;
  }
  
  .pdf-header h1 {
    font-size: 34px;
    margin-bottom: 15px;
  }
  
  .pdf-header p {
    max-width: 800px;
    margin: auto;
    color: #666;
    line-height: 1.7;
  }
  
  .btn {
    display: inline-block;
    margin-top: 25px;
    padding: 12px 28px;
    background: #f1c40f;
    color: #000;
    text-decoration: none;
    font-weight: 600;
  }
  
  /* SECTIONS */
  .pdf-section {
    padding: 90px 20px;
    background-size: cover;
    background-position: center;
  }
  
  .bg-london { background-image: url("image/card1_faded.png"); }
  .bg-stone { background-image: url("image/card2_faded.png"); }
  .bg-bath { background-image: url("image/card3_faded.png"); }
  .bg-oxford { background-image: url("image/card4_faded.png"); }
  .bg-windsor { background-image: url("image/card5_faded.png"); }
  .bg-leeds { background-image: url("image/card6_faded.png"); }
  .bg-hampton { background-image: url("image/card7_faded.png"); }
  
  /* CARD */
  .pdf-card {
    max-width: 1000px;
    margin: auto;
    display: flex;
    background: #fff;
    height: 430px;
  }
  
  .pdf-card.reverse {
    flex-direction: row-reverse;
  }
  
  /* TEXT */
  .pdf-text {
    width: 52%;
    padding: 55px 60px;
    text-align: center;
  }
  
  .pdf-text h2 {
    font-size: 26px;
    font-weight: 400;
    margin-bottom: 25px;
  }
  
  .pdf-text p {
    font-size: 14px;
    line-height: 1.9;
    color: #666;
  }
  
  /* IMAGE */
  .pdf-image {
    width: 48%;
  }
  
  .pdf-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
/* COMMON CONTENT SECTION */
.content-section {
  background: #f5f5f5;
}

.container {
  max-width: 1200px;
  margin: auto;
  padding: 70px 20px;
}

/* IMAGE BETWEEN SECTIONS */
.between-image {
  width: 100%;
  height: 200px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}



/* RESPONSIVE */
@media (max-width: 768px) {
  .between-image {
    height: 180px;
  }
}
  
  /* RESPONSIVE */
  @media (max-width: 900px) {
    .pdf-card,
    .pdf-card.reverse {
      flex-direction: column;
      height: auto;
    }
  
    .pdf-text,
    .pdf-image {
      width: 100%;
    }
  
    .pdf-image {
      height: 300px;
    }
  }
  
</style>
<body>

<!-- HEADER -->
<section class="pdf-header">
  <br><br>
  <h1>Private Guided Tours</h1>
  <p>
    For additional details regarding any of the private guided tours mentioned below
    or to make a booking inquiry, please do not hesitate to contact us using the button below.
  </p>
  <a href="contact.php" class="btn">Contact Us</a>
</section>

<!-- LONDON -->
<section class="pdf-section bg-london">
  <div class="pdf-card">
    <div class="pdf-text">
      <h2>London City Tour</h2>
      <p>
      Embark on an extraordinary exploration of London with our guided City tour. Uncover the city’s iconic landmarks, from the historic Tower of London to the modern splendor of the Shard. Our expert guides will lead you through the bustling streets, sharing insights into the rich history, diverse culture, and architectural marvels that define the heart of this vibrant metropolis. Immerse yourself in the essence of London on this captivating City tour.
      </p>
    </div>
    <div class="pdf-image">
      <img src="image/card1.jpeg" alt="London">
    </div>
  </div>
</section>
<div class="between-image" style="background-image: url('image/screen1.png');"></div>
<!-- STONEHENGE -->
<section class="pdf-section bg-stone">
  <div class="pdf-card reverse">
  <div class="pdf-text">
      <h2>Stonehenge</h2>
      <p>
      Explore the mysteries of Stonehenge on our captivating guided tour. Uncover the ancient secrets of this iconic UNESCO World Heritage site as our knowledgeable guides provide insight into its history, architecture, and significance. Immerse yourself in the unique atmosphere of Stonehenge, a prehistoric marvel that continues to intrigue and awe visitors from around the world.
      </p>
    </div>
    <div class="pdf-image">
      <img src="image/card2.jpeg" alt="Stonehenge">
    </div>
 
  </div>
</section>
<div class="between-image" style="background-image: url('image/screen4.png');"></div>
<!-- BATH -->
<section class="pdf-section bg-bath">
  <div class="pdf-card">
    <div class="pdf-text">
      <h2>Bath</h2>
      <p>
      Embark on a journey to Bath, a city steeped in history and elegance. Our guided tour invites you to discover the charm of Bath’s Georgian architecture, iconic landmarks like the Roman Baths, and the picturesque Pulteney Bridge. Immerse yourself in the rich cultural heritage of this UNESCO World Heritage site, known for its thermal springs and timeless beauty. Explore Bath’s captivating streets and learn about its storied past with our expert guides.
      </p>
    </div>
    <div class="pdf-image">
      <img src="image/card3.jpeg" alt="Bath">
    </div>
  </div>
</section>
<div class="between-image" style="background-image: url('image/screen5.png');"></div>
<!-- OXFORD -->
<section class="pdf-section bg-oxford">
  <div class="pdf-card reverse">
  <div class="pdf-text">
      <h2>Oxford</h2>
      <p>
      Experience the intellectual allure of Oxford with our guided tour. Explore the prestigious Oxford University, stroll through the historic Bodleian Library, and marvel at the iconic Radcliffe Camera. Immerse yourself in the academic and architectural splendour of one of the world’s oldest and most renowned universities, as our expert guides provide fascinating insights into Oxford’s rich history and scholarly traditions.
      </p>
    </div>
    <div class="pdf-image">
      <img src="image/card4.jpeg" alt="Oxford">
    </div>
   
  </div>
</section>
<div class="between-image" style="background-image: url('image/screen6.png');"></div>
<!-- WINDSOR CASTLE -->
<section class="pdf-section bg-windsor">
  <div class="pdf-card">
    <div class="pdf-text">
      <h2>Windsor Castle</h2>
      <p>
      Discover the regal allure of Windsor Castle on our guided tour. Unveil the history and opulence of the world’s oldest inhabited castle, where British monarchs have resided for over 900 years. Explore the State Apartments, witness the splendor of St. George’s Chapel, and stroll through the enchanting grounds. Join us for an enriching experience as we delve into the royal legacy and architectural grandeur of Windsor Castle.
      </p>
    </div>
    <div class="pdf-image">
      <img src="image/card5.jpeg" alt="Windsor Castle">
    </div>
  </div>
</section>
<div class="between-image" style="background-image: url('image/screen7.png');"></div>
<!-- LEEDS CASTLE -->
<section class="pdf-section bg-leeds">
  <div class="pdf-card reverse">
  <div class="pdf-text">
      <h2>Leeds Castle</h2>
      <p>
      Embark on a journey to Leeds Castle, often referred to as the “Loveliest Castle in the World.” Our guided tour invites you to explore the rich history, stunning gardens, and picturesque surroundings of this iconic medieval fortress. Discover the enchanting interiors, wander through the beautifully landscaped grounds, and experience the timeless allure of Leeds Castle, a gem nestled in the heart of the English countryside.
      </p>
    </div>
    <div class="pdf-image">
      <img src="image/card6.jpeg" alt="Leeds Castle">
    </div>
    
  </div>
</section>
<div class="between-image" style="background-image: url('image/screen31.png');"></div>
<!-- HAMPTON COURT -->
<section class="pdf-section bg-hampton">
  <div class="pdf-card">
    <div class="pdf-text">
      <h2>Hampton Court Palace</h2>
      <p>
      Immerse yourself in the grandeur of Hampton Court Palace with our guided tour. Explore the historic corridors and opulent chambers of this iconic Tudor palace, once home to King Henry VIII. Wander through the immaculate gardens, marvel at the intricate architecture, and discover the stories that echo through the centuries within the palace walls. Join us for an enriching experience as we unveil the regal history and captivating charm of Hampton Court Palace.
      </p>
    </div>
    <div class="pdf-image">
      <img src="image/card7.jpeg" alt="Hampton Court Palace">
    </div>
  </div>
</section>

<div class="between-image" style="background-image: url('image/screen2.png');"></div>

        <!-- FOOTER  -->
        <?php 
include("admin_inc/footer.php")
?>