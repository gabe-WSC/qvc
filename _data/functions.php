<?php

$connPath = $_SERVER['DOCUMENT_ROOT'];

$connPath .= "/new_qvc/_data/conn.php";
include ($connPath);

function resortData ($resort) {
    global $conn;
    $query = "SELECT * FROM CLUB_resorts WHERE name = '" . $resort . "' ";
    
    $result = mysqli_query($conn, $query);
    //  print_r(mysqli_fetch_assoc($result));
    if(!$result) {
        die('QUERY ERROR ' . mysqli_error($conn));
    } else {
        while($row = mysqli_fetch_assoc($result)) {
            global $address;
            global $chaletFacilities;
            global $chaletTypes;
            global $directions;
            global $gps;
            global $lat;
            global $lng;
            global $intro;
            global $nearbyFacilities;
            global $onsiteFacilities;
            global $notice;
            
            $address = $row['address'];
            $chaletFacilities = $row['chaletFacilities'];
            $chaletTypes = $row['chaletTypes'];
            $directions = $row['directions'];
            $gps = $row['gps'];
            $lat = $row['lat'];
            $lng = $row['long'];
            $intro = $row['intro'];
            $nearbyFacilities = $row['nearbyFacilities'];
            $onsiteFacilities = $row['onsiteFacilities'];
            $notice = $row['notice'];
        }
    }    
}

?>