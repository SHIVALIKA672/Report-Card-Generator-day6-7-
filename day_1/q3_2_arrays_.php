<?php
$arr1 = array( array(2,4 ), array(6, 8) );
$arr2 = array( array(6,8 ), array(10,12) );
echo "First Matrix:<br>";
for ($i=0;$i<2;$i++)
{
  for ($j=0;$j<2;$j++)
    {
      echo $arr1[$i][$j];
      echo "   ";
    }
echo "<br>";
}
echo "Second Matrix:<br>";
for ($i=0;$i<2;$i++)
{
  for ($j=0;$j<2;$j++)
    {
      echo $arr2[$i][$j];
      echo "   ";
    }
echo "<br>";
}
echo "<h1>After Addition:</h1>";
echo "Resultant Matrix:<br>";
for ($i=0;$i<2;$i++)
{
  for ($j=0;$j<2;$j++)
    {
      echo $arr1[$i][$j]+$arr2[$i][$j];
      echo "   ";
    }
echo "<br>";
}
