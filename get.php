<html>
    <body>
        <form  method="GET">
            Username:<input type="text" name="username"><br>
            Bloodgroup: <input type="text" name="bloodgroup"><br>
            <button type="submit" name="submit">Submit</button>

        </form>
    </body>
</html>
<?php
if(isset($_GET['submit']))
{
    $username=$_GET['username'];
    $bloodgroup=$_GET['bloodgroup'];
    echo "$username,$bloodgroup";
    
}

?>