                     <div class="col-lg-4">
                    <!-- Search widget-->
                    <?php
                     // if(isset($_POST['submit'])){
                    //$search = $_POST['search'];
                   
                    //$query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                    //$search_query = mysqli_query($connection, $query);

                    //if(!$search_query){
                     //   die("QUERY FAILED".mysqli_error($connection ));
                    //}
                    //$count = mysqli_num_rows($search_query);
                    //if($count == 0){
                     //   echo "<h1>No Result</h1>";
                   // }else{
                     //   echo "<h1>The Result is there!</h1>";
                    //}
                     // }
                     ?>
                    <div class="card mb-4">
                    <form action="search.php" method="post">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input name="search" class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." />
                                <button type="submit" name="submit" class="btn btn-primary">Go!</button>
                            </div>
                        </div>
                       </form><!-- search form -->
                    </div>            
                    <!-- Categories widget-->
                    <div class="card mb-4">
                     <?php
                    $query = "SELECT * FROM categories";
                    $select_categories_sidebar = mysqli_query($connection, $query);
                
                ?>


                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                    <?php
                                    while($row = mysqli_fetch_assoc($select_categories_sidebar)){
                        $title = $row['cat_title'];
                        echo "<li><a href='#'>{$title}</a></li>";
                    }
                    ?>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Html</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <?php include "widget.php"; ?>