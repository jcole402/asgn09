<?php

function convert_to_gallons($value, $fromUnit) {
  switch($fromUnit) {
    case 'bucket':
      return $value * 4;
      break;
    case 'butt':
      return $value * 108;
      break;
    case 'firkin':
      return $value * 9;
      break;
    case 'hogshead':
      return $value * 54;
      break;
    case 'gallons':
      return $value;
      break;
    case 'pint':
      return $value * 0.125;
      break;
    default:
      return "Unsupported unit.";
  }
}

function convert_from_gallons($value, $toUnit) {
  switch($toUnit) {
    case 'bucket':
      return $value / 4;
      break;
    case 'butt':
      return $value / 108;
      break;
    case 'firkin':
      return $value / 9;
      break;
    case 'hogshead':
      return $value / 54;
      break;
    case 'gallons':
      return $value;
      break;
    case 'pint':
      return $value / 0.125;
      break;
    default:
      return "Unsupported unit.";
  }
}

function convert_measurement($value, $fromUnit, $toUnit) 
 {
  $meterValue = convert_to_gallons($value, $fromUnit);
  $newValue = convert_from_gallons($meterValue, $toUnit);
  return $newValue;
}

?>