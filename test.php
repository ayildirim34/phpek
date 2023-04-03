<?php

include('./template/navbar.php'); 
/*
require_once('./app/table/QueryProvider.php');
$qp = new QueryProvider();
//$sqlQuery = 'INSERT INTO users (email ,password, isAdmin) VALUES (:email,:password,:isAdmin)';
//$arrayBind = [':email'=>'myemail@gmail.com',':password'=>'sajhdjadd',':isAdmin'=>true];
//$userId = $qp->insertQuery($sqlQuery,$arrayBind);
//$updateQuery = 'UPDATE users SET email= :email , password = :password , isAdmin= :isAdmin WHERE id = :id';
//$arrayUpdateBindValue = [':email'=>'newEmail@gmail.com' , ':password' => 'ewpass' , ':isAdmin' => false , ':id'=>1];
//$qp->updateQuery($updateQuery,$arrayUpdateBindValue);
//$deleteQuery = 'DELETE FROM users WHERE id = :id';
//$arrayBindDelete = [':id'=>3];
//$qp->deleteQuery($deleteQuery,$arrayBindDelete);
$selectQuery = 'SELECT * FROM users WHERE 1';
$answerSelectQurey = $qp->selectQuery($selectQuery);
*/
//use App\Table\UserTable;

//require_once('./app/table/UserTable.php');
//$myUser = new UserTable();
//$myUser->insert('ahmet4@gmail.com', 'aa11', false);
//$myUser->updatePassword('12345', 28);
//$myUser->delete(23);
//$myUser->updateAdmin(28, true);
?>

<div class="container pt-3">
    <h3>DAA Ahmet Yildirim</h3>
   
</div>



<?php include('./template/footer.php'); ?>;
