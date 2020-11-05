<?php
	ob_start();
?>
<?php
		include '../include/connect.php';
		
		$id=$_REQUEST['cid'];
		$link->where('product_id',$id);
		$a=$link->update("product",array("product_delete"=>1));
		if($a)
		{
			header("location:../View-Product");
		}
		
?>