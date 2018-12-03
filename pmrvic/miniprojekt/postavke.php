<?php
	require "classes/Page.php";
	
	class Postavke extends Page
	{
		protected function GetContent()
		{
			$this->HandleFormData();
			
			$output = '';
			
			$output .= '<form method="POST">';
			$output .= '<table>';
			$output .= '<tr><th>Promjena zaporke</th><td></td></tr>';
			$output .= '<tr><th>Nova zaporka:</th><td><input type="password" name="p1"/></td></tr>';
			$output .= '<tr><th>Ponovljena nova zaporka:</th><td><input type="password" name="p2"/></td></tr>';
			$output .= '<tr><th></th><td><input type="submit" name="btnSub" value="Promijeni zaporku"/></td></tr>';
			$output .= '</table>';
			$output .= '</form>';
			
			return $output;
		}
		
		private function HandleFormData()
		{
			if(!isset($_POST["btnSub"])) return;
			
			if($_POST["p1"] !== $_POST["p2"])
			{
				echo "Zaporke se moraju poklapati!";
				return;
			}
			
			$id = $this->_authenticator->GetCurrentUserId();
			$newPassword = $_POST["p1"];
			
			$this->_authenticator->ChangeUserPassword($id, $newPassword);
			
			echo "Zaporka promijenjena!";
		}
		
		protected function PageRequiresAuthenticUser()
		{
			return true;
		}
	}

	$site = new Postavke();
	$site->Display('AlgebraBox Moje postavke');