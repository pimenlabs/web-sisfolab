<?php  session_start();
if (session_is_registered('username'))
{	
}else{
	?><script language="javascript">
	document.location="index.php";
	</script>
	<?php 
}
?>