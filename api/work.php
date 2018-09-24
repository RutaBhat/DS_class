
<?php

echo "<pre>";
echo "foo";
echo 'bar\n';

$name = 'Phil';

echo "\n";
echo "My name is {$name}\n";
echo "My name is ". $name;

class Animal
{
public $type = 'Pig'
}

$wilbur = new Animal();
echo $wilbur->type;

if (true){
  //
}
else {
  //
}

for ($i = 0; $i< 10; $i++){
  //Stuff
}

$id = 0; // traditional way of doing it
if (isset($_GET['id'])){
  $id = $_GET['id'];
}

$id = isset($_GET['id'])? $_GET['id'] : 0; // if the id is there use that or else use the default value

$id = $_GET['id'] ?? 0; // same idea as above just shorter notation

$arr1 = [
  'first' => 'Tom',
  'last' => 'Gregory'
]; // in php array acts like both java script array and java script object

echo '[0]:' . $arr1[0];// wont work
echo '[first]:' . $arr1['first']; //will work

$arr2 = ['one', 'two', 'three'];

$arr2 = [
  0=>'one',
  1=>'two',
  2=>'three'];

foreach($arr2 as $key=>$val){
  echo $key. ":" .$val;
}
