<?php include('partials/menu.php'); ?>

         <!-- Main Content Section Starts -->
         <div class="main-content">
              <div class="wrapper">
                <h1>Manage admin</h1>

                <br /><br />

                <!-- Button to add Admin -->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>

                <br /><br /><br />
               <table class="tbl-full">
                 <tr>
                   <th>S.N.</th>
                   <th>Full Name</th>
                   <th>Username</th>
                   <th>Actions</th>                 
                  </tr>
                  <tr>
                       <td>1.</td>
                       <td>Prosper Tshuma</td>
                       <td>prospertshuma</td>
                       <td>
                      <a href="#" class="btn-secondary">Update Admin</a>
                      <a href="#" class="btn-danger">Delete Admin</a>
                       </td>
                  </tr>
                  <tr>
                       <td>2.</td>
                       <td>Prosper Tshuma</td>
                       <td>prospertshuma</td>
                       <td>
                       <a href="#" class="btn-secondary">Update Admin</a>
                      <a href="#" class="btn-danger">Delete Admin</a>
                       </td>
                  </tr>
                  <tr>
                       <td>3.</td>
                       <td>Prosper Tshuma</td>
                       <td>prospertshuma</td>
                       <td>
                       <a href="#" class="btn-secondary">Update Admin</a>
                      <a href="#" class="btn-danger">Delete Admin</a>
                       </td>
                  </tr>
               </table> 

              </div>
        </div>
         <!-- Main Content Section Ends -->

<?php include('partials/footer.php'); ?>