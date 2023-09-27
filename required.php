<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
Name: <input type="" name="name">
<span class="error">*<?php echo $nameErr;?></span>
<br> <br>
E-mail: <input type="text" name="email">
<span class="error">* <?php echo $emailErrr;?></span>
<br><br>
Website: <input type="text" name="website">
<br><br>
Comment: <textarea name="comment" id="" cols="40" rows="5"></textarea>
<br><br>
Gender: 
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="other"> Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="submit">
</form>

<?php
$nameErr = $emailErrr =$genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER['REQUEST_METHOD']=="POST"){
    if (empty($_POST['name'])){
        $nameErr = "Name is required";
    }
    else{
        echo $_POST['neme'];
    }
    if (empty($_POST['email'])){
        $emailErrr = "Email is required";
    }
    else{
        echo $_POST['email'];
    }
    if (empty($_POST['website'])){
        $website = "";
    }
    else{
        echo $_POST['website'];
    }
    if (empty($_POST['comment'])){
        $comment = "";
    }
    else{
        echo $_POST['comment'];
    }
    if (empty($_POST['gender'])){
        $genderErr = "Gender is required";
    }
    else{
        echo $_POST['gender'];
    }


}
?>
