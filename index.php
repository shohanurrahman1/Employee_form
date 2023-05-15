<?php include "db.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Contact Form | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body>
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
                <a href="">Go Manage Page</a>
              </div>
            </form>
            <!-- Form End -->

          </div>
        </div>
      </div>
    </section>

    <!-- Form Validation Script Start -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
      })()
    </script>
    <!-- Form Validation Script End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>