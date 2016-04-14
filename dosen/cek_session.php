<?php  session_start();
if (session_is_registered('Nip'))
{	
}else{
	?><script language="javascript">
	document.location="index.php";
	</script>
	<?php 
}
?>