<?php
$conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'exoy');
if (!$conn)
{
die('Connection failed ' . mysqli_error($conn));
}
if (isset($_POST['save'])) {
$name = $_POST['name'];
  $comment = $_POST['comment'];
  $sql = "INSERT INTO products (name, comment) VALUES ('{$name}', '{$comment}')";
  if (mysqli_query($conn, $sql)) {
  $id = mysqli_insert_id($conn);
$saved_product = '<div class="comment_box">
      <span class="delete" data-id="' . $id . '" >delete</span>
      <span class="edit" data-id="' . $id . '">edit</span>
      <div class="display_name">'. $name .'</div>
      <div class="comment_text">'. $comment .'</div>
  </div>';

  echo $saved_product;
  }
  else 
  {
  echo "Error: ". mysqli_error($conn);
  }

  exit();

}

// fshija te dhenat nga databaza
if (isset($_GET['delete'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM products WHERE id=" . $id;
  mysqli_query($conn, $sql);
  exit();
}

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $sql = "UPDATE products SET name='{$name}', comment='{$comment}' WHERE id=".$id;
  if (mysqli_query($conn, $sql)) {
    $id = mysqli_insert_id($conn);
    $saved_product = '<div class="comment_box">
      <span class="delete" data-id="' . $id . '" >delete</span>
      <span class="edit" data-id="' . $id . '">edit</span>
      <div class="display_name">'. $name .'</div>
      <div class="comment_text">'. $comment .'</div>
  </div>';
  
  echo $saved_product;}
  
  else {
  echo "Error: ". mysqli_error($conn);}
  
  exit();
}
// nxerrja e te dhenave nga databaza
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$products = '<div id="display_area">';
  while ($row = mysqli_fetch_array($result)) {
    $products .= '<div class="comment_box">
        <span class="delete" data-id="' . $row['id'] . '" >delete</span>
        <span class="edit" data-id="' . $row['id'] . '">edit</span>
        <div class="display_name">'. $row['name'] .'</div>
        <div class="comment_text">'. $row['comment'] .'</div>
    </div>';}
$products .= '</div>';

?>