 <?php
include('connection.php');
if(isset($_POST['user']) && isset($_POST['pass'])){
    
    $email = mysqli_real_escape_string($cnx , $_POST['user']);
    $passw = mysqli_real_escape_string($cnx , $_POST['pass']);
    
    $sql = mysqli_query($cnx, "SELECT * FROM client
                               WHERE email_client = '$email'
                               AND passwd_client ='$passw'");
        
        if(mysqli_num_rows($sql) == 1){
        $data = mysqli_fetch_assoc($sql);

        $_SESSION['id'] = $data['id'];
        $_SESSION['email']   = $data['email'];

        
                    header("Location: Home.html");

        }else if(mysqli_num_rows($sql) == 0) {

           header("Location: inscription.html");

        }
}

?>