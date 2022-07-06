<?php 
  include 'connect.php';
?>

<?php 
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        
        $sql='DELETE from contact_messages WHERE id = :id';
        $result=$conn->prepare($sql);
        $result->bindValue(':id', $id);
        $count= $result->execute();
        echo $count;
        if($count > 0){
            // echo "Deleted successfully";
            header('location:backoffice.php');
        }else{
            echo 'ERROR';
        }
    }
?>