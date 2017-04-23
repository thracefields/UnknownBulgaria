<?php $title = 'Непознатата България / Промяна на снимка'; ?>
<?php include('./header.php'); ?>

<form  action="image.php" method="post" class="pure-form" enctype="multipart/form-data">
                   <fieldset>
                    <legend>Промяна на снимка</legend>
                     <label for="image">Моля, изберете нова снимка:</label>
                     <input type="file" id="image" name="image" >

                     <input class="pure-button pure-button-primary" type="submit" name="submit" value="Промени">
                   </fieldset>
</form>

<?php
if(isset($_POST["submit"])) {
    $my_file = new ImageUploader($_FILES['image']);

$my_file->sendTo = './assets/images/uploads/';
$my_file->maxSize = 26;
$my_file->imageName = time();
$upload = $my_file->uploadImage(); 
if ($upload->isUploaded) {
    $_SESSION['success'] = 'Успешно променихте снимката си.';
    header('Location: /');
} else {
    echo $upload->errorMessage;
}
$imageURL = mysqli_query($connect, "UPDATE users SET image = '$upload->uploadedName' WHERE id = ". $_SESSION['id']);
}
?>
<?php include('./footer.php'); ?>
