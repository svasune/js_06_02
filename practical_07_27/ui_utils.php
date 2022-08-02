<?php function printHelloName(string $firstName, string $lastName)
{
    $fullName = "";
    foreach (func_get_args() as $index => $name)
        if ($index !== 0)
            $fullName .= " " . $name;
    echo "<h1>Hello " . $fullName . " </h1>";
}

// function printHelloName(string $firstName, string $lastName)
// {
//     echo "<h1>Hello " . $firstName . " " . $lastName . " " . func_get_args()[2] . " " . " </h1>";
// }


function printHellName(string $firstName, string $lastName)
{
    echo "<h1>Hello " . $firstName . " " . $lastName . " " . func_get_args()[2] . " " . " </h1>";
}
