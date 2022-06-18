<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] !='')
{
?>
<script>

	swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
		
	swal({
		title: "<?php echo $_SESSION['status']  ?>",
		icon: "<?php echo $_SESSION['status_code']  ?>",

		button: "Aww yiss!",
		});
</script>
	<?php

	unset($_SESSION['status'];)

	}
	?>
</body>
</html>