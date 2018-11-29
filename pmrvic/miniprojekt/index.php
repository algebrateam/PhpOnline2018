<?php
	require "classes/Page.php";
	
	class Index extends Page
	{
		protected function GetContent()
		{
			$output = '';
			
			$output .= '<h1>Dobrodošli u AlgebraBox</h1>';
			$output .= '<p>Pohranite svoje datoteke kod nas.</p>';
			
			return $output;
		}
		
		protected function PageRequiresAuthenticUser()
		{
			return false;
		}
	}

	$site = new Index();
	$site->Display('AlgebraBox Index');