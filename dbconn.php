<?php 

$conn = mysqli_connect("localhost","root","","STUDENT_MANAGEMENT");

if (mysqli_connect_errno()) {  
    printf("", mysqli_connect_error());
}else{  
    echo"connected";
}
?>