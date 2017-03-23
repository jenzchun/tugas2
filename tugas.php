<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/conditions/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $lokasi = $parsed_json->{'current_observation'}->{'display_location'}->{'full'};
  $cuaca = $parsed_json->{'current_observation'}->{'weather'};
  $suhu = $parsed_json->{'current_observation'}->{'temperature_string'};
  echo "Weather in ${lokasi} is ${cuaca} and temperature is : ${suhu}\n";
?>
<br><br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/tide/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $waktu = $parsed_json->{'tide'}->tideSummary[0]->{'date'}->{'pretty'};
  $lokasi = $parsed_json->{'tide'}->tideSummary[0]->{'date'}->{'tzname'};
  $height_t = $parsed_json->{'tide'}->tideSummary[0]->{'data'}->{'height'};
  $type_t = $parsed_json->{'tide'}->tideSummary[0]->{'data'}->{'type'};
  echo "at ${waktu} in ${lokasi}<br>";
  echo "Height of tide is ${height_t} and type is ${type_t}";
?>
<br><br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/astronomy/q/Australia/Sydney.json");
  $parsed_json = json_decode($json_string);
  $Umurbulan = $parsed_json->{'moon_phase'}->{'ageOfMoon'};
  $sunrise_h = $parsed_json->{'moon_phase'}->{'sunrise'}->{'hour'};
  $sunrise_m = $parsed_json->{'moon_phase'}->{'sunrise'}->{'minute'};
  echo "Di Sydney Australia, umur bulan adalah ${Umurbulan},<br>";
  echo "Matahari terbit pada pukul ${sunrise_h}:${sunrise_m}";
  ?>