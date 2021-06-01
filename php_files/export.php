<?php
//export.php to show data in excel
$connect = mysqli_connect("localhost", "root", "root", "marva");
$connect->set_charset("utf8");

$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM data2";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" dir="rtl">
                    <tr>
                    <th>תאריך</th>
                    <th>עיר</th>
                    <th>מין מטופל</th>
                    <th>ניצול שואה</th>
                    <th>הפונה</th>
                    <th>חסר ישע</th>
                    <th>הגורם המתעלל</th>
                    <th>סוג התעללות</th>
                    <th>עולה חדש</th>
                    <th>משך פעילות</th>
                    <th>סוג סיוע</th>
                    <th>מהות פניה</th>
                    <th>מספר משתתפים</th>
                    <th>פרויקט משני 2</th>
                    <th>פרויקט משני 1</th>
                    <th>פרויקט</th>
                    <th>שם</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
    <td>'.$row["Dates"].'</td>
    <td>'.$row["city"].'</td>
    <td>'.$row["metupal"].'</td>
    <td>'.$row["shoa"].'</td>
    <td>'.$row["Pone"].'</td>
    <td>'.$row["yesha"].'</td>
    <td>'.$row["mitalel"].'</td>
    <td>'.$row["hitalelut"].'</td>
    <td>'.$row["ole"].'</td>
    <td>'.$row["hour"].'</td>
    <td>'.$row["siua"].'</td>
    <td>'.$row["mahut"].'</td>
    <td>'.$row["mishta"].'</td>
    <td>'.$row["project3"].'</td>
    <td>'.$row["project2"].'</td>
    <td>'.$row["project"].'</td>
    <td>'.$row["name"].'</td>

    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
if (isset($_POST["button1"])){
  $w="DELETE FROM data2";
  mysqli_query($connect,$w);
  header("Location:table.php");
}
?>
