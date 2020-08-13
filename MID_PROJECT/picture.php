<?php 
				session_start();
				if(isset($_POST['sub']))
				{
						$filedir=$_SESSION['username'].".png";
						var_dump($_FILES);
						if(move_uploaded_file($_FILES['pic']['tmp_name'], $filedir)){
						echo "Done";
						
						}
						else
						{
							echo "error";
						}
						header("location: profile.php");
				}

				
			?>