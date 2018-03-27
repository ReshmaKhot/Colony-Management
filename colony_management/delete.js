function delet(){
									
									
									<?php
								include("connection.php");
       							$del="delete from members where id=$test[id]";
            					$delst=mysqli_query($conn,$del);
            					if( !$delst)
								{
									echo mysqli_error($conn);
								} 
								else
								{
									?>
            					window.alert('Member Details deleted successfully');
							window.location.href = 'B.php';<?php
							
							
									
									
								}
							?>}