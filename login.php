<?php
	session_start();

	require_once "includes/connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['email'];
		$haslo = $_POST['haslo'];

		$sql="SELECT * FROM users WHERE usersEmail='$login'AND usersPwd='$haslo'";

		if($result=@$polaczenie->query($sql));
		{
			$users=$result->num_rows;
			if($users>0)
			{
				$_SESSION['zalogowany'] = true;

				$row=$result->fetch_assoc();
				$_SESSION['usersEmail']=$rows['usersEmail'];
				$result->free_result();
				
				header("Location: index.php");
			}else{
				unset($_SESSION['blad']);
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: test.php');
			}
		}
		$polaczenie->close();
	}
	
	
?>