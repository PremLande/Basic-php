<html>
<title> REGISTRATION FORM </title>
<body>
<form action="form.php" method="get">
NAME: <input type="text" name="username"><br>
AGE: <input type=""text" name="age"><br>
<input type="submit">
</form>
<br>
YOUr NAME is <?php echo $_GET["username"] ?>
<br>
YOUr age is <?php echo $_GET["age"] ?>
</body>
</html>
