<?php
echo "<script>
if (confirm('Are you sure you want to log out?? 😖')) 
{ 
   window.location='index.php?logout=1'; 
}
else
{
   window.location='dashboard.php';
}
</script>";

?>
