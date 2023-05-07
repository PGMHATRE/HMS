<?php
   
    // include('../includes/pdoconfig.php');
    $DB_host = "localhost";
    $DB_user = "root";
    $DB_pass = "";
    $DB_name = "hostelmsphp";
    $DB_con = new PDO("mysql:host=$DB_host;dbname=$DB_name",$DB_user,$DB_pass);
    if(!empty($_POST["roomid"])) {	
    $id=$_POST['roomid'];
    $stmt = $DB_con->prepare("SELECT * FROM rooms WHERE room_no = :id");
    $stmt->execute(array(':id' => $id));
    ?>
    <?php
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
    ?>
    <?php echo htmlentities($row['seater']); ?>
    <?php
    }
}



if(!empty($_POST["rid"])) {	
    $id=$_POST['rid'];
    $stmt = $DB_con->prepare("SELECT * FROM rooms WHERE room_no = :id");
    $stmt->execute(array(':id' => $id));
    ?>
    <?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
    ?>
    <?php echo htmlentities($row['fees']); ?>
    <?php
    }
}

?>