<html>
    <body>
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDB";

        $conn = mysqli_connect($server, $username, $password, $dbname);

        if(isset($_POST['submit'])) {
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['phone'])) {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];

                $query = "insert into form(firstname, lastname, email, address, phone) values('$firstname', '$lastname', '$email', '$address', '$phone')";

                $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

                if($run) {
                    echo "Form submitted successfully!";
                }
                else {
                    echo "Error occured!";
                }
            }
            else {
                echo "All fields required!";
            }
        }
        ?>
    </body>
</html>