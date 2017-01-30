<?php


//phone number validation
function phone_valid($phone)
{
  $justNums = preg_replace("/[^0-9]/", '', $phone);
  return $justNums;
}

function postcodes_valid($postcodes)
{
  $justNums = preg_replace("/[^0-9,]/", '', $postcodes);
  return $justNums;
}


