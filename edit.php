<?php
// var_dump($_POST['id']);

?>

<div class="header-edit">
    <h2>Editer !</h2>
    <form action="doedit_post.php" method="post" >
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input class="input-edit" type="text" class="class=input-create" name="content">
        <button class="input-valid-edit" type="submit">Valider les changements</button>
    </form>
</div>

<PHP><link rel="stylesheet" type="text/css" href="css/style.css"></head><PHP>