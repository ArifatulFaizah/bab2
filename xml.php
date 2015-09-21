<?php
//header("Content-type:text/xml");
mysql_connect("localhost","root","jogja");

$result = mysql_query("SELECT Lastname,FirstName FROM 
hr2.Employees ORDER BY Lastname, FirstName");

$i = 0;
echo '<data_mahasiswa>';
while ($i < mysql_num_rows($result)){
			$fields = mysql_fetch_row($result);
			echo"<nama>$fields[1] $fields[0] </nama><br>\r\n";
			$i++;
}
echo'</data_mahasiswa>';
mysql_close();
?>
