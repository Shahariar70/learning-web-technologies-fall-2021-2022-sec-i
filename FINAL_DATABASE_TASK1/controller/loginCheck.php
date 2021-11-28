<?php 
	session_start();

	if(isset($_POST['submit']))
	{

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
       // $isMatch = false;
		if($username != "")
		{
			        if($password != "")
			        {

	
		               $con = mysqli_connect('localhost', 'root', '', 'webtech');
                       $sql = "select * from gameseller where username = '{$username}' and password = '{$password}'";
                       $result = mysqli_query($con, $sql);
                       $data = mysqli_fetch_assoc($result);
                       print_r($data);

				       if($username == $data['username'] && $password == $data['password'])
				       {
				
					      setcookie('flag', 'true', time()+3600, '/');
					      header('location: ../views/homepage.html') ;
				       }	
				       else 
				        {
					      echo "invalid username/password";
			         	}
				    }   
        }
	}	   

   
?>