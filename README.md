# PHP Recursive Function with Unset() Unexpected Behavior
This example demonstrates an uncommon bug in PHP related to using `unset()` within a `foreach` loop that iterates over an array that is being modified.  The recursive function `processData` intends to remove elements containing the substring 'ERROR'.  The problem is the index of the array is modified while looping over it, resulting in some elements being skipped.

The solution demonstrates how to avoid this issue.