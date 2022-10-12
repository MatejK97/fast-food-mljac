<!-- Footer -->
<footer class="bg-light text-center ">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="https://www.facebook.com/foodmljac/" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Google -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="https://www.google.com/search?q=food+mljac&oq=food+&aqs=chrome.0.69i59j69i57j69i59l2j0i67i457j69i60l3.1134j0j7&sourceid=chrome&ie=UTF-8" role="button"><i class="fab fa-google"></i></a>
    </section>
    <!-- Section: Social media -->


    <!-- Section: Form -->
    <section class="">
      <form action="" method="post">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Učlanite se u naš newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="email" name="email" class="form-control" required="" />
              <label class="form-label" for="email">Vaša Email adresa</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary mb-4">
              Pošalji
            </button>
            <?php 
        $servername = "178.218.167.4";
        $username = "alfonso";
        $password = "Alfonso84321";
        $dbname = "alfonso_novosti";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
          };
?>
<?php 
      if(isset($_POST['submit'])){
        $email = $_POST['email'];
      
          $sql2 = "INSERT INTO Subscribe (email_sub) VALUES ('$email')";
          if ($conn->query($sql2) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
      }
    ?>
    <?php
    $conn->close();
    ?>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p class="lead">
        "If you're out, and starving, and need a bite to eat, then you need fast food."
      </p>
    </section>
    <!-- Section: Text -->


    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row justify-content-center">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Stranice</h5>

          <ul class="list-unstyled footerLinks mb-0">
            <li>
              <a href="index.php">Naslovna</a>
            </li>
            <li>
              <a href="jelovnik.php">Jelovnik</a>
            </li>
            <li>
              <a href="onama.php">O nama</a>
            </li>
            <li>
              <a href="kontakt.php">Kontakt</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Kontakt</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <strong>Adresa</strong>: Ulica Martina Divalta 14, 31000 Osijek
            </li>
            <li>
              <strong>Email</strong>: foodmljac@gmail.com
            </li>
            <li>
              <strong>Telefon</strong>: 031/575-302
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->

  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2021 Copyright:
    <a class="text-dark" href="#">Matej Kovačević</a>
  </div>
  <!-- Copyright -->
  <button
        type="button"
        class="btn btn-warning btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>
<script type="text/javascript" src="js/backToTop.js"></script>
</footer>
<!-- Footer -->
</body>
</html>