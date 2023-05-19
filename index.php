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
                                  <a href="update.php?eid=<?php echo $id; ?>"><i class="fa-regular fa-pen-to-square edit"></i></a>
                                </li>
<li>
  <a href="" data-bs-toggle="modal" data-bs-target="#del<?php echo $id; ?>"><i class="fa-regular fa-trash-can delete"></i></a>
</li>
                              </ul>
                            </div>
<!-- Modal Start -->
<div class="modal fade" id="del<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you Sure!! To delete <strong class="text-success"><?php echo $name; ?></strong> data??</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal-btn">
          <ul>
            <li>
              <a href="index.php?delete=<?php echo $id;?>" class="btn btn-danger">Delete</a>
            </li>
            <li>
              <a href="" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->
                          </td>
                        </tr>   
                   <?php }
                ?>
                 
              </tbody>
            </table>
            <!-- Table End -->

            <div class="d-grid gap-2">
              <a href="create.php" class="btn btn-primary text-white">Add New Employee</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php  
      if (isset($_GET['delete'])) {
        $delete_Id = $_GET['delete'];
        $delSql = "DELETE FROM employee WHERE id='$delete_Id'";
        $delete_data = mysqli_query($db, $delSql);

        if ($delete_data) {
          header("Location: index.php");
        }
        else{
          die("mysqli Error!" . mysqli_error($db));
        }
      }
    ?>

<?php include "footer.php"; ?>