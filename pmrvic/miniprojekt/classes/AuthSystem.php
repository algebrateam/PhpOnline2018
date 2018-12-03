<?php

	//hashing algorithm constants
	define("PBKDF2_HASH_ALGORITHM", "sha256");
	define("PBKDF2_ITERATIONS", 1000);
	define("PBKDF2_SALT_BYTE_SIZE", 24);
	define("PBKDF2_HASH_BYTE_SIZE", 24);

	define("HASH_SECTIONS", 4);
	define("HASH_ALGORITHM_INDEX", 0);
	define("HASH_ITERATION_INDEX", 1);
	define("HASH_SALT_INDEX", 2);
	define("HASH_PBKDF2_INDEX", 3);

	class AuthSystem
	{
		private $databaseConnection;
		
		function __construct($dsn, $user = null, $pass = null, $options = null)
		{
			try 
			{
				$this->databaseConnection = new PDO($dsn, $user, $pass, $options);
			} 
			catch (PDOException $e) 
			{
				echo 'Connection failed: ' . $e->getMessage();
			}
			
			if(!$this->DataTablesExists())
				$this->CreateTables();
		}
		
		private function DataTablesExists()
		{
			
			try
			{
				if(!$this->databaseConnection->query("select 1 from users"))
                                {
					return false;  //bool tablica users postoji
                                }
				else
                                {
					return true;  //bool tablica users ne postoji
                                }
			}
			catch (PDOException $e)
			{
				return false;
			}
		}
		
		private function CreateTables()
		{
			$query = "";
			
			$query .= "CREATE TABLE users";
			$query .= "(";
			$query .= "id INT NOT NULL AUTO_INCREMENT,";
			$query .= "username VARCHAR(50) NOT NULL UNIQUE,";
			$query .= "hash VARCHAR(255) NOT NULL,";
			$query .= "PRIMARY KEY (id)";
			$query .= ");";
			
			$this->databaseConnection->exec($query);
			
			if(!$this->DataTablesExists())
			{
				var_dump($this->databaseConnection->errorInfo());
				throw new Exception("Error while creating database!");
			}
		}
		
		public function CreateUser($username, $password)
		{
			$hash = $this->create_hash($password);
			
			$query = "";
			
			$query .= "INSERT INTO users";
			$query .= "(username, hash)";
			$query .= "VALUES";
			$query .= "(:username, :hash);";
			
			$stmt = $this->databaseConnection->prepare($query);
			
			$stmt->bindParam(':username', $username, PDO::PARAM_STR, 50);
			$stmt->bindParam(':hash', $hash, PDO::PARAM_STR, 255);

			if(!$stmt->execute())
			{
				throw new Exception("Error while creating user!");
			}
		}
		
		public function AuthenticateUser($username, $password)
		{
			$query = "";
			
			$query .= "SELECT hash, id FROM users ";
			$query .= "WHERE username LIKE :username;";
			
			$stmt = $this->databaseConnection->prepare($query);
			
			$stmt->bindParam(':username', $username, PDO::PARAM_STR, 50);
			
			if($stmt->execute())
			{
				$data = $stmt->fetchAll();
				
				if(count($data) === 0)
				{
					$_SESSION["authenticated"] = false;
					return;
				}
				
				$hash = $data[0]['hash'];
				$id = $data[0]['id'];
				
				if($this->validate_password($password, $hash))
				{
					$_SESSION["authenticated"] = true;
					$_SESSION["username"] = $username;
					$_SESSION["userId"] = $id;
				}
				else
				{
					$_SESSION["authenticated"] = false;
				}
			}
			else
			{
				throw new Exception("Failed to prepare statement!");
			}
		}
		
		public function UserIsAuthentic()
		{
			if(isset($_SESSION["authenticated"]))
				return $_SESSION["authenticated"];
			else
				return false;
		}
		
		public function ChangeUserPassword($id, $newPassword)
		{
			$hash = $this->create_hash($newPassword);
			
			$query = "";
			
			$query .= " UPDATE users";
			$query .= " SET hash = :hash";
			$query .= " WHERE id = :id;";
			
			$stmt = $this->databaseConnection->prepare($query);
			
			$stmt->bindParam(':hash', $hash, PDO::PARAM_STR, 255);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);

			if(!$stmt->execute())
			{
				throw new Exception("Error while updating user password!");
			}
		}
		
		public function GetCurrentUserId()
		{
			return $_SESSION["userId"];
		}
		
		public function GetCurrentUserName()
		{
			return $_SESSION["username"];
		}
		
		///////////////////password hashing methods/////////////////
		/// Source: https://crackstation.net/hashing-security.htm //
		private function create_hash($password)
		{
			//$salt = base64_encode(mcrypt_create_iv(PBKDF2_SALT_BYTE_SIZE, MCRYPT_DEV_URANDOM));
		$salt=base64_encode(random_bytes(PBKDF2_SALT_BYTE_SIZE));	
                    return PBKDF2_HASH_ALGORITHM . ":" . PBKDF2_ITERATIONS . ":" .  $salt . ":" .
				base64_encode($this->pbkdf2(
					PBKDF2_HASH_ALGORITHM,
					$password,
					$salt,
					PBKDF2_ITERATIONS,
					PBKDF2_HASH_BYTE_SIZE,
					true
				));
		}

		private function validate_password($password, $correct_hash)
		{
			$params = explode(":", $correct_hash);
			if(count($params) < HASH_SECTIONS)
			   return false;
			$pbkdf2 = base64_decode($params[HASH_PBKDF2_INDEX]);
			return $this->slow_equals(
				$pbkdf2,
				$this->pbkdf2(
					$params[HASH_ALGORITHM_INDEX],
					$password,
					$params[HASH_SALT_INDEX],
					(int)$params[HASH_ITERATION_INDEX],
					strlen($pbkdf2),
					true
				)
			);
		}

		private function slow_equals($a, $b)
		{
			$diff = strlen($a) ^ strlen($b);
			for($i = 0; $i < strlen($a) && $i < strlen($b); $i++)
			{
				$diff |= ord($a[$i]) ^ ord($b[$i]);
			}
			return $diff === 0;
		}

		private function pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output = false)
		{
			$algorithm = strtolower($algorithm);
			if(!in_array($algorithm, hash_algos(), true))
				trigger_error('PBKDF2 ERROR: Invalid hash algorithm.', E_USER_ERROR);
			if($count <= 0 || $key_length <= 0)
				trigger_error('PBKDF2 ERROR: Invalid parameters.', E_USER_ERROR);

			if (function_exists("hash_pbkdf2")) {
				if (!$raw_output) {
					$key_length = $key_length * 2;
				}
				return hash_pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output);
			}

			$hash_length = strlen(hash($algorithm, "", true));
			$block_count = ceil($key_length / $hash_length);

			$output = "";
			for($i = 1; $i <= $block_count; $i++) {
				$last = $salt . pack("N", $i);
				$last = $xorsum = hash_hmac($algorithm, $last, $password, true);
				for ($j = 1; $j < $count; $j++) {
					$xorsum ^= ($last = hash_hmac($algorithm, $last, $password, true));
				}
				$output .= $xorsum;
			}

			if($raw_output)
				return substr($output, 0, $key_length);
			else
				return bin2hex(substr($output, 0, $key_length));
		}
		///////////////////password hashing methods/////////////////
	}