<?php
$connection=mysqli_connect("localhost","root",""); 
$db=mysqli_select_db($connection,"libdata");
$query = "delete from category where cat_id = $_GET[cid]";
$query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Category Deleted....");
window.location.href = "manageCategory.php";
</script>