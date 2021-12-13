<!DOCTYPE html>
<html>

<div style="display: none;" id="accepting">

<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, accepting FROM settings";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["accepting"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none; color: white;" id="daysbusy0">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, daysbusy0 FROM settings";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["daysbusy0"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none; color: white;" id="daysbusy1">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, daysbusy1 FROM settings";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["daysbusy1"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none; color: white;" id="daysbusy2">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, daysbusy2 FROM settings";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["daysbusy2"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none; color: white;" id="daysbusy3">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, daysbusy3 FROM settings";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["daysbusy3"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none; color: white;" id="daysbusy4">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, daysbusy4 FROM settings";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["daysbusy4"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none; color: white;" id="daysbusy5">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, daysbusy5 FROM settings";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["daysbusy5"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none; color: white;" id="daysbusy6">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, daysbusy6 FROM settings";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["daysbusy6"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none;" id="athomeappointment">
    <?php
    $servername = "sql111.epizy.com";
    $username = "epiz_26305658";
    $password = "o2ev7L97FtNTb8v";
    $dbname = "epiz_26305658_book";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, athomeappointment FROM settings";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["athomeappointment"]. "";
    }
    } else {
    echo "true";
    }

    $conn->close();

    ?>
</div>

<div style="display: none;" id="datesbusy">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT dates FROM datesbusy";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["dates"]. ",";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none;" id="time1">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, date FROM time WHERE storetime='time1'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["date"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none;" id="time2">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, date FROM time WHERE storetime='time2'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["date"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none;" id="time3">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, date FROM time WHERE storetime='time3'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["date"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none;" id="time4">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, date FROM time WHERE storetime='time4'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["date"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none;" id="numberoftimes">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, numberoftimes FROM settings";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["numberoftimes"]. "";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</div>

<div style="display: none;" id="athometime1r">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, athometime1 FROM settings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["athometime1"]. "";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>

<div style="display: none;" id="athometime2r">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, athometime2 FROM settings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["athometime2"]. "";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>

<div style="display: none;" id="athometime3r">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, athometime3 FROM settings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["athometime3"]. "";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>

<div style="display: none;" id="athometime4r">
<?php
$servername = "sql111.epizy.com";
$username = "epiz_26305658";
$password = "o2ev7L97FtNTb8v";
$dbname = "epiz_26305658_book";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, athometime4 FROM settings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["athometime4"]. "";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <title>Book an Appointment</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="https://github.com/neighborhoodbikerepair/assets/blob/main/logo.png?raw=true" />
</head>

<body onload="firstscript()" >

<script>
function settings() {
    var settings1 = document.getElementById("accepting").innerHTML;
    var r1 = settings1.includes("true");
    if (r1 == false) {
        document.getElementById("typewidget").style.display = "none";
        document.getElementById("notaccepting").style.display = "block";
    } else {
        document.getElementById("notaccepting").style.display = "none";
        document.getElementById("typewidget").style.display = "block";
    }
    var settings2 = document.getElementById("athomeappointment").innerHTML;
    var r2 = settings2.includes("true");
    if (r2 == true) {
        document.getElementById("athomeopt").style.pointerEvents = "auto";
        document.getElementById("athomeopt2").style.pointerEvents = "auto";
    }
    if (r2 == false) {
        document.getElementById("homebtn").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
        document.getElementById("athomeopt").style.pointerEvents = "none";
        document.getElementById("athomeopt").style.opacity = "0.5";
        document.getElementById("homebtn2").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
        document.getElementById("athomeopt2").style.pointerEvents = "none";
        document.getElementById("athomeopt2").style.opacity = "0.5";
    }
    var buy0 = document.getElementById("daysbusy0").innerHTML;
    var b0 = buy0.includes("busy");
    if (b0 == true) {
        document.getElementById("1").classList.add("unavailabledate");
        document.getElementById("8").classList.add("unavailabledate");
        document.getElementById("15").classList.add("unavailabledate");
        document.getElementById("22").classList.add("unavailabledate");
    }
    var buy1 = document.getElementById("daysbusy1").innerHTML;
    var b1 = buy1.includes("busy");
    if (b1 == true) {
        document.getElementById("2").classList.add("unavailabledate");
        document.getElementById("9").classList.add("unavailabledate");
        document.getElementById("16").classList.add("unavailabledate");
        document.getElementById("23").classList.add("unavailabledate");
    }
    var buy2 = document.getElementById("daysbusy2").innerHTML;
    var b2 = buy2.includes("busy");
    if (b2 == true) {
        document.getElementById("3").classList.add("unavailabledate");
        document.getElementById("10").classList.add("unavailabledate");
        document.getElementById("17").classList.add("unavailabledate");
        document.getElementById("24").classList.add("unavailabledate");
    }
    var buy3 = document.getElementById("daysbusy3").innerHTML;
    var b3 = buy3.includes("busy");
    if (b3 == true) {
        document.getElementById("4").classList.add("unavailabledate");
        document.getElementById("11").classList.add("unavailabledate");
        document.getElementById("18").classList.add("unavailabledate");
        document.getElementById("25").classList.add("unavailabledate");
    }
    var buy4 = document.getElementById("daysbusy4").innerHTML;
    var b4 = buy4.includes("busy");
    if (b4 == true) {
        document.getElementById("5").classList.add("unavailabledate");
        document.getElementById("12").classList.add("unavailabledate");
        document.getElementById("19").classList.add("unavailabledate");
        document.getElementById("26").classList.add("unavailabledate");
    }
    var buy5 = document.getElementById("daysbusy5").innerHTML;
    var b5 = buy5.includes("busy");
    if (b5 == true) {
        document.getElementById("6").classList.add("unavailabledate");
        document.getElementById("13").classList.add("unavailabledate");
        document.getElementById("20").classList.add("unavailabledate");
        document.getElementById("27").classList.add("unavailabledate");
    }
    var buy6 = document.getElementById("daysbusy6").innerHTML;
    var b6 = buy6.includes("busy");
    if (b6 == true) {
        document.getElementById("0").classList.add("unavailabledate");
        document.getElementById("7").classList.add("unavailabledate");
        document.getElementById("14").classList.add("unavailabledate");
        document.getElementById("21").classList.add("unavailabledate");
    }
    var tiempo = document.getElementById("numberoftimes").innerHTML;
    var tiempo1 = tiempo.includes("1");
    if (tiempo1 == true) {
        document.getElementById("secondtime").style.display = "none";
        document.getElementById("thirdtime").style.display = "none";
        document.getElementById("fourthtime").style.display = "none";
    }
    var tiempo2 = tiempo.includes("2");
    if (tiempo2 == true) {
        document.getElementById("thirdtime").style.display = "none";
        document.getElementById("fourthtime").style.display = "none";
    }
    var tiempo3 = tiempo.includes("3");
    if (tiempo3 == true) {
        document.getElementById("fourthtime").style.display = "none";
    }
}
</script>

<style>
:root {
    --color1: dodgerblue;
    --color2: royalblue;
}
#notaccepting {
    display: none;
}
* {
    margin: 0px;
}
.calenderwidget {
	display: grid;
    justify-content: center;
    grid-template-columns: min-content min-content min-content min-content min-content min-content min-content;
    background-color: hsl(0, 0%, 97%);
    width: 60%;
    padding: 60px 20px;
    border-radius: 20px;
    position: relative;
    transition: 0.4s all;
    vertical-align: top;
    margin: auto;
}
.timewidget {
    background-color: hsl(0, 0%, 97%);
    width: 60%;
    min-height: 40vh;
    padding: 60px 20px;
    padding-top: 0px;
    border-radius: 20px;
    position: relative;
    transition: 0.4s all;
    vertical-align: top;
    margin: auto;
}
.clearbutton {
    position: relative;
    background-color: red;
    display: inline-block;
    margin: auto;
    color: white;
    font-size: 23px !important;
    width: fit-content;
    padding: 8px 18px;
    cursor: pointer;
    font-weight: 700;
    border-radius: 30px;
    font-family: lexend deca;
    outline: none;
    border: none;
    text-decoration: none;
}
.day {
    font-family: lexend deca;
    font-weight: 700;
    text-align: center;
    font-size: 20px;
    padding: 14px;
    box-sizing: border-box;
}
.circledate {
    font-family: lexend deca;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 2px;
    box-sizing: border-box;
    font-weight: 700;
    height: 70px;
    width: 70px;
    border-radius: 12px;
    font-size: 26px;
    background-color: var(--color1);
    color: white;
    margin: 0.8vw;
    cursor: pointer;
    transition: 0.4s all;
}
.circledate:hover {
    transition: 0.4s all;
    background-color: var(--color2);
}
.unavailabledate {
    background-color: hsl(0, 0%, 91%) !important;
    color: grey !important;
    cursor: default !important;
    transition: 0s all !important;
    pointer-events: none !important;
}
.hiddendate {
    background-color: transparent !important;
    color: transparent !important;
    cursor: default !important;
    transition: 0s all !important;
    pointer-events: none !important;
}
.today {
    background-color: black !important;
    color: grey !important;
    cursor: default !important;
    transition: 0s all !important;
    pointer-events: none !important;
}
#appointmenttype {
    display: inline-block;
    font-size: 35px;
    font-family: lexend deca;
    margin-left: 8px;
    position: relative;
    top: 3px;
}
#opencontacticon {
    vertical-align: sub;
    position: relative;
    font-size: 30px;
    margin-left: -3px;
    margin-right: -3px;
    color: darkblue;
}
#progress {
    margin-top: 20px;
    height: 4px;
    border-radius: 8px;
    background-color: dodgerblue;
    width: 0%;
    transition: 0.4s all;
}
#process {
    font-size: 33px;
    padding: 20px;
    top: -90px;
    padding-bottom: 0px;
    position: relative;
    width: 60%;
    margin: auto;
    color: black;
    font-family: lexend deca;
    display: block;
    transition: 0.3s all;
}
#typetext {
    float: right;
}
.timetext {
    font-size: 26px;
    left: 0px;
    padding-bottom: 20px;
    padding-top: 30px;
    position: relative;
    width: 60%;
    text-align: center;
    margin: auto;
    color: black;
    font-family: lexend deca;
    display: block;
    font-weight: 500;
    color: black;
}
.detailstext {
    font-size: 26px;
    left: 0px;
    padding-bottom: 20px;
    padding-top: 20px;
    position: relative;
    width: 60%;
    margin: auto;
    color: black;
    font-family: lexend deca;
    display: block;
    font-weight: 500;
}
#backbutton {
    background-color: royalblue;
    color: white;
    width: fit-content;
    display: inline-block;
    height: 50px;
    width: 50px;
    padding: 2px;
    margin-right: 8px;
    border-radius: 35px;
    box-sizing: border-box;
    cursor: pointer;
}
#backbuttonicon {
    font-size: 36px;
    position: absolute;
    top: 5px;
    left: 2px;
}
#locationicon {
    font-size: 24px;
    position: absolute;
    top: 10px;
    left: 9px;
}
.athomeopt {
    font-family: lexend deca;
    border-radius: 20px;
    background-color: #fa4141;
    max-width: 500px;
    width: 40%;
    margin: 14px;
    text-align: center;
    padding: 20px 40px;
    padding-bottom: 16px;
    display: inline-block;
    cursor: pointer;
    color: white;
    box-sizing: border-box;
    pointerEvents: none;
}
.atgarageopt {
    font-family: lexend deca;
    border-radius: 20px;
    background-color: #3175e8;
    max-width: 500px;
    width: 40%;
    margin: 14px;
    text-align: center;
    padding: 20px 40px;
    padding-bottom: 16px;
    display: inline-block;
    cursor: pointer;
    color: white;
    box-sizing: border-box;
}
.header2 {
    font-size: 42px !important;
    font-family: lexend deca !important;
    margin-bottom: 35px;
}
.header5 {
    font-size: 20px !important;
    font-weight: 400 !important;
    font-family: lexend deca !important;
    margin-bottom: 30px;
}
#contactopenicon {
            vertical-align: sub;
            font-size: 30px;
        }
