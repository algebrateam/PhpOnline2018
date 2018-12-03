<?php
	require "classes/Page.php";
	
	class Rege extends Page
	{
		protected function GetContent()
		{
                    $this->HandleFormData();
			$output = '';
			
			$output .= '<h1>Molim ispunite formu za registraciju</h1>';
			$output .= '<div><form method="POST">'
                            . '<p>ime: <input type="text" name="ime" required></p>'
                            . '<p>pass: <input type="password" name="pass" required></p>'
                            . '<input type="submit" name="regaj" value="Registriraj se!">'
                            
                            . '</form></div>';
			
			return $output;
		}
		
		protected function PageRequiresAuthenticUser()
		{
			return false; // ne zahjeva jer je ovo landing page!
		}

    public function HandleFormData() {
         if(isset($_POST['regaj']) && $_POST['ime']!='' && $_POST['pass']!=''){
            
            try{
              $this->_authenticator->CreateUser($_POST['ime'], $_POST['pass']);
              $this->_authenticator->AuthenticateUser($_POST['ime'], $_POST['pass']);
              $this->BackToLanding();
            }
            catch (Exception $e){
               return $e->getMessage();
            }
        }
    }

}

	$site = new Rege();
   
	$site->Display('AlgebraBox Registracija');
        
       
        //var_dump($_POST);