<?php
	include "connect.php";
	$tenkhachhang = $_POST['tenkhachhang'];
	$sodienthoai = $_POST['sodienthoai'];
	$diachi = $_POST['diachi'];
	if(strlen($tenkhachhang) > 0 && strlen($diachi)>0 && strlen($sodienthoai)>0){
		$query = "INSERT INTO donhang(id,tenkhachhang,sodienthoai,diachi) VALUES (null,'$tenkhachhang','$sodienthoai','$diachi')";
		if(mysqli_query($conn,$query)){
			$iddonhang = $conn -> insert_id;
			echo $iddonhang;
		}else{
			echo "That bai";
		}
	}else{
		echo "ban hay kiem tra lai cac du lieu";
	}
?>