#typewidget {
    position: relative;
    margin: auto;
}
.message {
    color: white;
    font-size: 33px;
    margin-top: 80px;
    font-family: lexend deca;
}
.nohover {
    pointer-events: none;
}
.updatebutton {
    background-color: dodgerblue;
    margin: auto;
    color: white;
    font-size: 23px;
    width: fit-content;
    padding: 8px 18px;
    cursor: pointer;
    font-weight: 700;
    border-radius: 30px;
    font-family: lexend deca;
    outline: none;
    border: none;
}
#toptab {
   position: fixed;
   left: 0;
   top: -100vh;
   width: 100vw;
   height: fit-content; 
   transition: 0.3s all;
   z-index: 99;
}
#tab1 {
   position: fixed;
   left: 0vw;
   width: 100vw;
   height: 100vh; 
   transition: 0.3s all;
}
#tab2 {
   position: fixed;
   left: 100vw;
   width: 100vw;
   height: 100vh; 
   transition: 0.3s all;
}
#tab3 {
   position: fixed;
   left: 200vw;
   width: 100vw;
   height: 100vh; 
   transition: 0.3s all;
}
#tab4 {
   position: fixed;
   left: 300vw;
   width: 100vw;
   transition: 0.3s all;
   overflow-y: auto;
   overflow-y: overlay;
}
#dateicon {
    position: relative;
    bottom: -2px;
}
.headder {
    font-size: 48px;
    font-family: lexend deca;
    font-weight: 600;
    padding-bottom: 70px;
}
</style>

