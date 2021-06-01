<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($conn, "SELECT * FROM data2"); // using mysqli_query instead
?>

<html>
<head>
    <title> טבלת נתונים</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css_files/table.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body dir="rtl" >
  <img src="../marva-logo-israel.png"/>
  <h1>טבלת נתונים</h1>
<center><h2>סינון לפי קריטריון 1:</h2>
  <input id="myInput" type="text" placeholder="Search.."></center><br>
  <center><h2>סינון לפי קריטריון נוסף</h2>
    <input id="myInput2" type="text" placeholder="Search.."></center><br><br>
    <table width='80%' border=1 align="center" id="myTable">
      <thead>
        <tr class="header" bgcolor='#CCCCCC'>
            <th>שם</th>
            <th>פרויקט</th>
            <th>פרויקט משני 1</th>
            <th>פרויקט משני 2</th>
            <th>מספר משתתפים</th>
            <th>מהות פניה</th>
            <th>סוג סיוע</th>
            <th>משך פעילות</th>
            <th>עולה חדש</th>
            <th>סוג התעללות</th>
            <th>הגורם המתעלל</th>
            <th>חסר ישע</th>
            <th>הפונה</th>
            <th>ניצול שואה</th>
            <th>מין מטפל</th>
            <th>עיר</th>
            <th>תאריך</th>
        </tr>
      </thead>
        <?php
        //loop to show all details from db
        while($res = mysqli_fetch_array($result)) {?>
          <tbody id="myTable">
            <tr>
            <td><?php echo $res['name']?></td>
            <td><?php echo $res['project']?></td>
            <td><?php echo $res['project2']?></td>
            <td><?php echo $res['project3']?></td>
            <td><?php echo $res['mishta']?></td>
            <td><?php echo $res['mahut']?></td>
            <td><?php echo $res['siua']?></td>
            <td><?php echo $res['hour']?></td>
            <td><?php echo $res['ole']?></td>
            <td><?php echo $res['hitalelut']?></td>
            <td><?php echo $res['mitalel']?></td>
            <td><?php echo $res['yesha']?></td>
            <td><?php echo $res['Pone']?></td>
            <td><?php echo $res['shoa']?></td>
            <td><?php echo $res['metupal']?></td>
            <td><?php echo $res['city']?></td>
            <td><?php echo $res['Dates']?></td>

            <td><a href="delete2.php?id=<?php echo $res["id"]; ?>" onClick=\"return confirm('אתה בטוח שברצונך למחוק?')\">מחק</a></td>
          </tr>
        <?php }?>
    </table>
    <form method="post" action="export.php">
   <center><input type="submit" name="button1" value="ניקוי טבלה" />
     <input type="submit" name="export" class="btn btn-success" value="יצא לקובץ אקסל" /></center>
  </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    //filter function
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    $(document).ready(function(){
      $("#myInput2").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
</body>
</html>
