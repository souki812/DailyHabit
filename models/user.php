
<?php

class User {
    
    private $db; // PDO connection
    private $first, $last, $email, $password, $gender, $age; // Credentials offered
    
    function __construct($db, $first, $last, $email, $password, $gender, $age ) {
        $this->db = $db;
        $this->first = $first;
        $this->last = $last; 
        $this->email = $email;
        $this->password = $password;
         $this->gender = $gender;
          $this->age = $age;
    }
    
   /** function select($id){
		return $this->db->query("select username,gender,age from users where user_id=$id");
	} **/
    
    // Attempt to add this user and return whether it worked
    function register() {
        $hash = password_hash($this->password, PASSWORD_DEFAULT);
        $insert = $this->db->prepare('insert into users(first,last,email,password,gender,age) values(:first,:last,:email,:password,:gender,:age)');
        $insert->bindParam(':first', $this->first, PDO::PARAM_STR);
        $insert->bindParam(':last', $this->last, PDO::PARAM_STR);
        $insert->bindParam(':email', $this->email, PDO::PARAM_STR);
        $insert->bindParam(':password', $hash, PDO::PARAM_STR);
        $insert->bindParam(':gender', $this->gender, PDO::PARAM_STR);
        $insert->bindParam(':age', $this->age, PDO::PARAM_INT);
        
        return $insert->execute();
    }
    
    // Attempt to return the ID of this user
    function login() {
        $select = $this->db->prepare('select * from users where email=:email');
        $select->bindParam(':email', $this->email, PDO::PARAM_STR);
        $select->execute();
        
        $row = $select->fetch(PDO::FETCH_ASSOC);
        if (isset($row) && password_verify($this->password, $row['password'])) {
            return $row['user_id'];
        } else {
            return NULL;
        }
    }
}