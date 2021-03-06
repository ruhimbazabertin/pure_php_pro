           
                 <?php
                    
                    if(isset($_POST['create_post'])){

                    $title = $_POST['title'];
                    $post_category_id = $_POST['post_category_id'];
                    $post_author = $_POST['post_author'];
                    $post_status = $_POST['status'];

                    $post_image = $_FILES['image']['name'];
                    $post_image_temp = $_FILES['image']['tmp_name'];

                    $post_tags  = $_POST['post_tags'];
                    $post_date  = date('d-m-y');
                    $post_content = $_POST['post_content'];
                    $post_comment_count = 4;

                    move_uploaded_file($post_image_temp, "../images/$post_image");

                    $query = "INSERT INTO posts('post_title', 'post_category_id','post_author','post_status','post_image','post_tags','post_date', 'post_content', 'post_comment_count') VALUES(?,?,?,?,?,?,?,?,?)";
                    $insert_query = mysqli_query($connection, $query);

                    if(!$insert_query){
                        echo "QUERY FAIRED";
                    }

                    }
                  
                    ?>
                    
                    
                    
                    
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" class="form-control" name="title">
                        </div><br/>
                        <div class="form-group">
                            <label for="post_category_id">Post Category Id</label>
                            <input type="text" class="form-control" name="post_category_id">
                        </div><br/>
                        <div class="form-group">
                            <label for="post_author">Post Author</label>
                            <input type="text" class="form-control" name="post_author">
                        </div><br/>
                        <div class="form-group">
                            <label for="post_status">Post Status</label>
                            <input type="text" class="form-control" name="status">
                        </div><br/>
                        <div class="form-group">
                            <label for="image">Post Image</label>
                            <input type="file" class="form-control" name="image">
                        </div><br/>
                        <div class="form-group">
                            <label for="post_tags">Post Tags</label>
                            <input type="text" class="form-control" name="post_tags">
                        </div><br/>
                        <div class="form-group">
                            <label for="created_date">Created_At</label>
                            <input type="date" class="form-control" name="created_date">
                        </div><br/>
                        <div class="form-group">
                            <label for="post_content">Post Content</label>
                            <textarea class="form-control" name="post_content" cols="5" rows="5"></textarea>
                        </div><br/>
                        <div class="form-group">
                            <button type="submit" name="create_post" class="btn btn-primary">Create Post</button>
                        </div>
                    </form>