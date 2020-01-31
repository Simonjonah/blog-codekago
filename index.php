<?php
session_start();

// define("HOME", 'http://'.$_SERVER['HTTP_HOST'].pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME).'/');
define("HOME", 'http://'.$_SERVER['HTTP_HOST'].pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME).'/');
define("ASSETS", HOME.'assets/');

define("CSS", HOME.'css/');
define("JS", HOME.'js/');
define("IMAGES", HOME.'images/');

define("FONTS", HOME.'fonts/');

$page = isset($_GET['page'])?$_GET['page']:'';

$page = rtrim($page, '/');

require_once 'include/functions.php';
require_once '../include/database.php';

// if(check_notification()){
// 	notify();
// }

function set_status($type, $message){
	$_SESSION['status']['type'] = $type;
	$_SESSION['status']['message'] = $message;
}

function display_status(){
	if(isset($_SESSION['status'])){
		$status = $_SESSION['status'];
		if($status['type'] == 'success'){
			echo "<div style='text-align: center; font-type: tahoma; color: green;'>".$status['message']."</div>";
		}else{
			echo "<div style='text-align: center; font-type: tahoma; color: red;'>".$status['message']."</div>";
		}
		unset($_SESSION['status']);
	}
}


if($page == ''){


	$query = $conn->prepare("SELECT * FROM cuberfluxadmin");
	$query->execute();
	$posts = $query->fetchAll(PDO::FETCH_ASSOC);

	 if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty($_POST['contents'])){
			$add_comment = $conn->prepare("INSERT INTO cuberfluxadmin(contents) VALUES(:contents)");
			$add_comment->bindParam(':contents', $_POST['contents']);
			
			$add_comment->execute();
			if($add_comment->rowCount() > 0){
				//set_status('success', 'The comment "'.$add_comment['contents'].'" by '.$insert['contents'].' was deleted successfully.');
				display_status("The comment '".$_POST['contents']."' has been successfully added.", 'success');
			}else{
				display_status("The comment '".$_POST['contents']."' was not added.", 'error');
			}
		}else{
			display_status("Please fill all fields", 'error');

		}
	}


	
	
	require 'home.php';

