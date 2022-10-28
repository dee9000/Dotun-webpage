<?php
// if(isset($_GET['submit'])){
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingridients'];

// }

include('config/db_connect.php');


if(isset($_POST['submit'])){
    // echo htmlspecialchars($_POST['email']);   htmlspecialchars to prevent link infintration
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingridients']);

    //to make sure text exists in each field

    //check email
//     if(empty($_POST['email'])){
//         echo 'an email is needed <br/>';
//     } else {
//         echo htmlspecialchars($_POST['email']);
//     }
    
//      //check title
//     if(empty($_POST['title'])){
//         echo 'a title is needed <br/>';
//     } else {
//         echo htmlspecialchars($_POST['title']);
//     }

//    //check ingridents
//     if(empty($_POST['ingredients'])){
//         echo 'an ingredient is needed <br/>';
//     } else {
//         echo htmlspecialchars($_POST['ingredients']);
//     }

//}  end of _POST check.

$title = $email = $ingredients = '';
$error = ['email'=>'','title'=>'', 'ingredients'=>'']; //array error variable created to show each field



if(empty($_POST['email'])){
    $errors['email'] =  'an email is needed <br />';//the newly created error variable replaces echo to qeuate each field
} else {
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //filter validator used to check the email to ensure it is formatted correctly
        $errors['email'] = 'email must be a valid email address';//the newly created error variable replaces echo to qeuate each field

    }
}

if(empty($_POST['title'])){
    $errors['title'] =  'a title is needed <br />';
} else {
    $title = $_POST['title'];
    if(!preg_match('/^[a-zA-Z\s]+$/', $title)){ //regular expression (regex) method to check we don't have random characters
        $errors['title'] = 'must be letters and spaces only';
    }
}

if(empty($_POST['ingredients'])){
    $errors['ingredients'] =  'an ingredient is needed <br />';
} else {
    $ingredients = $_POST['ingredients'];
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
        $errors['ingredients'] = 'ingredients must be a comma separated list';
    }
}


//to check if any erros

if(array_filter($errors)){ //will check for errors and redirect below
    //echo 'there are errors in the form';

} else {

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $ingredients = mysqli_real_escape_string($conn,$_POST['ingredients']);

    // create sql
    $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')";

    //save to db and check
    if(mysqli_query($conn, $sql)){
        //success
        header('location: index.php');
    } else {
        //error
        echo 'query error: ' .msqli_error($conn);
    }

 
}


} // end of _POST check.



?>





<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
<form action="add.php" class="white" method="POST">
    <label >Your Email:</label>
    <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
    <div class="red-text"><?php echo $errors['email'];?></div>

    <label >Pizza Title:</label>
    <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
    <div class="red-text"><?php echo $errors['title'];?></div>

    <label >Ingredients (comma separated):</label>
    <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
    <div class="red-text"><?php echo $errors['ingredients'];?></div>

    <div class="center">
        <input type="submit" name="submit" vlaue="submit" class="btn brand z-depth-0">
    </div>
</form>
</section>


<?php include('templates/footer.php') ?>


    
</body>
</html>