<script>
    function opentime(clicked_id) {
        document.getElementById("firsttime").classList.remove("unavailabletime");
        document.getElementById("secondtime").classList.remove("unavailabletime");
        document.getElementById("thirdtime").classList.remove("unavailabletime");
        document.getElementById("fourthtime").classList.remove("unavailabletime");
        document.getElementById("processtext").innerHTML = "Select a Time";
        document.getElementById("progress").style.width = "66%";
        document.getElementById("tab4").style.left = "100vw";
        document.getElementById("tab3").style.left = "0px";
        document.getElementById("tab2").style.left = "-100vw";
        document.getElementById("tab1").style.left = "-200vw";
        var notopen1 = document.getElementById("time1").innerHTML;
        var notopen2 = document.getElementById("time2").innerHTML;
        var notopen3 = document.getElementById("time3").innerHTML;
        var notopen4 = document.getElementById("time4").innerHTML;
        var thisdate = "fulldate" + clicked_id;
        var thisiddd = clicked_id;
        if (thisiddd == 0 || thisiddd == 7 || thisiddd == 14 || thisiddd == 21) {
            var dateday = "Sunday";
        }
        if (thisiddd == 1 || thisiddd == 8 || thisiddd == 15 || thisiddd == 22) {
            var dateday = "Monday";
        }
        if (thisiddd == 2 || thisiddd == 9 || thisiddd == 16 || thisiddd == 23) {
            var dateday = "Tuesday";
        }
        if (thisiddd == 3 || thisiddd == 10 || thisiddd == 17 || thisiddd == 24) {
            var dateday = "Wednesday";
        }
        if (thisiddd == 4 || thisiddd == 11 || thisiddd == 18 || thisiddd == 25) {
            var dateday = "Thursday";
        }
        if (thisiddd == 5 || thisiddd == 12 || thisiddd == 19 || thisiddd == 26) {
            var dateday = "Friday";
        }
        if (thisiddd == 6 || thisiddd == 13 || thisiddd == 20 || thisiddd == 27) {
            var dateday = "Saturday";
        }
        document.getElementById("timetext").innerHTML = "<span id='dateicon' class='material-icons-round'>event</span> " + dateday + ", " + document.getElementById(thisdate).innerHTML;
        document.getElementById("date").value = document.getElementById(thisdate).innerHTML;
        var currentthisfulldate = document.getElementById(thisdate).innerHTML;
        var result1 = notopen1.includes(currentthisfulldate);
        var result2 = notopen2.includes(currentthisfulldate);
        var result3 = notopen3.includes(currentthisfulldate);
        var result4 = notopen4.includes(currentthisfulldate);
        if (notopen1.includes(currentthisfulldate)) {
            document.getElementById("firsttime").classList.add("unavailabletime");
        }
        if (notopen2.includes(currentthisfulldate)) {
            document.getElementById("secondtime").classList.add("unavailabletime");
        }
        if (notopen3.includes(currentthisfulldate)) {
            document.getElementById("thirdtime").classList.add("unavailabletime");
        }
        if (notopen4.includes(currentthisfulldate)) {
            document.getElementById("fourthtime").classList.add("unavailabletime");
        }
        var showtime1 = document.getElementById("athometime1r").innerHTML;
        var showtime2 = document.getElementById("athometime2r").innerHTML;
        var showtime3 = document.getElementById("athometime3r").innerHTML;
        var showtime4 = document.getElementById("athometime4r").innerHTML;
        if (appointmenttype == "athome") {
            if (showtime1.includes("hide")) {
                document.getElementById("firsttime").style.display = "none";
            }
            if (showtime2.includes("hide")) {
                document.getElementById("secondtime").style.display = "none";
            }
            if (showtime3.includes("hide")) {
                document.getElementById("thirdtime").style.display = "none";
            }
            if (showtime4.includes("hide")) {
                document.getElementById("fourthtime").style.display = "none";
            }
        } else {
            if (numberoftimes == "1") {
                document.getElementById("firsttime").style.display = "block";
            } else if (numberoftimes == "2") {
                document.getElementById("firsttime").style.display = "block";
                document.getElementById("secondtime").style.display = "block";
            } else if (numberoftimes == "3") {
                document.getElementById("firsttime").style.display = "block";
                document.getElementById("secondtime").style.display = "block";
                document.getElementById("thirdtime").style.display = "block";
            } else {
                document.getElementById("firsttime").style.display = "block";
                document.getElementById("secondtime").style.display = "block";
                document.getElementById("thirdtime").style.display = "block";
                document.getElementById("fourthtime").style.display = "block";
            }
        }
    }
    function opendetails1() {
        document.getElementById("detailstext").innerHTML = document.getElementById("timetext").innerHTML + "<br><span id='dateicon' class='material-icons-round'>alarm</span> " + document.getElementById("t1").innerHTML;
        document.getElementById("database").value = "time1";
        document.getElementById("time").value = document.getElementById("t1").innerHTML;

        var settings2 = document.getElementById("athomeappointment").innerHTML;
        var r2 = settings2.includes("true");
        if (r2 == false) {
            document.getElementById("homebtn").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
            document.getElementById("athomeopt").style.pointerEvents = "none";
            document.getElementById("athomeopt").style.opacity = "0.5";
            document.getElementById("homebtn2").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
            document.getElementById("athomeopt2").style.pointerEvents = "none";
            document.getElementById("athomeopt2").style.opacity = "0.5";
        } else {
            var showtime1 = document.getElementById("athometime1r").innerHTML;
            if (showtime1.includes("hide")) {
                document.getElementById("athomeopt2").style.opacity = "0.5";
                document.getElementById("athomeopt2").style.pointerEvents = "none";
                document.getElementById("homebtn2").innerHTML = "Select another time <span id='contactopenicon' class='material-icons-round'>highlight_off</span>"
            } else {
                document.getElementById("athomeopt2").style.opacity = "1";
                document.getElementById("athomeopt2").style.pointerEvents = "auto";
                document.getElementById("homebtn2").innerHTML = "Select <span id='contactopenicon' class='material-icons-round'>task_alt</span>"
            }
        }

        opendetailswidget();
    }
    function opendetails2() {
        document.getElementById("detailstext").innerHTML = document.getElementById("timetext").innerHTML + "<br><span id='dateicon' class='material-icons-round'>alarm</span> " + document.getElementById("t2").innerHTML;
        document.getElementById("database").value = "time2";
        document.getElementById("time").value = document.getElementById("t2").innerHTML;

        var settings2 = document.getElementById("athomeappointment").innerHTML;
        var r2 = settings2.includes("true");
        if (r2 == false) {
            document.getElementById("homebtn").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
            document.getElementById("athomeopt").style.pointerEvents = "none";
            document.getElementById("athomeopt").style.opacity = "0.5";
            document.getElementById("homebtn2").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
            document.getElementById("athomeopt2").style.pointerEvents = "none";
            document.getElementById("athomeopt2").style.opacity = "0.5";
        } else {
            var showtime2 = document.getElementById("athometime2r").innerHTML;
            if (showtime2.includes("hide")) {
                document.getElementById("athomeopt2").style.opacity = "0.5";
                document.getElementById("athomeopt2").style.pointerEvents = "none";
                document.getElementById("homebtn2").innerHTML = "Select another time <span id='contactopenicon' class='material-icons-round'>highlight_off</span>"
            } else {
                document.getElementById("athomeopt2").style.opacity = "1";
                document.getElementById("athomeopt2").style.pointerEvents = "auto";
                document.getElementById("homebtn2").innerHTML = "Select <span id='contactopenicon' class='material-icons-round'>task_alt</span>"
            }
        }

        opendetailswidget();
    }
    function opendetails3() {
        document.getElementById("detailstext").innerHTML = document.getElementById("timetext").innerHTML + "<br><span id='dateicon' class='material-icons-round'>alarm</span> " + document.getElementById("t3").innerHTML;
        document.getElementById("database").value = "time3";
        document.getElementById("time").value = document.getElementById("t3").innerHTML;

        var settings2 = document.getElementById("athomeappointment").innerHTML;
        var r2 = settings2.includes("true");
        if (r2 == false) {
            document.getElementById("homebtn").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
            document.getElementById("athomeopt").style.pointerEvents = "none";
            document.getElementById("athomeopt").style.opacity = "0.5";
            document.getElementById("homebtn2").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
            document.getElementById("athomeopt2").style.pointerEvents = "none";
            document.getElementById("athomeopt2").style.opacity = "0.5";
        } else {
            var showtime3 = document.getElementById("athometime3r").innerHTML;
            if (showtime3.includes("hide")) {
                document.getElementById("athomeopt2").style.opacity = "0.5";
                document.getElementById("athomeopt2").style.pointerEvents = "none";
                document.getElementById("homebtn2").innerHTML = "Select another time <span id='contactopenicon' class='material-icons-round'>highlight_off</span>"
            } else {
                document.getElementById("athomeopt2").style.opacity = "1";
                document.getElementById("athomeopt2").style.pointerEvents = "auto";
                document.getElementById("homebtn2").innerHTML = "Select <span id='contactopenicon' class='material-icons-round'>task_alt</span>"
            }
        }

        opendetailswidget();
    }
    function opendetails4() {
        document.getElementById("detailstext").innerHTML = document.getElementById("timetext").innerHTML + "<br><span id='dateicon' class='material-icons-round'>alarm</span> " + document.getElementById("t4").innerHTML;
        document.getElementById("database").value = "time4";
        document.getElementById("time").value = document.getElementById("t4").innerHTML;

        var settings2 = document.getElementById("athomeappointment").innerHTML;
        var r2 = settings2.includes("true");
        if (r2 == false) {
            document.getElementById("homebtn").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
            document.getElementById("athomeopt").style.pointerEvents = "none";
            document.getElementById("athomeopt").style.opacity = "0.5";
            document.getElementById("homebtn2").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
            document.getElementById("athomeopt2").style.pointerEvents = "none";
            document.getElementById("athomeopt2").style.opacity = "0.5";
        } else {
            var showtime4 = document.getElementById("athometime4r").innerHTML;
            if (showtime4.includes("hide")) {
                document.getElementById("athomeopt2").style.opacity = "0.5";
                document.getElementById("athomeopt2").style.pointerEvents = "none";
                document.getElementById("homebtn2").innerHTML = "Select another time <span id='contactopenicon' class='material-icons-round'>highlight_off</span>"
            } else {
                document.getElementById("athomeopt2").style.opacity = "1";
                document.getElementById("athomeopt2").style.pointerEvents = "auto";
                document.getElementById("homebtn2").innerHTML = "Select <span id='contactopenicon' class='material-icons-round'>task_alt</span>"
            }
        }

        opendetailswidget();
    }
    function opendetailswidget() {
        document.getElementById("processtext").innerHTML = "Add Details";
        document.getElementById("progress").style.width = "100%";
        document.getElementById("tab4").style.left = "0px";
        document.getElementById("tab3").style.left = "-100vw";
        document.getElementById("tab2").style.left = "-200vw";
        document.getElementById("tab1").style.left = "-300vw";
    }
    function backk() {
        if (document.getElementById("tab2").style.left == "0px") {
            document.getElementById("tab4").style.left = "300vw";
            document.getElementById("tab3").style.left = "200vw";
            document.getElementById("tab2").style.left = "100vw";
            document.getElementById("tab1").style.left = "0px";
            document.getElementById("process").style.top = (-1 * document.getElementById("process").offsetHeight) + "px";
            document.getElementById("progress").style.width = "0px";
        } else if (document.getElementById("tab3").style.left == "0px") {
            document.getElementById("tab4").style.left = "300vw";
            document.getElementById("tab3").style.left = "200vw";
            document.getElementById("tab2").style.left = "0px";
            document.getElementById("tab1").style.left = "-100vw";
            document.getElementById("processtext").innerHTML = "Select a Day";
            document.getElementById("progress").style.width = "33%";
        } else if (document.getElementById("tab4").style.left == "0px") {
            document.getElementById("tab4").style.left = "100vw";
            document.getElementById("tab3").style.left = "0px";
            document.getElementById("tab2").style.left = "-100vw";
            document.getElementById("tab1").style.left = "-200vw";
            document.getElementById("processtext").innerHTML = "Select a Time";
            document.getElementById("progress").style.width = "66%";
            var settings2 = document.getElementById("athomeappointment").innerHTML;
            var r2 = settings2.includes("true");
            if (r2 == false) {
                document.getElementById("homebtn").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
                document.getElementById("athomeopt").style.pointerEvents = "none";
                document.getElementById("athomeopt").style.opacity = "0.5";
                document.getElementById("homebtn2").innerHTML = "Not available <span id='contactopenicon' class='material-icons-round'>highlight_off</span>";
                document.getElementById("athomeopt2").style.pointerEvents = "none";
                document.getElementById("athomeopt2").style.opacity = "0.5";
            } else {
                document.getElementById("athomeopt2").style.opacity = "1";
                document.getElementById("athomeopt2").style.pointerEvents = "auto";
                document.getElementById("homebtn2").innerHTML = "Select <span id='contactopenicon' class='material-icons-round'>task_alt</span>";
            }
        }
    }
    function home() {
        document.getElementById("tab4").style.left = "200vw";
        document.getElementById("tab3").style.left = "100vw";
        document.getElementById("tab2").style.left = "0px";
        document.getElementById("tab1").style.left = "-100vw";
        document.getElementById("process").style.top = "0px";
        document.getElementById("addressdiv").style.display = "block";
        document.getElementById("type").value = "At Home Appointment";
        document.getElementById("typetext").innerHTML = "<span id='locationicon' class='material-icons-round'>location_on</span> At Home Appointment";
        document.getElementById("address").value = "";
        document.getElementById("processtext").innerHTML = "Select a Day";
        document.getElementById("progress").style.width = "33%";
        appointmenttype = "athome";
    }
    function garage() {
        document.getElementById("tab4").style.left = "200vw";
        document.getElementById("tab3").style.left = "100vw";
        document.getElementById("tab2").style.left = "0px";
        document.getElementById("tab1").style.left = "-100vw";
        document.getElementById("process").style.top = "0px";
        document.getElementById("addressdiv").style.display = "none";
        document.getElementById("type").value = "At Our Garage";
        document.getElementById("typetext").innerHTML = "<span id='locationicon' class='material-icons-round'>location_on</span> At Our Garage";
        document.getElementById("address").value = "N/A";
        document.getElementById("processtext").innerHTML = "Select a Day";
        document.getElementById("progress").style.width = "33%";
        appointmenttype = "atgarage";
    }
