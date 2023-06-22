<?php
    //lấy dữ liệu từ form gọi lên
    $u = $_POST['email'];
    $p = $_POST['password'];
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "csdldemo";
    // $con = new mysqli($host, $username, $password, $dbname);
    // if ($con->connect_error){
    //     die("Kết nối không thành công".$con->connect_error);
    // }
    // echo"kết nối thành công"
    // kết nối dữ liệu
    $db = mysqli_connect($host, $username, $password, $dbname);

    // truy vấn dữ liệu- tìm emaill có trong csdl ko?
    $sql = "SELECT * FROM users WHERE email='$u' and password= '$p'";
    // // thực thi truy vấn
    $rs = mysqli_query($db,$sql);

    if(mysqli_num_rows($rs)>0){
        echo "Đăng nhập thành công";
        echo "<pre>";
        echo "<a href='Trangchu1.html'> Quay lại trang chủ </a>";
    }else{
        echo "<h2>Tên email hoặc mặt khẩu sai vui lòng nhập lại</h2>";
    }
    

?>