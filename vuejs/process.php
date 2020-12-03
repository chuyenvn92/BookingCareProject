<?php
    $conn = new mysqli("localhost", "root", "chuyenvn99", "medkee");
    if($conn->connect_error){
        die("Connect Failed !" . $conn->connect_error);
    }
    
    $results = array('error'=>false);
    $action = '';

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }

    if($action == 'read'){
        $results['read'] = true;
        $sql = $conn->query("SELECT * FROM benhvien");
        $hospital = array();
        while($row = $sql->fetch_assoc()){
            array_push($hospital, $row);
        }
        $results['hospital'] = $hospital;
    }


    if($action == 'create'){
        $ten = $_POST['ten'];
        $diachi = $_POST['diachi'];
        $gioithieu = $_POST['gioithieu'];

        $sql = $conn->query("INSERT INTO benhvien (ten, diachi, gioithieu) VALUES ('$ten', '$diachi', '$gioithieu') ");

        if($sql){
            $results['message'] = "Thêm bệnh viện thành công";
        }else{
            $results['error'] = true;
            $results['message'] = "Thêm bệnh viện thất bại";
        }
    }

    if($action == 'update'){
        $id = $_POST['id'];
        $ten = $_POST['ten'];
        $diachi = $_POST['diachi'];
        $gioithieu = $_POST['gioithieu'];

        $sql = $conn->query("UPDATE benhvien SET ten = '$ten', diachi = '$diachi', gioithieu = '$gioithieu' WHERE id = '$id' ");

        if($sql){
            $results['message'] = "Cập nhật bệnh viện thành công";
        }else{
            $results['error'] = true;
            $results['message'] = "Cập nhật bệnh viện thất bại";
        }
    }

    if($action == 'delete'){
        $id = $_POST['id'];

        $sql = $conn->query("DELETE FROM benhvien WHERE id ='$id' ");

        if($sql){
            $results['message'] = "Xóa bệnh viện thành công";
        }else{
            $results['error'] = true;
            $results['message'] = "Xóa bệnh viện thất bại";
        }
    }
    echo json_encode($results);
?>