</script>

<div>
    <div id="process" >
        <div class="clearbutton" style="padding-left: 35px;" onclick="backk()">
            <span id="backbuttonicon" class="material-icons-round">
                chevron_left
            </span>
            <span id="processtext" >
                Select a Day
            </span>
        </div>
        <span onclick="changelocation()" class="clearbutton" style="padding-left: 37px;" id="typetext" >
            At our Garage
        </span>
        <div id="progress" >

        </div>
    </div>
</div>

<script>
    function changelocation() {
        document.getElementById("toptab").style.top = "0px";
    }
</script>

        <center>
            <div id="notaccepting" >
                <div style="display: block;" class="message" id="acceptingreason">
                    <?php
                    $servername = "sql111.epizy.com";
                    $username = "epiz_26305658";
                    $password = "o2ev7L97FtNTb8v";
                    $dbname = "epiz_26305658_book";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT id, acceptingreason FROM settings";
                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "" . $row["acceptingreason"]. "";
                    }
                    } else {
                    echo "We are not accepting appointments at this time";
                    }

                    $conn->close();

                    ?>
                </div>
            </div>
        </center>

        <div id="toptab" >  
            <div id="changelocationwidget" style="height: fit-content; background-color: hsl(0, 0%, 99%); width: 100%; border-radius: 0px 0px 36px 36px; box-shadow: 0px 10px 12px #888888;" >
                <center>
                    <div onclick="garage2()" class="atgarageopt" >
                        <h4 class="header2" >At Our Garage</h4>
                        <h4 class="header5" >Drop off your bike(s) at our house and pick them up at a later date.</h4>
                        <br>
                        <center>
                        <div onclick="garage2()" style="background-color: #60fb9d; color: black;" class="updatebutton" >Select <span id="contactopenicon" class="material-icons-round">task_alt</span></div>
                        </center>
                    </div>

                    <div onclick="home2()" id="athomeopt2" class="athomeopt" >
                        <h4 class="header2" >At Your Home </h4>
                        <h4 class="header5" >We come to your house and repair your bike(s). Traveling fee is $10.</h4>
                        <br>
                        <center>
                        <div onclick="home2()" id="homebtn2" style="background-color: #60fb9d; color: black;" class="updatebutton" >Select <span id="contactopenicon" class="material-icons-round">task_alt</span></div>
                        </center>
                    </div>
                </center>
                <center>
                    <div onclick="closetoptab()" class="clearbutton" >
                        Cancel
                    </div>
                </center>
                <br>
            </div>
        </div>

        <script>
            function home2() {
                document.getElementById("toptab").style.top = ((-1 * document.getElementById("changelocationwidget").offsetHeight) - 20) + "px";
                document.getElementById("addressdiv").style.display = "block";
                document.getElementById("type").value = "At Home Appointment";
                document.getElementById("typetext").innerHTML = "<span id='locationicon' class='material-icons-round'>location_on</span> At Home Appointment";
                document.getElementById("address").value = "";
                appointmenttype = "athome";
                var showtime1 = document.getElementById("athometime1r").innerHTML;
                var showtime2 = document.getElementById("athometime2r").innerHTML;
                var showtime3 = document.getElementById("athometime3r").innerHTML;
                var showtime4 = document.getElementById("athometime4r").innerHTML;
                if (appointmenttype == "athome") {
                    if (showtime1.includes("hide")) {
                        document.getElementById("firsttime").style.display = "none";
                    }
                    if (showtime2.includes("hide")) {
                        document.getElementById("secondtime").style.display = "none";
                    }
                    if (showtime3.includes("hide")) {
                        document.getElementById("thirdtime").style.display = "none";
                    }
                    if (showtime4.includes("hide")) {
                        document.getElementById("fourthtime").style.display = "none";
                    }
                } else {
                    document.getElementById("firsttime").style.display = "block";
                    document.getElementById("secondtime").style.display = "block";
                    document.getElementById("thirdtime").style.display = "block";
                    document.getElementById("fourthtime").style.display = "block";
                }
            }
            function garage2() {
                document.getElementById("toptab").style.top = ((-1 * document.getElementById("changelocationwidget").offsetHeight) - 20) + "px";
                document.getElementById("addressdiv").style.display = "none";
                document.getElementById("type").value = "At Our Garage";
                document.getElementById("typetext").innerHTML = "<span id='locationicon' class='material-icons-round'>location_on</span> At Our Garage";
                document.getElementById("address").value = "N/A";
                appointmenttype = "atgarage";
                var showtime1 = document.getElementById("athometime1r").innerHTML;
                var showtime2 = document.getElementById("athometime2r").innerHTML;
                var showtime3 = document.getElementById("athometime3r").innerHTML;
                var showtime4 = document.getElementById("athometime4r").innerHTML;
                if (appointmenttype == "athome") {
                    if (showtime1.includes("hide")) {
                        document.getElementById("firsttime").style.display = "none";
                    }
                    if (showtime2.includes("hide")) {
                        document.getElementById("secondtime").style.display = "none";
                    }
                    if (showtime3.includes("hide")) {
                        document.getElementById("thirdtime").style.display = "none";
                    }
                    if (showtime4.includes("hide")) {
                        document.getElementById("fourthtime").style.display = "none";
                    }
                } else {
                    if (numberoftimes == "1") {
                        document.getElementById("firsttime").style.display = "block";
                    } else if (numberoftimes == "2") {
                        document.getElementById("firsttime").style.display = "block";
                        document.getElementById("secondtime").style.display = "block";
                    } else if (numberoftimes == "3") {
                        document.getElementById("firsttime").style.display = "block";
                        document.getElementById("secondtime").style.display = "block";
                        document.getElementById("thirdtime").style.display = "block";
                    } else {
                        document.getElementById("firsttime").style.display = "block";
                        document.getElementById("secondtime").style.display = "block";
                        document.getElementById("thirdtime").style.display = "block";
                        document.getElementById("fourthtime").style.display = "block";
                    }
                }
            }
            function closetoptab() {
                document.getElementById("toptab").style.top = ((-1 * document.getElementById("changelocationwidget").offsetHeight) - 20) + "px";
            }
        </script>


        <div id="tab1" >
            <center>
                <div id="typewidget" >  

                    <div class="headder" >
                        Book an Appointment
                    </div>

                    <div onclick="garage()" class="atgarageopt" >
                        <h4 class="header2" >At Our Garage</h4>
                        <h4 class="header5" >Drop off your bike(s) at our house and pick them up at a later date.</h4>
                        <br>
                        <center>
                        <div onclick="garage()" style="background-color: #60fb9d; color: black;" class="updatebutton" >Book <span id="contactopenicon" class="material-icons-round">event_note</span></div>
                        </center>
                    </div>

                    <div onclick="home()" id="athomeopt" style="transition: 0.4s all;" class="athomeopt" >
                        <h4 class="header2" >At Your Home </h4>
                        <h4 class="header5" >We come to your house and repair your bike(s). Traveling fee is $10.</h4>
                        <br>
                        <center>
                        <div onclick="home()" id="homebtn" style="background-color: #60fb9d; color: black;" class="updatebutton" >Book <span id="contactopenicon" class="material-icons-round">event_note</span></div>
                        </center>
                    </div>
                </div>
            </center>
        </div>




        <div id="tab2" > 
            <div class="calenderwidget" id="calenderwidget">
                <div class="day" >
                    SUN
                </div>
                <div class="day" >
                    MON
                </div>
                <div class="day" >
                    TUE
                </div>
                <div class="day" >
                    WED
                </div>
                <div class="day" >
                    THU
                </div>
                <div class="day" >
                    FRI
                </div>
                <div class="day" >
                    SAT
                </div>

                <script>
                function firstscript() {
                    settings();
                    document.getElementById("toptab").style.top = ((-1 * document.getElementById("changelocationwidget").offsetHeight) - 20) + "px";
                    document.getElementById("process").style.top = (-1 * document.getElementById("process").offsetHeight) + "px";
                    document.getElementById("tab1").style.top = (document.getElementById("process").clientHeight) + "px";
                    document.getElementById("tab2").style.top = (document.getElementById("process").clientHeight) + "px";
                    document.getElementById("tab3").style.top = (document.getElementById("process").clientHeight) + "px";
                    document.getElementById("tab4").style.top = (document.getElementById("process").clientHeight) + "px";
                    document.getElementById("tab4").style.height = (window.innerHeight - document.getElementById("process").clientHeight) + "px";
                    var notopen1 = document.getElementById("time1").innerHTML;
                    var notopen2 = document.getElementById("time2").innerHTML;
                    var notopen3 = document.getElementById("time3").innerHTML;
                    var notopen4 = document.getElementById("time4").innerHTML;
                    var notopen5 = document.getElementById("datesbusy").innerHTML;
                    var currentmonth = new Date().getMonth() + 1;
                    var currentday = new Date().getDay();
                    var currentmonthday = new Date().getDate();
                    var currentyear = new Date().getFullYear();
                    document.getElementById("openstatus").innerHTML = "12/16/2021";
                    const getDaysInMonth = date =>
                    new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();             
                    var daysinmonth = getDaysInMonth(new Date());
                    if (currentday == 0) {
                        document.getElementById(0).classList.add("today");
                    }
                    if (currentday == 1) {
                        document.getElementById(0).classList.add("hiddendate");
                        document.getElementById(1).classList.add("today");
                    }
                    if (currentday == 2) {
                        document.getElementById(0).classList.add("hiddendate");
                        document.getElementById(1).classList.add("hiddendate");
                        document.getElementById(2).classList.add("today");
                    }
                    if (currentday == 3) {
                        document.getElementById(0).classList.add("hiddendate");
                        document.getElementById(1).classList.add("hiddendate");
                        document.getElementById(2).classList.add("hiddendate");
                        document.getElementById(3).classList.add("today");
                    }
                    if (currentday == 4) {
                        document.getElementById(0).classList.add("hiddendate");
                        document.getElementById(1).classList.add("hiddendate");
                        document.getElementById(2).classList.add("hiddendate");
                        document.getElementById(3).classList.add("hiddendate");
                        document.getElementById(4).classList.add("today");
                    }
                    if (currentday == 5) {
                        document.getElementById(0).classList.add("hiddendate");
                        document.getElementById(1).classList.add("hiddendate");
                        document.getElementById(2).classList.add("hiddendate");
                        document.getElementById(3).classList.add("hiddendate");
                        document.getElementById(4).classList.add("hiddendate");
                        document.getElementById(5).classList.add("today");
                    }
                    if (currentday == 6) {
                        document.getElementById(0).classList.add("hiddendate");
                        document.getElementById(1).classList.add("hiddendate");
                        document.getElementById(2).classList.add("hiddendate");
                        document.getElementById(3).classList.add("hiddendate");
                        document.getElementById(4).classList.add("hiddendate");
                        document.getElementById(5).classList.add("hiddendate");
                        document.getElementById(6).classList.add("today");
                    }
                    var iempo = document.getElementById("numberoftimes").innerHTML;
                    var iempo1 = iempo.includes("1");
                    if (iempo1 == true) {
                        numberoftimes = "1";
                    }
                    var iempo2 = iempo.includes("2");
                    if (iempo2 == true) {
                        numberoftimes = "2";
                    }
                    var iempo3 = iempo.includes("3");
                    if (iempo3 == true) {
                        numberoftimes = "3";
                    }
                    var iempo4 = iempo.includes("4");
                    if (iempo4 == true) {
                        numberoftimes = "4";
                    }
                    for (let i = 0; i < 28; i++) {
                        document.getElementById(currentday).innerHTML = currentmonthday;
                        var fulldate = "fulldate" + (currentday + i);
                        document.getElementById(currentday + i).innerHTML = currentmonthday + i;
                        if ((currentmonthday + i) > daysinmonth) {
                            if (currentmonth == 12) {
                                document.getElementById(currentday + i).innerHTML = document.getElementById(currentday + i).innerHTML - daysinmonth;
                                document.getElementById(fulldate).innerHTML = (1) + "/" + ((currentmonthday + i) - daysinmonth) + "/" + (currentyear + 1);
                                var currentfulldate = (currentmonth + 1) + "/" + ((currentmonthday + i) - daysinmonth) + "/" + (currentyear + 1);
                            }   else {
                                document.getElementById(currentday + i).innerHTML = document.getElementById(currentday + i).innerHTML - daysinmonth;
                                document.getElementById(fulldate).innerHTML = (currentmonth + 1) + "/" + (currentmonthday + i) - daysinmonth + "/" + currentyear;
                                var currentfulldate = (currentmonth + 1) + "/" + ((currentmonthday + i) - daysinmonth) + "/" + currentyear;
                            }
                        } else {
                            document.getElementById(fulldate).innerHTML = currentmonth + "/" + (currentmonthday + i) + "/" + currentyear;
                            var currentfulldate = currentmonth + "/" + (currentmonthday + i) + "/" + currentyear;
                        }
                        var result1 = notopen1.includes(currentfulldate);
                        var result2 = notopen2.includes(currentfulldate);
                        var result3 = notopen3.includes(currentfulldate);
                        var result4 = notopen4.includes(currentfulldate);
                        var result5 = notopen5.includes(currentfulldate);
                        if (numberoftimes == "1") {
                            if (result1 === true) {
                                document.getElementById(currentday + i).classList.add("unavailabledate");
                            }
                        }
                        if (numberoftimes == "2") {
                            if (result1 === true && result2 === true) {
                                document.getElementById(currentday + i).classList.add("unavailabledate");
                            }
                        }
                        if (numberoftimes == "3") {
                            if (result1 === true && result2 === true && result3 === true) {
                                document.getElementById(currentday + i).classList.add("unavailabledate");
                            }
                        }
                        if (numberoftimes == "4") {
                            if (result1 === true && result2 === true && result3 === true && result4 === true ) {
                                document.getElementById(currentday + i).classList.add("unavailabledate");
                            }
                        }
                        if (result5 === true) {
                            document.getElementById(currentday + i).classList.add("unavailabledate");
                        }
                    }
                }
                </script>

                <div id="openstatus" style="display: none;" ></div>

                <div id="0" onclick="opentime(this.id)" class="circledate" >

                </div>
                <div style="display: none;" id="fulldate0" ></div>
                <div id="1" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate1" ></div>
                <div id="2" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate2" ></div>
                <div id="3" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate3" ></div>
                <div id="4" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate4" ></div>
                <div id="5" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate5" ></div>
                <div id="6" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate6" ></div>
                <div id="7" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate7" ></div>
                <div id="8" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate8" ></div>
                <div id="9" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate9" ></div>
                <div id="10" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate10" ></div>
                <div id="11" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate11" ></div>
                <div id="12" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate12" ></div>
                <div id="13" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate13" ></div>
                <div id="14" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate14" ></div>
                <div id="15" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate15" ></div>
                <div id="16" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate16" ></div>
                <div id="17" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate17" ></div>
                <div id="18" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate18" ></div>
                <div id="19" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate19" ></div>
                <div id="20" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate20" ></div>
                <div id="21" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate21" ></div>
                <div id="22" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate22" ></div>
                <div id="23" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate23" ></div>
                <div id="24" onclick="opentime(this.id)" class="circledate" >

                </div>
                <div style="display: none;" id="fulldate24" ></div>
                <div id="25" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate25" ></div>
                <div id="26" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate26" ></div>
                <div id="27" onclick="opentime(this.id)" class="circledate" >
                    
                </div>
                <div style="display: none;" id="fulldate27" ></div>
            </div>
        </div>

        <div id="tab3" > 
        <div class="timewidget" id="timewidget">
            <center>
                <div class="timetext" id="timetext" >
                    12/9/2021
                </div>
                <br><br>
            </center>
        
            <div id="firsttime" class="time" onclick="opendetails1()" >
                <span id="t1" >
                    <?php
                        $servername = "sql111.epizy.com";
                        $username = "epiz_26305658";
                        $password = "o2ev7L97FtNTb8v";
                        $dbname = "epiz_26305658_book";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT id, displaytime1 FROM settings";
                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "" . $row["displaytime1"]. "";
                        }
                        } else {
                        echo "Error";
                        }

                        $conn->close();

                    ?>
                </span>
            </div>

            <div id="secondtime" class="time" onclick="opendetails2()">
                <span id="t2" >
                    <?php
                        $servername = "sql111.epizy.com";
                        $username = "epiz_26305658";
                        $password = "o2ev7L97FtNTb8v";
                        $dbname = "epiz_26305658_book";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT id, displaytime2 FROM settings";
                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "" . $row["displaytime2"]. "";
                        }
                        } else {
                        echo "Error";
                        }

                        $conn->close();

                    ?>
                </span>
            </div>

            <div id="thirdtime" class="time" onclick="opendetails3()">
                <span id="t3" >
                    <?php
                        $servername = "sql111.epizy.com";
                        $username = "epiz_26305658";
                        $password = "o2ev7L97FtNTb8v";
                        $dbname = "epiz_26305658_book";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT id, displaytime3 FROM settings";
                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "" . $row["displaytime3"]. "";
                        }
                        } else {
                        echo "Error";
                        }

                        $conn->close();

                    ?>
                </span>
            </div>

            <div id="fourthtime" class="time" onclick="opendetails4()">
                <span id="t4" >
                    <?php
                        $servername = "sql111.epizy.com";
                        $username = "epiz_26305658";
                        $password = "o2ev7L97FtNTb8v";
                        $dbname = "epiz_26305658_book";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT id, displaytime4 FROM settings";
                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "" . $row["displaytime4"]. "";
                        }
                        } else {
                        echo "Error";
                        }

                        $conn->close();

                    ?>
                </span>
            </div>

        </div>
        </div>

