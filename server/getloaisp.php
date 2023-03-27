<?php
	include "connect.php";
	$query = "SELECT * FROM loaisanpham";
	$data = mysqli_query($conn,$query);
	$mangloaisp = array();
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($mangloaisp, new Loaisp(
			$row['id'],
			$row['tenloaisanpham'],
			$row['hinhanhsanpham']));
	}
	echo json_encode($mangloaisp);
	class Loaisp{
		public $id;
		public $tenloaisp;
		public $hinhanhsp;
		public function __construct($id,$tenloaisp,$hinhanhsp){
			$this->id = $id;
			$this->tenloaisp = $tenloaisp;
			$this->hinhanhsp = $hinhanhsp;
		}
	}
?>