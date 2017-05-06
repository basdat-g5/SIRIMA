 <!DOCTYPE html>
 <html>
	 <body>
		 <form name="form1" id="form1" action="" method="post">
			 <select name="selectid" Id="select">
				 <option value="">--- Select ---</option>
				 <?php
					 // postgresql database connection
					 include ('dbconfig.php');

					 $list = pg_query($conn, "select * from sirima.jenjang");

					 while($row_list=pg_fetch_assoc($list)) { 
					?>
				 <option value=<?php echo $row_list["nama"]; ?>>
				 <?php echo $row_list["nama"]; ?> 
				 </option>
				 <?php
				 }
				 ?>
			 </select>
			 <button type="submit" name="submit" >Submit</button> 
		 </form>
	 </body>
 </html>