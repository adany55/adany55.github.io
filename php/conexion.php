<!DOCTYPE html> <html> <head>
     <title>Document</title> 
    </head> 
     <body>
<?php $connection = mysqli_connect('192.168.166.159', 'usernariz', '', 'naris') or die("Error en la conexion del servicio");
$query = "SELECT monitoreo.MQ_9, monitoreo.MQ_135, monitoreo.MQ__7, monitoreo.MQ_2, monitoreo.EPOC FROM monitoreo WHERE id <= 100;";
if ($stmt = $connection->prepare($query))
{ $stmt->execute(); 
$stmt->bind_result($MQ_9, $MQ_135, $MQ__7, $MQ_2, $EPOC);
echo "<table border='1'> <tr> <th>MQ_9</th> <th>MQ_135</th> 
<th>MQ__7</th> <th>MQ_2</th> <th>EPOC</th> 

</tr>"; 
while ($stmt->fetch()) { 
echo "<tr>"; echo 
"<td>".$MQ_9."</td>"
; echo "<td>".$MQ_135."</td>";
echo "<td>".$MQ__7."</td>";
echo "<td>".$MQ_2."</td>";
echo "<td>".$EPOC."</td>";
echo "</tr>"; }
echo "</table>"; $stmt->close();
} mysqli_close($connection);
?>

        </body> </html>