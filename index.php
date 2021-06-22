<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

        <!-- Responsive navbar-->
        <?php include "includes/navigation.php"; ?>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <?php
                    $query = "SELECT * FROM posts";
                    $postResult = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($postResult)){
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_tags = $row['post_tags'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];

            ?>

                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php echo $post_title;?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2"><?php echo $post_date;?> by <?php echo $post_author;?></div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?php echo $post_tags;?></a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="images/<?php echo $post_image;?>" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php echo $post_content; ?></p>

                        </section>
                    </article>
            <?php

        }   
                    ?>

                    <!-- Comments section-->
                   
                </div>
                <!-- Side widgets-->
                
                <?php include "includes/sidebar.php"; ?>

            </div>
        </div>
 
<?php include "includes/footer.php";?>