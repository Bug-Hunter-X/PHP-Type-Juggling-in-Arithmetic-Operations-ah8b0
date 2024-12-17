```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) { 
      $sum += $number;
    } else {
      //Handle non-numeric values appropriately.  
      // Options include throwing an exception, ignoring the value, or using a default value.
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING); 
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Notice the improved handling
```