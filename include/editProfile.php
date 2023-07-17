<?php
    session_start();
    $id = $_SESSION['id'];
    require_once "../include/db.php";

    if ($_SERVER['REQUEST_METHOD']== 'POST'){

        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $bio = $_POST['bio'];
        $age = $_POST['age'];
        
        
        if($_FILES['photo']['name'] == ''){

            $sql = "UPDATE `users` SET ";
            $sql .= "`username` = '$username', ";
            $sql .= "`fullname` = '$fullname', ";
            $sql .= "`email` = '$email', ";
            $sql .= "`bio` = '$bio', ";
            $sql .= "`age` = '$age' WHERE `id`= '$id' ";

            $result = mysqli_query($connection, $sql);

            $success = "Profile Updated";
            header('location: ../user/edit.php');
            return false;
        }else{
            $fileName = $_FILES['photo']['name'];
            $fileSize = $_FILES['photo']['size'];
            $fileTemp = $_FILES['photo']['tmp_name'];
            $fileExt = explode(".", $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowFormat = array('png', 'jpg', 'jpeg', 'gif');

            if(in_array($fileActualExt, $allowFormat)){
                if ($fileSize < 8000000){
                    $image = uniqid('', true) . '.' . $fileActualExt;
                    $location = 'dps/' . $image;
                    if(move_uploaded_file($fileTemp, $location)){
                        echo $image;
                        
                        $sql = "UPDATE `users` SET ";
                        $sql .= "`username` = '$username', ";
                        $sql .= "`fullname` = '$fullname', ";
                        $sql .= "`email` = '$email', ";
                        $sql .= "`bio` = '$bio', ";
                        $sql .= "`age` = '$age', ";
                        $sql .= "`photo` = '$image' WHERE `id`= '$id'";


                        $result = mysqli_query($connection, $sql);

                        $success = "Profile Updated";
                        header('location: ../user/edit.php');
                        return false;

                    }

                }else{
                    $error = "File too large!";
                    header('location: ../user/edit.php?error=' . $error);
                    return false;
                }
            }else{
                $error = "Invalid image format";
                header('location: ../user/edit.php?error=' . $error);
                return false;
            }
        }
        
    }else{
        $error = "Unauthorized Access";
        header('location: ../user/edit.php?error=' . $error);
        return false;
    }
    

?>