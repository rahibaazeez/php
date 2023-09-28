<?php
if(isset($_POST["submit"]))
{
    $name=$_POST['fname'];
    if(empty($name))
    {
        echo "Name is empty";
    } else
    {
        echo $name;
    }
}
?>
<html>
    <body>
        <form method="post">
            Name: <input type="text" name="fname">
            <button type="submit" name="submit" >Submit</button>
        </form>
    </body>
</html>