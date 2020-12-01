<?php
	include('header.php');
	require_once('../model/db.php');
	define('Delete', TRUE);

	$conn = getConnection();
	$sql = 'select * from user';
	$result = mysqli_query($conn, $sql);
?>
	if(isset($_GET['msg'])){

		if($_GET['msg'] == "invalid_user"){
			echo "username/password not valid...";
		}

		if($_GET['msg'] == "null_username"){
			echo "Username field is empty...";
		}

		if($_GET['msg'] == "null_password"){
			echo "Password field is empty...";
		}
	}

	/*if(isset($_COOKIE['rm'])){
		header('location: home.php');
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
	<title>Login Page</title>
</head>
<body>
	<h1>Welcome home, </h1>
	<a href="create.php">Create New User</a> |
	<a href="profile.php">Profile</a> |
	<a href="userlist.php">User List</a> |
	<a href="../php/logout.php">logout</a>

	<h3>User list</h3>
	<table border="1"> 
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>EMAIL</td>
			<td>TYPE</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>

	<?php while($data = mysqli_fetch_assoc($result)){ ?>

			<tr>
				<td><?=$data['id']?></td>
				<td><?=$data['username']?></td>
				<td><?=$data['password']?></td>
				<td><?=$data['email']?></td>
				<td><?=$data['type']?></td>
				<?php $id = $data['id'] ?>;
				<td><a href="edit.php?msg=<?php echo urlencode($id)?>">Edit</a></td>
				<td><a href="../php/delete.php?msg=<?php echo urlencode($id)?>">Delete</a></td>
			</tr>
	<?php } ?>

	</table>


	<form method="post" action="../php/loginCheck.php">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" ></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>