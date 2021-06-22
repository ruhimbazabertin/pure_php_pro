<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php";?>

<div id="layoutSidenav">

<?php include "includes/layoutSideNav.php";?>
 
   <div id="layoutSidenav_content">
       <main>
           <div class="container-fluid px-4">
               <h1 class="mt-4">Dashboard</h1>
               <ol class="breadcrumb mb-4">
                   <li class="breadcrumb-item active">Dashboard</li>
               </ol>
                <!-- Dashboard content -->
                <?php include "includes/component.php"; ?>
                <?php include "includes/table.php";?>

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