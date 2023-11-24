<?php 


$conn = mysqli_connect("localhost","root","","STUDENT_MANAGEMENT");

if (mysqli_connect_errno()) {
    die("". mysqli_connect_error());
}




?>

<!-- 

DATABASE NAME "STUDENT MANAGEMENT"

table name = "student_info"{
    stud_id 
    stud_name
    stud_section
    stud_grade
    stuf_strand
    stud_cp_num
    stud_usn_oed
    stud_pass_oed
}

table name = "admin_accounts"{
    admin_id
    admin_username
    admin_gmail
    admin_password
}


 -->