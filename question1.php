<?php
/**
 * @param $array
 * @return mixed|void
 * Given the following example data structure. Write a single function to print out its nested key value pairs at any level for easy display to the user.

 */
function recursive($array)
{
    foreach ($array as $key => $value) {

        //If $value is an array.
        if (is_array($value)) {
            //We need to loop through it.
            return recursive($value);
        } else {
            //It is not an array, so print it out.
            return $value;
        }
    }
}

/**
 *
 */