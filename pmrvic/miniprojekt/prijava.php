<?php
	require "classes/Page.php";
	
	class Index extends Page
	{
		protected function GetContent()
		{
			$output = '';
			
			$output .= '<h1>Dobrodošli u AlgebraBox</h1>';
			$output .= '<div><form method="POST">'
                            . '<p>ime: <input type="text" name="ime" required></p>'
                            . '<p>pass: <input type="password" name="pass" required></p>'
                            . '<input type="submit" name="prijava" value="Prijavi se!">'
                            
                            . '</form></div>';
			
			return $output;
		}
		
		protected function PageRequiresAuthenticUser()
		{
			return false; // ne zahjeva jer je ovo landing page!
		}
	}

	$site = new Index();
   
	$site->Display('AlgebraBox Prjava');
        
        if(isset($_POST['prijava']) && $_POST['ime']!='' && $_POST['pass']!=''){
            var_dump($_POST);
            try{
              //$site->_authenticator->CreateUser($_POST['ime'], $_POST['pass']);
              $site->_authenticator->AuthenticateUser($_POST['ime'], $_POST['pass']);
              header("Location: moje.php");
            }
            catch (Exception $e){
               return $e->getMessage();
            }
        }