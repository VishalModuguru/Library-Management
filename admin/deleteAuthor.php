<?php
$connection=mysqli_connect("localhost","root",""); 
$db=mysqli_select_db($connection,"libdata");
$query = "delete from authors where author_id = $_GET[aid]";
$query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Author Deleted....");
window.location.href = "manageAuthor.php";
</script>