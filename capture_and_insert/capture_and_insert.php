<html>
<body>
<form action="capture_and_insert.php" method="post">
<h1>
     Firstname:<input type="text" name="fn"/>
     Lastname:<input type="text" name="ln"/>
     Phone<input type="text" name="phone"/>
     Age<select name="age">
        <?php
               for($i=1;$i<=70;$i++)
                 echo "<option value=$i>$i      
				       </option>";
		?>
		</select><br/><br/>
		
Gender<br/><input type="radio" name="gen" value='m'/>Male<br/>	
<input type="radio" name="gen" value='f'/>Female<br/><br/>

Employed<input type="checkbox" name="employed"value="Y"/>
</h1>

<input type="submit" name="submit"/>
</form>
</body>
</html>

<?php
      if(isset($_POST["submit"]))
      {
		 $con=mysql_connect("localhost","root","");
		 if(!$con)
		    die('Could not connect'.mysql_error());
	     mysql_select_db("mydb2",$con);
	
	    if(isset($_POST["employed"]))
	      $emp='Y';
	    else
	      $emp='N';  
	      
	      
	          $sql="INSERT INTO contacts VALUES
         (
		     '$_POST[fn]','$_POST[ln]','$_POST[age]',
		     '$_POST[phone]','$_POST[gen]','$emp' 
		 )";
		 
        if(mysql_query($sql,$con))
           echo "1 record added";
        else
 	     die('Error'.mysql_error());
       mysql_close($con);		     
    }
?>


  