<?php
	$active="labor"; 
	$lang = get_lang();
	if (isset($_GET['labor_content_id'])&&!isset($_POST['submit'])) {
	$labor_content_id=$_GET['labor_content_id'];
	$labor = get_a_record('labor_content','labor_content_id',$labor_content_id);
	$labor_name1=get_a_record('labor','labor_id',$labor['labor_id']);
	$labor_name=get_all('labor');
	require('view/labor/change.php');
}elseif (isset($_GET['labor_content_id'])&&isset($_POST['submit'])) {
	$labor_content_id=$_GET['labor_content_id'];
	$labor_name=$_POST['name'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$labor_id=get_a_record('labor','labor_name',$labor_name);
	update('labor_content','labor_id',$labor_id['labor_id'],'labor_content_id',$labor_content_id);
	update('labor_content','title',$title,'labor_content_id',$labor_content_id);
	update('labor_content','content',$content,'labor_content_id',$labor_content_id);

	$labor = get_a_record('labor_content','labor_content_id',$labor_content_id);
	$labor_name1=get_a_record('labor','labor_id',$labor['labor_id']);
	$labor_name=get_all('labor');
$success="Thay đổi thành công !";
require('view/labor/change.php');


}

 ?>