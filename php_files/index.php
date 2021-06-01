<?php
//this file show all user in marva
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($conn, "SELECT * FROM users"); // using mysqli_query instead
?>

<html>
<head>
    <title>נתוני משתמשים</title>
    <link rel="stylesheet" type="text/css" href="../css_files/index.css">
</head>

<body dir="rtl" >
  <img src="../marva-logo-israel.png"/>

  <h1>נתוני משתמשים</h1>
<center>  <h2> חיפוש לפי שם משתמש:</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="חיפוש שם" title="Type in a name"></center><br><br>
    <table id="myTable" width='80%' border=1>
        <tr class="header" bgcolor='#CCCCCC'>
            <th>שם משתמש</th>
            <th>סיסמא</th>

        </tr>
        <?php
        //loop to show user from db to html table
        while($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['password']."</td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">עדכן</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('אתה בטוח שברצונך למחוק?')\">מחק</a></td>";
            echo "</tr>";
        }
        ?>
    </table><br><br>
  <center><button><a href="registration.php">הוסף משתמש חדש</a></button>  </center>
<!--filter function to find user-->
    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
</html>
