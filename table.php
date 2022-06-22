<?php
function Users(){
    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/database.inc.php");
    $conn = dbConnect();
    //echo "<meta http-equiv="refresh" content="10">";

    // echo "<table style='border: solid 1px black;'>";
    echo "<table id='customers'>";
    echo "
    <tr>
        <th>Id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Mobiel</th>
        <th>Email</th>
    </tr>";


    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            // return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
            return "<td>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
        }
    }

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, first_name, last_name, phone, email FROM users");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
}

function All(){
    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/database.inc.php");
    $conn = dbConnect();
    //echo "<meta http-equiv="refresh" content="10">";

    // echo "<table style='border: solid 1px black;'>";
    echo "<table id='customers'>";
    echo "
    <tr>
        <th>Id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Mobiel</th>
        <th>Email</th>
        <th>Datum</th>
        <th>Beschrijving</th>
        <th>Medewerker</th>
    </tr>";


    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            // return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
            return "<td>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
        }
    }

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, first_name, last_name, phone, email, date_time, descr FROM orders");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
}

?>