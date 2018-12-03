<?php
	require "classes/Page.php";
	
	class Moje extends Page
	{
		protected function GetContent()
		{
			$this->HandleFormData();
			
			$output = '';
			
			$output .= $this->GetFileListTable();
			$output .= '<br/><br/>';
			$output .= '<h2>Dodaj novu datoteku</h2>';
			$output .= '<form method="post" enctype="multipart/form-data">';
			$output .= 'Odaberite datoteku:<input type="file" name="fileToUpload" id="fileToUpload"/>';
			$output .= '<input type="submit" value="Dodaj datoteku" name="btnSub"/>';
			$output .= '</form>';
			$output .= '';
			
			return $output;
		}
		
		private function GetUploadPath()
		{
			$user = $this->_authenticator->GetCurrentUserName();
			$base = getcwd();
			return "$base\\files\\$user\\";
		}
		
		private function HandleFormData()
		{
			if(!isset($_POST["btnSub"])) return;
			
			$path = $this->GetUploadPath();
			
			$filePath = $path.basename($_FILES["fileToUpload"]["name"]);
			
			if (file_exists($filePath)) 
			{
				echo "Datoteka već postoji.";
				return;
			}
			
			if(!file_exists($this->GetUploadPath()))
			{
				mkdir($this->GetUploadPath(), 0777, true);
			}
			
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filePath)) 
			{
				$name = $_FILES["fileToUpload"]["name"];
				$size = filesize($filePath);
				$ownerId = $this->_authenticator->GetCurrentUserId();
				$q = "INSERT INTO files (name, size, ownerId) VALUES (:name, :size, :ownerId);";
				
				if($stmt = $this->_database->prepare($q))
				{
					$stmt->bindParam(':name', $name, PDO::PARAM_STR, 255);
					$stmt->bindParam(':size', $size, PDO::PARAM_INT);
					$stmt->bindParam(':ownerId', $ownerId, PDO::PARAM_INT);
					
					if($stmt->execute())
					{
						echo "Datoteka uspješno dodana!";
					}
					else
					{
						var_dump($stmt->errorInfo());
						echo "Izvršavanje upita nije uspjelo!";
						unlink($filePath);
						return;
					}
				}
				else
				{
					echo "Priprema upita nije uspjela!";
					unlink($filePath);
					return;
				}
			} 
			else 
			{
				echo "Došlo je do pogreške u pohrani!";
			}
		}
		
		private function GetFileListTable()
		{
			$output = '';
			
			$output .= '<table border="1">';
			
			$ownerId = $this->_authenticator->GetCurrentUserId();
			
			$q = "SELECT * FROM files WHERE ownerId = $ownerId";
			$output .= '<tr><th>Ime</th><th>Veličina</th><th>Upravljanje</th></tr>';
			$count = 0;
			
			foreach($this->_database->query($q) as $row)
			{
				$name = $row["name"];
				$size = $row["size"];
				$id = $row["id"];
				$owner = $this->_authenticator->GetCurrentUserName();
				$fileLoc = "/files/$owner/$name";
				
				$ctrls = '<a href="uredi.php?id='.$id.'">Preimenuj</a> | <a href="obrisi.php?id='.$id.'">Obriši</a> | <a href="'.$fileLoc.'">Preuzmi</a>';
				
				$output .= "<tr><td>$name</td><td>$size B</td><td>$ctrls</td></tr>";
				
				$count++;
			}
			
			if($count === 0)
			{
				$output .= '<tr><td colspan="3">Nemate pohranjenih datoteka.</td></tr>';
			}
			
			$output .= '</table>';
			
			return $output;
		}
		
		protected function PageRequiresAuthenticUser()
		{
			return true;
		}
	}

	$site = new Moje();
	$site->Display('AlgebraBox Moje datoteke');