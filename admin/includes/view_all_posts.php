                    <!-- TABLE FOR ALL POSTS HERE--->
                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Green Around You Posts
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Author</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Tags</th>
                                            <th>Comment</th>
                                            <th>Created_At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $query = "SELECT * FROM posts";
                                        $select_posts = mysqli_query($connection, $query);
                                      while($row = mysqli_fetch_assoc($select_posts)){
                                          $post_id = $row['post_id'];
                                          $post_author = $row['post_author']; 
                                          $post_title = $row['post_title'];
                                          $post_category_id = $row['post_category_id'];
                                          $post_status = $row['post_status'];
                                          $post_image= $row['post_image'];
                                          $post_tags = $row['post_tags'];
                                          $post_comment = $row['post_comment_count'];
                                          $post_date = $row['post_date'];
                                          ?>
                                         <tr>
                                            <td><?php echo "$post_id"; ?></td>
                                            <td><?php echo "$post_author"; ?></td>
                                            <td><?php echo "$post_title"; ?></td>
                                            <td><?php echo "$post_category_id"; ?></td>
                                            <td><?php echo "$post_status"; ?></td>
                                            <td><img width='100' src='../images/<?php echo "$post_image";?>'/></td>
                                            <td><?php echo "$post_tags"; ?></td>
                                            <th><?php echo "$post_comment"; ?></th>
                                            <th><?php echo "$post_date"; ?></th>
                                      </tr>
                                    <?php
                                      }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- END OF POSTS HERE -->