<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $name = $_POST['name'];
  $password = $_POST['password'];

    // checking empty fields
    if(empty($name) || empty($password)) {
        if(empty($name)) {
            echo "<font color='red'>שדה השם ריק.</font><br/>";
        }

        if(empty($password)) {
            echo "<font color='red'>שדה הסיסמא ריק.</font><br/>";
        }
    } else {
        //updating the table
        $result = mysqli_query($conn, "UPDATE users SET name='$name',password='$password' WHERE id=$id");

        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $password = $res['password'];
}
?>
<html>
<head>
    <title>עידכון נתוני משתמש</title>
</head>

<body dir="rtl">
    <a href="index.php">חזרה לדף הבית</a>
    <br/><br/>

    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>שם משתמש:</td>
                <td><input type="text" name="name" value="שם משתמש:"></td>
            </tr>
            <tr>
                <td>סיסמא:</td>
                <td><input type="text" name="password" value="סיסמא:"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="עדכן"></td>
            </tr>
        </table>
    </form>
</body>
</html>
