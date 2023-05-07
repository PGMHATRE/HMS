<?php
   
    // include('../includes/pdoconfig.php');
    $DB_host = "localhost";
    $DB_user = "root";
    $DB_pass = "";
    $DB_name = "hostelmsphp";
    $DB_con = new PDO("mysql:host=$DB_host;dbname=$DB_name",$DB_user,$DB_pass);

    if(!empty($_POST["fname"])) {	
    $id=$_POST['fname'];
    $stmt = $DB_con->prepare("SELECT * FROM userregistration WHERE regNo = :id");
    $stmt->execute(array(':id' => $id));
    ?>
    <?php
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
    ?>
    <?php echo htmlentities($row['firstName']); ?>
    <?php
    }
}



if(!empty($_POST["mname"])) {	
    $id=$_POST['mname'];
    $stmt = $DB_con->prepare("SELECT * FROM userregistration WHERE regNo = :id");
    $stmt->execute(array(':id' => $id));
    ?>
    <?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
    ?>
    <?php echo htmlentities($row['middleName']); ?>
    <?php
    }
}


if(!empty($_POST["lname"])) {	
    $id=$_POST['lname'];
    $stmt = $DB_con->prepare("SELECT * FROM userregistration WHERE regNo = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
    ?>
    <?php echo htmlentities($row['lastName']); ?>
    <?php
    }
}

if(!empty($_POST["email"])) {	
    $id=$_POST['email'];
    $stmt = $DB_con->prepare("SELECT * FROM userregistration WHERE regNo = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
    ?>
    <?php echo htmlentities($row['email']); ?>
    <?php
    }
}

if(!empty($_POST["contact"])) {	
    $id=$_POST['contact'];
    $stmt = $DB_con->prepare("SELECT * FROM userregistration WHERE regNo = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
    ?>
    <?php echo htmlentities($row['contactNo']); ?>
    <?php
    }
}



?>