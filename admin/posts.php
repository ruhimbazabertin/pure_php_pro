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
                <div class="col-md-12">
                    <!-- SPACE FOR CONTENT -->
                    <?php
                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    }else{
                        $source='';
                    }

                    switch($source){
                        case 'create_post';
                        include "includes/create_post.php";
                        break;
                        case '20';
                        echo "Good will";
                        break;
                        default:
                        include "includes/view_all_posts.php";

                    }
                    ?>
                    <!-- END OF SPACE FOR CONTENT -->
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