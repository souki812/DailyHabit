
<?php

class User {
    
    private $db; // PDO connection
    
    function __construct($db) {
        $this->db = $db;
    }
    
   /** function select($id){
		return $this->db->query("select username,gender,age from users where user_id=$id");
	} **/
    
    // Attempt to add this user and return whether it worked
    function register($first, $last, $email, $password, $gender, $age) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $insert = $this->db->prepare('insert into users(first,last,email,password,gender,age) values(:first,:last,:email,:password,:gender,:age)');
        $insert->bindParam(':first', $first, PDO::PARAM_STR);
        $insert->bindParam(':last', $last, PDO::PARAM_STR);
        $insert->bindParam(':email', $email, PDO::PARAM_STR);
        $insert->bindParam(':password', $hash, PDO::PARAM_STR);
        $insert->bindParam(':gender', $gender, PDO::PARAM_STR);
        $insert->bindParam(':age', $age, PDO::PARAM_INT);
        
        return $insert->execute();
    }
	
	function newsfeed($comment, $id){
		$insert = $this->db->prepare("insert into newsfeed(comment,user_id) values(:comment,:user_id)");
        $insert->bindParam(':comment', $comment, PDO::PARAM_STR);
		//$insert->bindParam(':date', $date, PDO::PARAM_STR);
		$insert->bindParam(':user_id', $id, PDO::PARAM_INT);
		return $insert->execute();
	}
	
	
	function bio($id, $biography){
		
		$insert = $this->db->prepare("UPDATE users SET biography=:biography WHERE user_id=$id");
        $insert->bindParam(':biography', $biography, PDO::PARAM_STR);
		return $insert->execute();
	}
	
		
	function current($current, $id){
		
		$insert = $this->db->prepare("insert into current(current,user_id) values(:current,:user_id)");
        $insert->bindParam(':current', $current, PDO::PARAM_STR);
		$insert->bindParam(':user_id', $id, PDO::PARAM_INT);
		return $insert->execute();
	}
		
	function achieved($achieved, $id){
		
		$insert = $this->db->prepare("insert into achieved(achieved,user_id) values(:achieved,:user_id)");
        $insert->bindParam(':achieved', $achieved, PDO::PARAM_STR);
		$insert->bindParam(':user_id', $id, PDO::PARAM_INT);
		return $insert->execute();
	}
		
	function future($future, $id){
		
		$insert = $this->db->prepare("insert into future(future,user_id) values(:future,:user_id)");
        $insert->bindParam(':future', $future, PDO::PARAM_STR);
		$insert->bindParam(':user_id', $id, PDO::PARAM_INT);
		return $insert->execute();
	}
    
    // Attempt to return the ID of this user
    function login($email, $password) {
        $select = $this->db->prepare('select * from users where email=:email');
        $select->bindParam(':email', $email, PDO::PARAM_STR);
        $select->execute();
        
        $row = $select->fetch(PDO::FETCH_ASSOC);
        if (isset($row) && password_verify($password, $row['password'])) {
            return $row['user_id'];
        } else {
            return NULL;
        }
    }
}