<?php 
	include 'inc/admin_header.php';
?>	
		<div class="content">
			<?php

				include 'config/dbconfig.php';

				$db = new Database();

				$query = "SELECT * FROM users";
				
			?>
		</div>
		
	</div>

</body>
</html>

<?php 
	include 'inc/footer.php';
?>	