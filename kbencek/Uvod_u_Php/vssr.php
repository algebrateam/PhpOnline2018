<?php

    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "todo");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
	}	
?>

<head>
	<title>ToDo List Application PHP and MySQL</title>
</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">ToDo List Application PHP and MySQL database</h2>
	</div>
	<form method="post" action="index.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>
</body>
</html>