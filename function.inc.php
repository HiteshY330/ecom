<?php 

function pr($arr){
	echo "<pre>";
	print_r($arr);

}
function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if ($str!='') {
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function get_product($con, $limit='',$cat_id='',$product_id=''){  

		
	$sql="SELECT * FROM product where status=1 order by id desc";
	if ($cat_id!='') {
		$sql= "SELECT * FROM product where `categories_id`= $cat_id ";
	}
	if ($product_id!='') {
		$sql= "SELECT * FROM product where `id`= $product_id ";
	}
	if ($limit!='') {
		$sql="SELECT * FROM product where status=1 LIMIT $limit";
	}
	$res = mysqli_query($con,$sql);
	$data=array();
	while ($row=mysqli_fetch_assoc($res)) {
		$data[]=$row;
	}
	return $data;
}


?>