<?PHP
  
if (isset($_POST['UserName'])) {
    $UserName = $_POST['UserName'];
} else {
    $UserName = null;
}
  
if (isset($_POST['Password'])) {
    $Password = $_POST['Password'];
} else {
    $Password = null;
}
  
var_dump($UserName . " Is And Password Is " . $Password);
echo $UserName . " Is And Password Is " . $Password
  
?>