//IF PAGE IS THE CONTACT PAGE
}elseif($page == 'add_posts'){
  
redirect_no_login();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty($_POST['name']) && !empty($_POST['topic']) && !empty($_POST['mess'])){
			$insert = $conn->prepare("INSERT INTO cuberfluxadmin(name, topic, mess) VALUES(:name, :topic, :mess)");
			$insert->bindParam(':name', $_POST['name']);
			$insert->bindParam(':topic', $_POST['topic']);
			$insert->bindParam(':mess', $_POST['mess']);
			$insert->execute();
			if($insert->rowCount() > 0){
				display_status("The Note '".$_POST['name']."' has been successfully added.", 'success');
			}else{
				display_status("The Note '".$_POST['topic']."' was not added.", 'error');
			}
		}else{
			display_status("Please fill all fields", 'error');

		}
	}




	require 'views/add_posts.php';
	// die();

}elseif($page == 'view_all_posts'){

	$query = $conn->prepare("SELECT * FROM cuberfluxadmin");
	$query->execute();
	$posts = $query->fetchAll(PDO::FETCH_ASSOC);

	require 'views/view_all_posts.php';


}elseif ($page =='add_comment') {



	require 'views/add_comment.php';

	
}elseif ($page == 'post') {



	$query = $conn->prepare("SELECT * FROM cuberfluxadmin");
	$query->execute();
	$posts = $query->fetchAll(PDO::FETCH_ASSOC);

	require 'post.php';

 }elseif($page == 'delete_post'){

	////redirect_no_login();

	$id = @$_GET['id'];

	if ($id != '') {
		//CHECK THAT THE NOTE EXISTS
		$insert = $conn->prepare("SELECT * FROM cuberfluxadmin WHERE id = :id");
		$insert->bindParam(':id', $id);
		$insert->execute();
		$insert = $insert->fetch(PDO::FETCH_ASSOC);


		//IF NOTE DOES NOT EXITS, REDIRECT TO APP HOME
		if($insert == false){
			set_status('error', 'The note you wanted to delete does not exist.');
			header('location:'.HOME.'view_all_posts');
			die();
		}


		$delete = $conn->prepare("DELETE FROM cuberfluxadmin WHERE id = :id");
		$delete->bindParam(':id', $id);

		$delete->execute();
		set_status('success', 'The note "'.$insert['topic'].'" by '.$insert['name'].' was deleted successfully.');
	}
	header('location:'.HOME.'view_all_posts');



}elseif ($page == 'edit_post') {
	// redirect_no_login();

	$id = @$_GET['id'];
	
	if ($id != '') {

		//CHECK IF FORM IS SUBMITTED
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			//CHECK THAT THE FIELDS ARE NOT EMPTY
			// if(@$_POST['name'] !='' ){
			if(!empty($_POST['name']) && !empty($_POST['topic']) && !empty($_POST['mess'])){
				$edit_post = $conn->prepare("UPDATE cuberfluxadmin SET name = :name, topic = :topic, mess = :mess WHERE id = :id");
				$edit_post->bindParam(':name', $_POST['name']);
				$edit_post->bindParam(':topic', $_POST['topic']);
				$edit_post->bindParam(':mess', $_POST['mess']);
				$edit_post->bindParam(':id', $id);
			
				if ($edit_post->execute()) {
					$posts = $_POST;
					$posts['id'] = $id;
				}else{
					set_status('success', 'The note "'.$posts['topic'].'" by '.$posts['name'].' was deleted successfully.');
				}

			}else{
				set_status('error', 'Please fill all fields.');
			}
		}

		//CHECK THAT THE NOTE EXISTS

		$posts = $conn->prepare("SELECT * FROM cuberfluxadmin WHERE id = :id");
		$posts->bindParam(':id', $id);
		$posts->execute();
		$posts = $posts->fetch(PDO::FETCH_ASSOC);


		//IF NOTE DOES NOT EXITS, REDIRECT TO APP HOME
		if($posts == false){
			set_status('error', 'The note you wanted to edit does not exist.');
			header('location:'.HOME.'view_all_posts');
			die();
		}
	}

	require 'views/edit_post.php';
	
}elseif ($page =='about') {
	

	require_once 'about.php';

	
}elseif ($page == 'services') {


	require_once 'services.php';

}elseif ($page =='contact') {

		$query = $conn->prepare("SELECT * FROM user");
		$query->execute();
		$posts = $query->fetchAll(PDO::FETCH_ASSOC);
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if(!empty($_POST['username']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['password'])){
			$new_user = $conn->prepare("INSERT INTO user(username, lastname, useremail, password) VALUES(:username, :lastname, :useremail, :password)");
			$new_user->bindParam(':username', $_POST['username']);
			$new_user->bindParam(':lastname', $_POST['lastname']);
			$new_user->bindParam(':useremail', $_POST['useremail']);
			$new_user->bindParam(':password', $_POST['password']);

			$new_user->execute();
			if($new_user->rowCount() > 0){
				display_status("The Note '".$_POST['name']."' has been successfully added.", 'success');
			}else{
				display_status("The Note '".$_POST['topic']."' was not added.", 'error');
			}
		}else{
			display_status("Please fill all fields", 'error');

		}
	}


	require_once 'contact.php';

}elseif ($page =='posts_tables') {

	$notes = $conn->prepare("SELECT * FROM cyberfluxadmin");
	$notes->execute();
	$notes = $notes->fetchAll(PDO::FETCH_ASSOC);

	require 'views/posts_tables.php';
	
}elseif ($page =='services_table') {


	require 'views/services_table.php';

}elseif($page == 'login'){


	
		
		
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		if(isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != ''){

			$users = $conn->prepare("SELECT * FROM cyberfluxadmin WHERE username = :username");
			$users->bindParam(':username', $_POST['username']);
			$users->execute();
			$users = $users->fetch(PDO::FETCH_ASSOC);

			if($users != false){
				if(password_verify($_POST['pas'], $users['pas'])){
					$_SESSION['username'] = $_POST['username'];
					header('location:'.HOME.'add_posts');
				}else{
					display_status("Password is incorrect", 'error');
				}
			}else{
				display_status("Username does not exist", 'error');
			}
		}else{
			display_status("Please fill all fields", 'error');
		}
	}
	

				
	require 'about.php';
	// die();

}elseif ($page == 'register') {

		 if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty($_POST['username']) && !empty($_POST['pas'])){

			if($users == false){
			$_POST['pas'] = password_hash($_POST['pas'], PASSWORD_DEFAULT);

			$insert = $conn->prepare("INSERT INTO cuberfluxadmin(username, pas) VALUES(:username, :pas)");
			$insert->bindParam(':username', $_POST['username']);
			$insert->bindParam(':pas', $_POST['pas']);
			
			$insert->execute();
			if($insert->rowCount() > 0){
				display_status("Welcome  '".$_POST['username']."' has been successfully added.", 'success');
				$_SESSION['username'] = $_POST['username'];
					header('location:'.HOME. 'add_posts');
			}else{
				display_status("The Note '".$_POST['pas']."' was not added.", 'error');
			}
		}else{
			display_status("Please fill all fields", 'error');

		}
	}
}


	require 'views/register.php';

}elseif ($page =='logout') {


	logout();

	require 'views/logout.php';


}else{

	require 'views/404.php';

}
