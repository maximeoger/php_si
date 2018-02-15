<?php

echo"editer";

// var_dump($_POST['id']);

?>


<form action="doedit_post.php" method="post" >
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="text" class="class=input-create" name="content">
    <button type="submit">valider les changements</button>
</form>
