<?php 
  ob_start();
  include "header.php"; 
?>
    <section>
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="text-center pb-5">Employee Contact Details</h2>

            <!-- Table Start -->
            <table class="table table-striped table-hover table-bordered">
              <thead class="table-dark">
                <tr>
                  <th scope="col">#Sl.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone No.</th>
                  <th scope="col">Address</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <tbody>
                <?php  
                    $sql = "SELECT * FROM employee ORDER BY name ASC";
                    $read = mysqli_query($db, $sql);
                    $i = 0;

                    while($row = mysqli_fetch_assoc($read)){
                      $id         = $row['id'];
                      $name       = $row['name'];
                      $email      = $row['email'];
                      $phone      = $row['phone'];
                      $address    = $row['address'];
                      $i++;
                      ?>
                        <tr>
                          <th scope="row"><?php echo $i; ?></th>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $phone; ?></td>
                          <td><?php echo $address; ?></td>
                          <td>
                            <div class="action-btn">
                              <ul>
                                <li>
                                  <a href="update.php?id=<?php echo $id; ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                                </li>
                                <li>
                                  <a href=""><i class="fa-regular fa-trash-can"></i></a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>   
                   <?php }
                ?>
                 
              </tbody>
            </table>
            <!-- Table End -->
          </div>
        </div>
      </div>
    </section>

<?php include "footer.php"; ?>