<?php
include 'conn.php';
$json = file_get_contents('php://input');
$data = json_decode($json);
$finalDataArray = [];
$tableEmiarray = array (
    array("ele_emi"),
    array("trans_emi"),
    array("crop_emi","forest_emi","land_emi","live_emi"),
    array("msw_emi","bmw_emi","hw_emi"),
    array( "waste_emi"),
    array("indu_eng_emi","indu_cem_emi","indu_chem_emi","indu_other_emi"),
    array("fule_emi"),
   );

$query2 = "SELECT Distinct(name) FROM city_name";
$result = mysqli_query($conn, $query2)  or die(mysqli_error($conn));

while ($row = mysqli_fetch_array($result)) {
    $cityName = $row['name'];
    $basicIdquery = "SELECT id FROM basic_info WHERE city='" . $cityName . "'";
    $basicresult = mysqli_query($conn, $basicIdquery)  or die(mysqli_error($conn));
    $rowcount = mysqli_num_rows($basicresult);
    $mainData = array();
    $tblOfPoluEmi="";
    if ($rowcount == 0) {
        for ($i = 0; $i < sizeof($tableEmiarray); $i++) {
            $tbarray = $tableEmiarray[$i];
            for($j=0;$j<sizeof($tbarray);$j++){
                $polutype = $tbarray[$j];
            }
            $mainData['country'] = $cityName;
             $mainData['ch4'] = 0;
             $mainData['n2o'] = 0;
             $mainData['co2'] = 0;
        }
    } else {
        $row = mysqli_fetch_array($basicresult);
        $basicId = $row['id'];
        $ch4 = 0;
        $n2o = 0;
        $co2 = 0;
        for ($i = 0; $i < sizeof($tableEmiarray); $i++) {
            $polutype = $tableEmiarray[$i];
           
            $tbarray=$tableEmiarray[$i];

            for($j=0;$j<sizeof($tbarray);$j++){
                $polutype = $tbarray[$j];

                $dataQuery = "SELECT ch4 , n2o , co2  FROM $polutype WHERE b_id='" . $basicId . "'";
                $emiresult = mysqli_query($conn, $dataQuery)  or die(mysqli_error($conn));
                $rowcount = mysqli_num_rows($emiresult);
                if ($rowcount != 0) {
                    $row = mysqli_fetch_array($emiresult);
                    $ch4 += $row['ch4'];
                    $n2o += $row['n2o'];
                    $co2 += $row['co2'];
                }
            }   
        }
        $mainData['country'] = $cityName;
        $mainData['ch4'] = round($ch4,3);
        $mainData['n2o'] = round($n2o,3);
        $mainData['co2'] = round($co2,3);
    }
    array_push($finalDataArray, $mainData);
}
echo  json_encode($finalDataArray);
?>