<?php
/**
 * Created by PhpStorm.
 * User: maximeoger
 * Date: 15/02/2018
 * Time: 12:18
 */

echo"do_edit";
//var_dump($_POST['id']);

if( empty($_POST_['edit']) && !isset($_POST['id']) ){
    header('Location: edit.php?nopostdataedit');
    exit;
}

require_once "connexion_db.php";

//var_dump($_POST);die();

$edit_query = " UPDATE
    `post`
SET
  `content` = :content
WHERE
id = :id
;";

$stmt = $conn->prepare($edit_query);
$stmt->bindValue(':content', $_POST['content']);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

header('Location: index.php');
