```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strpos($value, 'ERROR') === false) {
      $newData[$key] = $value; //Keep elements without 'ERROR'
    }
  }
  return $newData;
}

$data = [
  'a' => 1,
  'b' => ['c' => 2, 'd' => 'ERROR in d'],
  'e' => ['f' => 3, 'g' => ['h' => 4, 'i' => 'ERROR in i']],
  'j' => 5,
];

$processedData = processData($data);
print_r($processedData);
```