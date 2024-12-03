<html>

<head><title>STUDENT REGISTRATION</title></head>
<body>

<form action="reg.php" method="POST">

REGNO: <input type ="text" id="txtregno" name="txtregno" placeholder="Enter the students' First Name" size="50px" required><p>
FIRST NAME: <input type ="text" id="txtfn" name="txtfn" placeholder="Enter the students' First Name" size="50px" required><p>
LAST NAME: <input type ="text" id="txtln" name="txtln" placeholder="Enter the students' Last Name" size="50px" required><p>
GENDER:<input type ="radio" value="MALE" id="optgen" name="optgen" required>MALE<p>

       <input type ="radio" value="FEMALE" id="optgen" name="optgen" required>FEMALE<p>

DEPARTMENT: <input type ="text" id="txtdept" name="txtdept" placeholder="Enter the students' department" size="50px" required><p>

<input type="submit" value="SUBMIT RECORD">

</form>
</body>
</html>