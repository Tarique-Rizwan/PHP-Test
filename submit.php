<?php include 'db.php'; ?>
<?php 
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    echo "Name: ". $name ."<br>";
    echo "Number: ". $number ."<br>";
    echo "Email: ". $email ."<br>";
    echo "Subject: ". $subject ."<br>";
    echo "Message: ". $message;
    
    $sql = "INSERT INTO cars  VALUES ('$name',
            '$number','$email','$subject','$message')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
}
?>