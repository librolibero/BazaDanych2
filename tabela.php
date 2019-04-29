<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body style="background-color: blue; color: white">
            
            <b>
                <center>Założono bazę danych i tabelę:</center>
            </b>
            
		<?php
			if( isset($_POST["id"]) ){
			        $id = $_POST["id"];	
                                $username = $_POST["username"];
				$password = $_POST["password"];					
$conn = new mysqli("localhost", "root", "vertrigo", "users");
$odp = $conn->query("INSERT INTO users(id, username, password) VALUES ('$id', '$username', '$password', )");
echo "<br>";
					if($odp){
						echo "Udało się!";
					}else {
						echo "Nie udało się dodać użytkownika";
					}
					
					$conn->close();
				}	
		?>
		
            
            
		
	</body>
</html>
