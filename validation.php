<?php
    if(isset($_POST['submit']))

    {
            $n=$_POST['fname'];
            $l=$_POST['lname'];
            $e=$_POST['email'];
            $p=$_POST['pass'];

            echo "<table border='1'>

            <tr>

            <th>FirstName</th>

            <th>LastName</th>

            <th>Email</th>

            <th>Password</th>

            </tr>";


echo"<tr>";

echo"<td>".$n."</td>";
echo"<td>".$l."</td>";
echo"<td>".$e."</td>";
echo"<td>".$p."</td>";



echo"<tr>";




    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/css">



    </script>
    <script type="text/javascript">
        function abc()
        {
            var a=document.getElementById('f');
            var b=document.getElementById('l');
            var c=document.getElementById('e');
            var d=document.getElementById('p');
             if(alpha(a,"please Enter Character Only"))
             {
                if(alpha1(b,"Please enter Character Only"))
                {
                    if(email(c,"Please Entere Proper Value in email"))
                    {
                        if(password(d,8))
                        {

                        }
                    }
                }
             }



            function alpha(elem,msg)
            {
                var d=/^[a-zaA-z]+$/
                if(elem.value.match(e))
                {
                    return true;
                }
                else
                {
                    alert(msg);
                    elem.focus();
                    return false;
                }
            }

            function alpha1(elem,msg)
            {
                var e=/^[a-zaA-z]+$/
                if(elem.value.match(d))
                {
                    return true;
                }
                else
                {
                    alert(msg);
                    elem.focus();
                    return false;
                }
            }
            function email(elem,msg)
            {
                var f=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
                if(elem.value.match(f))
                {
                    return true;
                }
                else
                {
                    alert(msg);
                    elem.focus();
                    return false;
                }
            }
            function password(elem,min)
            {
                var g=elem.value;
                if(g.length>=min)
                {
                    return true;
                }
                else
                {
                    alert("Please Enter More than" +min+ "Character");
                    elem.focus();
                    return false;
                }
            }





        }

    </script>
</head>
<body>
    <center>
    <form onsubmit="return abc()" method="post">
        Enter Firstname:-<input type="text" name="fname" id="f">
        <br>
        Enter Lastname:-<input type="text" name="lname" id="l">
        <br>
        Enter Email:-<input type="text" name="email" id="e">
        <br>
        Enter Password:-<input type="password" name="pass" id="p">
        <br>
        <input type="submit" name="submit" value="GO">

    </form>

</center>




</body>
</html>
