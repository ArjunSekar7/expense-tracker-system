    <?php
function showReport($month, $year) {
    require_once 'entity/connect.php';
    require_once 'entity/EncapsuleClass.php';
    require_once 'entity/session.php';

    $incomeReport = array();
    $connect = new Connect;
    $encapsuleClass = new EncapsuleClass;
    $conn = $connect->getConnection();
    $sql = "SELECT * FROM incomeDetails where YEAR(getDate) = '" . $year . "' and MONTH(getDate) = '" . $month . "' and userId = '".$_SESSION["userId"]."'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $sql1 = "SELECT * FROM incomeConfiguration where incomeTypeId = '" . $row["incomeType"] . "'";
        $result1 = mysqli_query($conn, $sql1);
        if ($row1 = mysqli_fetch_assoc($result1)) {
           $incomeReport[$row1["incomeType"]] =  $row["amount"] ;
        }
    }
    require_once 'expenseReport.php';
    $expenseReport = showExpenseReport($month, $year);
    $conn->close();
    $_SESSION["incomeReport"] = $incomeReport;
    $_SESSION["expenseReport"] = $expenseReport;
    header("Location: ../view/viewReport.php");
}

?>
