<?php session_start();

	require "AuthSystem.php";

	abstract class Page
	{
		public $_authenticator;
		public $_database;
		
		public function __construct()
		{
			$dsn = "mysql:host=localhost;dbname=box";
			$user = "root";
			$pass = "";
			
			$this->_authenticator = new AuthSystem($dsn, $user, $pass, null);
			
			$this->_database = new PDO($dsn, $user, $pass, null);
		}
		
		public function Display($title)
		{
			if($this->PageRequiresAuthenticUser() && !$this->UserIsAuthenticated())
				$this->BackToLanding();
			
			
			print('<!DOCTYPE html>');
			print('<html lang="hr">');
			print($this->GetHead($title));
			print('<body>');
			print($this->GetNavigation());
			print($this->GetContent());
			print('</body>');
			print('</html>');
		}
		
		public function BackToLanding()
		{
			header("Location: index.php");
		}
		
		private function UserIsAuthenticated()
		{
			return $this->_authenticator->UserIsAuthentic();
		}
		
		private function GetHead($title)
		{
			$output = '';
			$output .= '<head>';
			$output .= '<meta charset="utf-8">';
			$output .= '<title>'.$title.'</title>';
			$output .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">';
			$output .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">';
			$output .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>';
			$output .= '</head>';
			
			return $output;
		}
		
		private function GetNavigation()
		{
			$output = "";
			
			$output .= "<ul>";
			$output .= '<li><a href="index.php">Pocetna</a></li>';
			
			if($this->UserIsAuthenticated())
			{
				$output .= '<li><a href="moje.php">Moje datoteke</a></li>';
				$output .= '<li><a href="postavke.php">Moje postavke</a></li>';
				$output .= '<li><a href="odjava.php">Odjava</a></li>';
			}
			else
			{
				$output .= '<li><a href="prijava.php">Prijava</a></li>';
				$output .= '<li><a href="registracija.php">Registracija</a></li>';
			}
			$output .= "</ul>";
			return $output;
		}
				
		abstract protected function PageRequiresAuthenticUser();
		
		abstract protected function GetContent();
	}