<style>
* {
    margin: 0px;
}
#calenderslide {
    position: relative;
    left: 0px;
    width: 100vw;
    border-radius: 36px;
    padding: 30px;
    transition: 0.4s all;
    background-color: hsl(0, 0%, 93%);
}
#calendertab {
    position: relative;
    width: 100%;
    transition: 0.4s all;
    display: inline-block;
}
#timetab {
    position: relative;
    width: 100%;
    transform: translateX(100%);
    transition: 0.4s all;
    display: inline-block;
}
.detailswidget {
    background-color: hsl(0, 0%, 97%);
    width: 60%;
    padding: 10px 20px;
    border-radius: 20px;
    position: relative;
    transition: 0.4s all;
    margin: auto;
    vertical-align: top;
    z-index: 99;
}
#appointmenttype {
    display: inline-block;
    font-size: 35px;
    font-family: lexend deca;
    margin-left: 8px;
    position: relative;
    top: 3px;
}
#opencontacticon {
    vertical-align: sub;
    position: relative;
    font-size: 30px;
    margin-left: -3px;
    margin-right: -3px;
    color: darkblue;
}
.time {
    width: 100%;
    max-width: 300px;
    background-color: dodgerblue;
    color: white;
    font-size: 25px;
    padding: 18px 25px;
    margin: auto;
    margin-bottom: 10px;
    border-radius: 12px;
    font-weight: 600;
    font-family: lexend deca;
    text-align: center;
    cursor: pointer;
}
.unavailabletime {
    background-color: hsl(0, 0%, 93%) !important;
    color: grey !important;
    cursor: default !important;
    transition: 0s all !important;
    pointer-events: none !important;
}
#timearrow {
    font-size: 30px;
    float: right;
}
#selecteddate {
    font-family: lexend deca;
    font-size: 25px;
    margin-bottom: 20px;
    font-weight: 700;
}
.input {
    width: 90%;
    position: relative;
    background-color: hsl(0, 0%, 88%);
    color: black;
    padding: 11px 20px;
    border-radius: 15px;
    font-size: 22px;
    outline: none;
    font-family: lexend deca;
    border: none;
    box-sizing: border-box;
    margin: auto;
}
.title {
    font-size: 43px;
    font-weight: 700;
    font-family: lexend deca;
    
}
#submiticon {
    font-size: 29px;
    vertical-align: sub;
}
fieldset {
    border: none;
    padding: 8px;
    font-weight: 300;
    font-family: lexend deca;
}
legend {
    font-size: 35px;
    font-family: lexend deca;
    text-align: center;
    font-weight: 600;
    padding: 38px 10px;
    color: dodgerblue;
}
.forrm {
    outline: 2px solid hsl(0, 0%, 80%);
    width: 75%;
    font-size: 24px;
    text-align: center;
    border-radius: 12px;
    font-weight: 300;
    font-family: lexend deca;
    border: none;
    max-width: 600px;
    padding: 12px;
    color: black;
}
textarea {
    outline-width: 0;
    width: 90%;
    font-size: 24px;
    height: 140px;
    text-align: center;
    border-radius: 31px;
    font-weight: 450;
    font-family: lexend deca;
    border: none;
    color: #363636;
    padding: 12px;
    resize: vertical;
}
.contactopen {
    width: fit-content;
    width: -moz-fit-content;
    padding-left: 16px;
    padding-right: 16px;
    padding-top: 8px;
    padding-bottom: 8px;
    background-color: #60fb9d;
    font-size: 25px;
    font-family: lexend deca;
    color: black;
    border-radius: 26px;
    cursor: pointer;
    outline: 0px solid;
    font-weight: 600;
}
#confim {
    display: none;
}
::-webkit-scrollbar {
    width: 17px;
    background-color: transparent;
}
::-webkit-scrollbar-track {
    background-color: white;
}
::-webkit-scrollbar-thumb {
    border-radius: 100px;
    border: 3.8px solid transparent;
    background-clip: content-box;
    background-color: #4d4c4c;
}
.forrrm {
    position: relative;
    display: inline-block;
    background-color: hsl(212, 11%, 36%); 
    color: white;
    margin: 4px;
    padding-top: 11px;
    padding-left: 0px;
    box-sizing: border-box;
    height: 60px;
    width: 60px;
    font-size: 28px;
    font-weight: 600;
    border-radius: 30px;
    cursor: pointer;
    font-family: lexend deca;
    transition: all 0.4s ease;
}
* {
    margin: 0px;
}
@media (max-width: 745px) {
    #tab4 {
        overflow-y: auto;
    }
    legend {
        font-size: 28px;
        font-family: lexend deca;
        text-align: center;
        font-weight: 500;
        padding: 18px 7px;
    }
    #typewidget {
        position: relative;
        margin: auto;
        margin-top: -14px;
    }
    .forrm {
        width: 95%;
        font-size: 21px;
        text-align: center;
        border-radius: 12px;
        font-weight: 300;
        font-family: lexend deca;
        border: none;
        max-width: 600px;
        padding: 12px;
        box-sizing: border-box;
        color: black;
    }
    .athomeopt, .atgarageopt {
        display: block;
        width: calc(100% - 20px);
        margin-left: 10px;
        padding-left: 8px;
        padding-right: 8px;
        padding-top: 8px;
        padding-bottom: 10px;
    } 
    .detailswidget {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 14px;
        margin-top: -14px;
        overflow-y: auto;
    }
    .timewidget {
        width: 100%;
        padding: 0px;
        padding-bottom: 15px;
        border-radius: 14px;
        margin-top: -14px;
    }
    .time {
        width: calc(100% - 20px);
        background-color: dodgerblue;
        color: white;
        font-size: 25px;
        padding: 18px 25px;
        margin: auto;
        margin-bottom: 10px;
    }
    .timetext {
        font-weight: 600;
        font-size: 23px;
        left: 0px;
        padding-bottom: 0px;
        bottom: -15px;
        padding-top: 5px;
        position: relative;
        width: 100%;
        margin: auto;
    }
    .detailstext {
        font-weight: 600;
        font-size: 23px;
        left: 0px;
        padding-bottom: 15px;
        bottom: -15px;
        padding-top: 0px;
        position: relative;
        width: 100%;
        margin: auto;
    }
    .calenderwidget {
        width: 100%;
        margin-top: -14px;
        padding-top: 13px;
        padding-left: 0px;
        padding-right: 0px;
        padding-bottom: 9px;
        box-sizing: border-box;
        border-radius: 14px;
    }
    #toptab {
        display: none;
    }
    .processtext {
        font-size: 19px;
    }
    #progress {
        margin-top: 10px;
        margin-bottom: -18px;
    }
    #process {
        width: 100%;
        box-sizing: border-box;
        left: 0px;
        margin-left: 0px;
        padding: 10px;
        margin-bottom: -18px;
    }
    #typetext {
        display: none;
    }
    .circledate {
        font-family: lexend deca;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 2px;
        box-sizing: border-box;
        font-weight: 700;
        height: 12vw;
        width: 12vw;
        border-radius: 12px;
        font-size: 18px;
        background-color: dodgerblue;
        color: white;
        margin: 0.8vw;
        cursor: pointer;
        transition: 0.4s all;
        margin-bottom: 8px;
        margin-top: 3px;
    }
    .circledate:hover {
        transition: 0.4s all;
        background-color: royalblue;
    }
    .day {
        font-size: 17px;
        padding: 0px;
        padding-bottom: 12px;
        margin-top: 4px;
    }
}
</style>

        <div id="tab4" >
        <div class="detailswidget" id="detailswidget">
                <center>
                    

                    <form style="background-color: transparent;" id="book" name="book" method="POST" action="/appointments/confirm/" >
                        <div class="detailstext" id="detailstext" >
                        4:00 PM at 12/9/2021
                        </div>
        
                        <div>
                            <legend>Name</legend><input autocomplete="off" id="Name"  class="forrm" name="name" type="text" required>
                        </div>
                        <div>
                            <legend>Email</legend><input class="forrm" style="overflow:hidden" autocomplete="off" name="email" type="text" required>
                        </div>
                        <div>
                            <legend>Phone Number</legend><input autocomplete="off" id="Phone Number" class="forrm" name="phone" type="text" required>
                        </div>
                        <div id="addressdiv">
                            <legend>Your Address</legend><input autocomplete="off" id="address" class="forrm" name="address" type="text" required>
                        </div>
                        <div>
                            <legend>What Needs Repairing?</legend><textarea autocomplete="off" id="Phone Number" class="forrm" name="comments" type="text"></textarea>
                        </div>

                        <input autocomplete="off" id="type" style="display: none;" class="forrm" name="type" type="text">

                        <input autocomplete="off" id="date" style="display: none;" class="forrm" name="date" type="text">

                        <input autocomplete="off" id="database" style="display: none;" class="forrm" name="database" type="text">

                        <input autocomplete="off" id="time" style="display: none;" class="forrm" name="time" type="text">
        
                        <br><br>
                        <div style="width: fit-content;" ><button ID="SubmitButton1" class="clearbutton" type="submit" name="submit" >Book Appointment</button>
                        <br><br><br>
                        </div>
                    </form>

                    <script>
                        const sURL = 'https://script.google.com/macros/s/AKfycbxPz3HesKQJpPZxlJ7H9RNgp1hMWvLADWPnJgtC9WqXfMXI0w/exec'
                        const form5 = document.forms['book']

                        form5.addEventListener('submit', e => {
                            fetch(sURL, { method: 'POST', body: new FormData(form5)})
                            .then(response => console.log('Success!', response))
                            .catch(error => console.error('Error!', error.message))
                        })
                    </script>

                </center>
        </div>
        </div>

    </div>

</div>

</body>