srand((float) microtime() * 1000000);
shuffle($array);
for($i=0;$i<count($array);$i++){
  echo $array;
}
