<?php 
  ob_start();
  include "header.php"; 
?>
    <section>
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <h2 class="text-center pb-5">Update Employee Info</h2>

            <?php  
              if (isset($_GET['eid'])) {
                $e_id = $_GET['eid'];
                $query = "SELECT * FROM employee WHERE id='$e_id'";
                $read = mysqli_query($db, $query);
                while ($row = mysqli_fetch_assoc($read)) {
                  $name       = $row['name'];
                  $email      = $row['email'];
                  $phone      = $row['phone'];
                  $address    = $row['address'];
                  ?>
                    <!-- Form Start -->
                    <form action="" method="POST" class="row g-3 needs-validation" novalidate>
                      <div class="mb-3">
                        <label for="" class="form-label">Employee Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                        <div class="invalid-feedback">
                          Please Write Your name.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                        <div class="invalid-feedback">
                          Please Write your email address.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Phone No.</label>
                        <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                        <div class="invalid-feedback">
                          Please write your phone no.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Present Address</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                      </div>

                      <div class="d-grid gap-2">
                        <input type="submit" name="update" class="btn btn-success d-block" value="Update Employee">
                      </div>
                      <div class="mb-3 pt-2">
                        <a href="index.php">Go Manage Page</a>
                      </div>
                    </form>
                    <!-- Form End -->
                <?php }
              }
            ?>

            <?php  
              if (isset($_POST['update'])) {
                $name       = $_POST['name'];
                $email      = $_POST['email'];
                $phone      = $_POST['phone'];
                $address    = $_POST['address'];

                $sql = "UPDATE employee SET name='$name', email='$email', phone='$phone', address='$address' WHERE id='$e_id'";
                $updateEmp = mysqli_query($db, $sql);

                if ($updateEmp) {
                  header("Location: index.php");
                }
                else{
                  die("MySql Error!" . mysqli_error($db));
                }
              }
            ?>

          </div>
        </div>
      </div>
    </section>

<?php include "footer.php"; ?>