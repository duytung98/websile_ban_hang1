<?php
    $host = "localhost";
    $username  = "root";
    $password = "";
    $dbname = "csdldemo";
    
    $conn = new mysqli($host, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("kết nối không thành công".$conn->connect_error);
    }
    else{
        
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $p = $_POST['password'];
        if(!empty($email)&&!empty($p)&&!empty($fullname)){
            echo "<pre>";
            
            $sql = "insert into `users` (`fullname`, `email`, `password`) values('$fullname', '$email',md5'$p')";
            if($conn->query($sql) === true){
                echo "Đăng ký thành công";
                echo "<pre>";
                echo "Bạn có muốn đăng nhập không?  <a href='login.html'> Đăng nhập </a>";
                echo "<pre>";
                echo "<a href='Trangchu1.html'> Quay lại trang chủ </a>";
            }else{
                echo "lỗi{$sql}".$con->error;
            }
        }else{
            echo"Bạn cần nhập đủ thông tin";
        }
    }
?>