<?php include('condb.php'); 

$member_id =$_GET['member_id'];


$sql_delete="DELETE FROM member
WHERE member_id='$member_id'";
$result_delete = mysqli_query($conn,$sql_delete);


mysqli_close($conn);

echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
';		
if($result_delete){
    echo '
    <script>
       setTimeout(function() {
        swal({
            title: "สำเร็จ",
            text: "ลบข้อมูลสำเร็จ",
            type: "success"
        }, function() {
            window.location = "member.php";
        });
    }, 100);
</script>
';
}
else{
echo "<script type='text/javascript'>";
echo "alert('ลบข้อมูลไม่สำเร็จ');";
echo "window.location = 'member.php' ";
echo "</script>";
}

?>