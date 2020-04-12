<?php
 include 'calculations.php';

 function covid19ImpactEstimator($data)
 {

  
  
  $data = '{
    "region":{
      "name":"Africa",
      "avgAge":19.7,
      "avgDailyIncomeInUSD":5,
      "avgDailyIncomePopulation":0.71
    },
    "periodType":"days",
    "timeToElapse":58,
    "reportedCases":674,
    "population":66622705,
    "totalHospitalBeds":1380614
  }';

  $data1 = '{
    "region":{
      "name":"Africa",
      "avgAge":19.7,
      "avgDailyIncomeInUSD":5,
      "avgDailyIncomePopulation":0.71
    },
    "periodType":"days",
    "timeToElapse":58,
    "reportedCases":674,
    "population":66622705,
    "totalHospitalBeds":1380614
  }';

    $obj = json_decode($data);
    $obj1 = json_decode($data1);
    $test = json_encode( $obj1 );
   

$impact = impact($data);
 $currentlyInfected =currentlyInfected($obj);
 $availableBeds =   avaiableBeds($obj);
 $currentlyInfectedSevery = currentlyInfectedSevery($obj);
 $severeCasesByRequestedTimeImpact= infectionsByRequestedTimeImpact($obj);
$infectionsByRequestedTime =infectionsByRequestedTimeSavereImpact($obj);
 $infectionsByRequestedTime =infectionsByRequestedTimeSavereImpact($obj);
 $severeCasesByRequestedTime =infectionsByRequestedTimeSavereImpactByparcentage($obj);
 $hospitalBedsByRequestedTime =avaiableBeds($obj);
  $hospitalBedsByRequestedTime = hospitalBedsByRequestedTimeSavere ($obj);
 $casesForICUByRequestedTime = casesForICUByRequestedTime($obj);
  $casesForVentilatorsByRequestedTime = casesForVentilatorsByRequestedTime($obj);
$dollarsInFlight = dollarsInFlight($obj);









$impact = array(
  "currentlyInfected" => $currentlyInfected,
  "availableBeds" => $availableBeds,
  "severeCasesByRequestedTime"=> $severeCasesByRequestedTimeImpact,
  "hospitalBedsByRequestedTime" => $hospitalBedsByRequestedTime,
);
$severeImpact= array(
  "currentlyInfected" => $currentlyInfectedSevery,
  "availableBeds" => $availableBeds,
  "severeCasesByRequestedTime"=> $severeCasesByRequestedTime,
  "hospitalBedsByRequestedTime" => $hospitalBedsByRequestedTime,
  "casesForICUByRequestedTime" => casesForICUByRequestedTime($obj),
  "casesForICUByRequestedTime" => casesForICUByRequestedTime($obj),
  "dollarsInFlight" =>dollarsInFlight($obj),
);

$dd =array(

  "data" => json_decode($test),
  "impact" => $impact,
  "severeImpact" =>  $severeImpact,

  );








// $dd[] = json_decode($test);
// $dd[] = json_decode(json_encode($impact,true));
// $dd[] = json_decode(json_encode($severeImpact,true));
$json_merge = json_encode($dd);

$data =$json_merge;




return $data ;
  //print_r($data);







 // return  $currentlyInfected ;
}

//print_r($data);

//print(covid19ImpactEstimator());


?>
