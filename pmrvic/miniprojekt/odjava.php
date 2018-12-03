<?php
	require "classes/Page.php";
	
	class Index extends Page
	{
		protected function GetContent()
		{
			$output = '';
			
			$output .= '<h1>Odjava</h1>';
			$output .= '<p>Odjavljeni ste.</p>';
			
			return $output;
		}
		
		protected function PageRequiresAuthenticUser()
		{
			return false; // ne zahjeva jer je ovo landing page!
		}
	}

	$site = new Index();
        $_SESSION["authenticated"]=null;
        unset($_SESSION["authenticated"]);
        session_unset();
        session_destroy();
        $site->BackToLanding();
        
	$site->Display('AlgebraBox Index');
        
        