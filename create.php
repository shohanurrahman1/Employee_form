<?php 
  ob_start();
  include "header.php"; 
?>
    <section>
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <h2 class="text-center pb-5">Employee Contact Form</h2>

            <!-- Form Start -->
            <form action="" method="POST" class="row g-3 needs-validation" novalidate>
              <div class="mb-3">
                <label for="" class="form-label">Employee Name</label>
                <input type="text" name="name" class="form-control" required autocomplete="off">
                <div class="invalid-feedback">
                  Please Write Your name.
                </div>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required autocomplete="off">
                <div class="invalid-feedback">
                  Please Write your email address.
                </div>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Phone No.</label>
                <input type="text" name="phone" class="form-control" required autocomplete="off">
                <div class="invalid-feedback">
                  Please write your phone no.
                </div>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Present Address</label>
                <textarea name="address" class="form-control" id="" cols="30" rows="3" required autocomplete="off"></textarea>
                <div class="invalid-feedback">
                  Please write your address.
                </div>
              </div>

              <div class="d-grid gap-2">
                <input type="submit" name="register" class="btn btn-success d-block" value="Register Employee">
              </div>
              <div class="mb-3 pt-2">
                <a href="index.php">Go Manage Page</a>
              </div>
            </form>
            <!-- Form End -->

            <?php  
              if (isset($_POST['register'])) {
                $name       = $_POST['name'];
                $email      = $_POST['email'];
                $phone      = $_POST['phone'];
                $address    = $_POST['address'];

                $sql = "INSERT INTO employee ( name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
                $addEmp = mysqli_query($db, $sql);

                if ($addEmp) {
                  header("Location: index.php");
                }
                else{
                  echo "Wrong Happens";
                }
              }
            ?>

          </div>
        </div>
      </div>
    </section>

<?php include "footer.php"; ?>