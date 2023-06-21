<?php require_once('connection.php');?>

<?php
$connection = mysqli_connect('localhost','root','','register');
$db = mysqli_select_db($connection,'register');

if(isset($_POST['submit']))
{
     $ID = $_POST['id'];

    $query = "UPDATE entry_details SET username='$_POST[username]',first_name='$_POST[fname]', last_name='$_POST[lname]',email='$_POST[email]', phone_number='$_POST[Phone]' where id ='$_POST[id]' ";
    $query_run =mysqli_query($connection,$query);

    if($query_run)
    {
       echo '<script type="text/javascript"> alert("Data Updated")</script>';
       header ('Location: ../../PROJECT/html/user.html');
   
    }
    // else
    // {
    //     echo '<script type="text/javascript"> alert("Data not Updated")</script>';
    // }
}    
?>