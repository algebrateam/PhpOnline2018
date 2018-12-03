<?php
	require "classes/Page.php";
	
	class Obrisi extends Page
	{
		protected function GetContent()
		{
			$this->HandleFormData();
			
			if(!isset($_GET["id"]) || $this->NotFileOwner($_GET["id"]))
				$this->BackToLanding();
				
			$fileId = $_GET["id"];
			
			$q = "SELECT name FROM files WHERE id = $fileId ;";
			
			foreach($this->_database->query($q) as $row)
			{
				$name = $row["name"];
			}
			
			
			$output = '';
			
			$output .= '<h1>Jeste li sigurni da želite izbrisati datoteku <b>'.$name.'</b>?</h1>';
			$output .= '<form method="post">';
			$output .= '<input type="hidden" name="fileId" value="'.$fileId.'"/>';
			$output .= '<input type="submit" name="btnSub" value="Da"/>';
			$output .= '</form>';
			$output .= '<a href="moje.php">Povratak</a>';
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
			
			$fileId = $_POST["fileId"];
			
			$q = "SELECT name FROM files WHERE id = $fileId ;";
			
			foreach($this->_database->query($q) as $row)
			{
				$name = $row["name"];
			}
			
			$path = $this->GetUploadPath().$name;
			
			$q = "DELETE FROM files WHERE id = $fileId";
			
			$this->_database->beginTransaction();
			
			if($this->_database->exec($q) !== 1)
			{
				echo "Pogreška pri brisanju datoteke!";
				$this->_database->rollBack();
				return;
			}
			
			if(!unlink($path))
			{
				echo "Pogreška pri brisanju datoteke!";
				$this->_database->rollBack();
				return;
			}
			
			$this->_database->commit();
			
			$this->BackToLanding();
		}
		
		private function NotFileOwner($fileId)
		{
			$ownerId = $this->_authenticator->GetCurrentUserId();
			
			$q = "SELECT 1 FROM files WHERE id = $fileId AND ownerId = $ownerId ;";
			
			$count = 0;
			
			foreach($this->_database->query($q) as $row)
			{
				$count++;
			}
			
			return $count === 0;
		}
		
		protected function PageRequiresAuthenticUser()
		{
			return true;
		}
	}

	$site = new Obrisi();
	$site->Display('AlgebraBox Brisanje datoteke');