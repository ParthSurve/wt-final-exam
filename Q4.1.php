<html>
<head>
<title>PHP for procesing gross salary</title>
</head>
<body bgcolor = "red">
<center>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="salary" value="" placeholder="Enter basic salary: "/>
</td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
    {
        $b_sal = $_POST['salary'];

        if($b_sal < 1500)
        {
            $hra = 0.1 * $b_sal;
            $da = 0.9 * $b_sal;
            $g = $b_sal+$da+$hra;
            echo "Gross Salary : " .$g ."/-";
    
        }


        if($b_sal >= 1500)
        {
            $hra = 500;
            $da = 0.98 * $b_sal;
            $g = $b_sal+$hra+$da;
            echo "Gross Salary : " .$g ."/-";
    
        }
        return 0;
}
?>
</center>
</body>
</html>