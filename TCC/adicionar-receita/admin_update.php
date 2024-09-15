<?php

@include 'configproduto.php';

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_ingredientes = $_POST['product_ingredientes'];
   $product_preparo = $_POST['product_preparo'];
   $product_obs = $_POST['product_obs'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = '../uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_ingredientes) || empty($product_preparo) || empty($product_obs) || empty($product_image)){
      $message[] = 'Por favor preencha todos os campos!';    
   }else{

      $update_data = "UPDATE products SET name='$product_name', ingredientes='$product_ingredientes', preparo='$product_preparo', obs='$product_obs', image='$product_image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:admin_page.php');
      }else{
         $$message[] = 'Por favor preencha todos os campos!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">Update</h3>
      <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="Nome do produto">
      <input type="text" class="box" name="product_ingredientes" value="<?php echo $row['ingredientes']; ?>" placeholder="Ingredientes">
      <input type="text" class="box" name="product_preparo" value="<?php echo $row['preparo']; ?>" placeholder="Modo de preparo">
      <input type="text" class="box" name="product_obs" value="<?php echo $row['obs']; ?>" placeholder="Observações">
      <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="admin_page.php" class="btn">Voltar</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>