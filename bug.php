```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strpos($value, 'ERROR') !== false) {
      unset($data[$key]); // Removing elements with 'ERROR'
    }
  }
  return $data;
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