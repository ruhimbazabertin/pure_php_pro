<?php
function insert_categories(){

    global $connection;

if(isset($_POST['submit'])){
    $cat_title = $_POST['cat_title'];

    if($cat_title == "" || empty($cat_title)){

       echo "<h6 style='color: red'>This field can not be empty.</h6>";
    }else{
        $query = "INSERT INTO categories(cat_title) VALUES('{$cat_title}')";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
    }
   }

}

function findAllCategories(){

    global $connection;

    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);
  while($row = mysqli_fetch_assoc($select_categories)){
      $cat_id = $row['cat_id'];
      $title = $row['cat_title'];
  
  ?>
      <tr>
          <td><?php echo $cat_id ?></td>
          <td><?php echo $title ?></td>
          <td>17-06-2021</td>
          <td><a href='categories.php?delete=<?php echo $cat_id;?>'>Delete</td>
          <td><a href='categories.php?edit=<?php echo $cat_id;?>'>Edit</td>
      </tr>
      <?php

          }
}

function updateCategories(){

    global $connection;

    if(isset($_GET['edit'])){
        $cat_id = $_GET['edit'];
     $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
        $select_categories_update = mysqli_query($connection, $query);
     while($row = mysqli_fetch_assoc($select_categories_update)){
           $cat_id = $row['cat_id'];
           $title = $row['cat_title'];
           ?>
            <input value="<?php if(isset($title)){echo $title;} ?>" type="text" class="form-control" name="cat_title">
       <?php }}?>

       <!--Update Query-->

       <?php 
         if(isset($_POST['update'])){
            $cat_title = $_POST['cat_title'];
           $query = "UPDATE categories SET cat_title ='{$cat_title}' WHERE cat_id = {$cat_id}";
          $update_query = mysqli_query($connection, $query);
          if(!$update_query){
              die("QUERY FAILED".mysqli_error($connection));
          }
          }

}

function deleteCategories(){

    global $connection;

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
       $query = "DELETE FROM categories WHERE cat_id = {$id}";
      $delete_query = mysqli_query($connection, $query);
      header("Location: categories.php");
      }
}

?>