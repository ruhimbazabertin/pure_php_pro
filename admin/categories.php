<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php";?>
<?php include "functions.php";?>

    <?php ob_start(); ?>

<div id="layoutSidenav">

<?php include "includes/layoutSideNav.php";?>
 
   <div id="layoutSidenav_content">
       <main>
           <div class="container-fluid px-4">
               <h1 class="mt-4">Dashboard</h1>
               <ol class="breadcrumb mb-4">
                   <li class="breadcrumb-item active">Dashboard</li>
               </ol>
               <hr/>
                <!-- Dashboard content -->
                <div class="row">
                    <div class="col-md-6">
                    
                        <?php insert_categories();?>

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="cat-title">Add Category</label>
                            <input type="text" class="form-control" name="cat_title">
                        </div><br/>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form><br/>

                        <!-- INCLUDE UPDATE_CATEGORIES FILE HERE -->
                        <?php include "includes/update_categories.php"; ?>

                    </div><!-- End of category Section -->
                    <div class="col-md-6">

                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Categories' Data
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Title</th>
                                            <th>Created Date</th>
                                            <th>Operation</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php findAllCategories(); ?>

                                    <!-- Calling function for deleting here -->
                                    <?php deleteCategories(); ?> 
                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </main>
       <footer class="py-4 bg-light mt-auto">
           <div class="container-fluid px-4">
               <div class="d-flex align-items-center justify-content-between small">
                   <div class="text-muted">Copyright &copy; Green Around You 2021</div>
               </div>
           </div>
       </footer>
   </div>
</div>

<?php include "includes/footer.php";?>