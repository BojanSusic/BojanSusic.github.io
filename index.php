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
  
echo "TEST"
echo $UserName . " Is And Password Is " . $Password
  
?>
