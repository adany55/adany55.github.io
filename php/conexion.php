<?php  


$con=mysqli_connect('192.168.166.159','usernariz','','narizs') or die("Error en la conexion del servicio");
$query = "SELECT monitoreo.MQ_9,monitoreo.MQ_135 ,monitoreo.MQ__7,monitoreo.MQ_2,monitoreo.EPOC  FROM monitoreo;";


if ($stmt = $conection->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($MQ_9, $MQ_135, $MQ__7, $MQ_2, $EPOC);
    while ($stmt->fetch()) {
        echo "<br><b>Folio Trabajador:</b></br>$MQ_9" ;
        echo "<br>";
        echo "<br><b>Nombre:</b></br>$MQ_135";
        echo "<br>";
        echo "<br><b>Apellido Paterno:</b></br>$MQ__7";
        echo "<br>";
        echo "<br><b>Apellido Materno:</b></br>$MQ_2";
        echo "<br>";
        echo "<br><b>Sexo:</b></br>$EPOC";
        echo "<br>";
        echo "<table border='3'>
            <try>

            
            </try>
            </table>";

    $stmt->close();
}
}



mysqli_close($con);




?>