<?php
class Connexion{
    private $username;
    private $password;
    

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function desplay(){
        echo "username :". $_POST['username'] . "and Password :" . $_POST['pswd'];
        }
    }

if(!empty($_POST['submit'])){
$tp = new Connexion($_POST['username'], $_POST['pswd']);
$tp->desplay();
}
?>

<!doctype html>
<body>
    <form method="post"> 
    <input type="text" name="username" placeholder="username"> <br>
    <input type="password" name="pswd" placeholder="password"> <br>
    <input type="submit" name="submit" value="Display">
</form>
</body>