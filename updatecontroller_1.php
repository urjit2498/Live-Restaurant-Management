<script language="JavaScript" type="text/javascript">
function checkUpdate(){
    return confirm('Are you sure ?');
}
</script>
<?php

include '\Connection.php';
//mysqli_autocommit($conn, FALSE);
if (!$conn) {
    die("connection error" . mysqli_connect_errno());
} else {

 $id=$_POST['txtid'];
$name=$_POST['txtname'];
//$flag = true;
//    $valid_formats = array("jpg", "jpeg", "png");
//    $max_file_size = 1024 * 1024 * 1;
//    $targetPath = "";
//    $flagFileUpload = FALSE;
//    if (isset($_FILES["FlCategory"]["type"])) {
//
//        $file_extension = strtolower(pathinfo($_FILES["FlCategory"]["name"], PATHINFO_EXTENSION));
//
//        if (($_FILES["FlCategory"]["size"] <= $max_file_size) && in_array($file_extension, $valid_formats)) {
//            if ($_FILES["FlCategory"]["error"] > 0) {
//                $flag = FALSE;
//                echo "Please enter valid photo: " . $_FILES["FlCategory"]["error"] . "<br/><br/>";
//            } else {
//                $sourcePath = $_FILES['FlCategory']['tmp_name']; // Storing source path of the file in a variable
//                $targetPath = './image/' . time() . '_' . uniqid() . '.' . $file_extension; // Target path where file is to be stored
//                $fileResult = move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file    
//                $flagFileUpload = TRUE;
//            }
//        }
//    }
// 
$query="UPDATE tbl_category  set category_name='".$name."'  where category_id='".$id."'";
//echo $query;
$result=mysqli_query($conn,$query);
if($result)
{
//    mysqli_commit($conn);
//         $show = mysqli_fetch_assoc($result);
    echo "update record";
    header("Location: ../AdminPage/cm1.php");
}
    else
    {
        echo "record not update";
        //header("Location: ../Admin Page/cm1.php?category not updated");
    }


      

}