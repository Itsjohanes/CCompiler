<?php
$language = strtolower($_POST['language']);
$code = $_POST['code'];

$random = substr(md5(mt_rand()), 0, 7);
$filePath = "temp/" . $random . "." . $language;
$programFile = fopen($filePath, "w");
fwrite($programFile, $code);
fclose($programFile);


if ($language == "c") {
    $outputExe = $random . ".exe";
    shell_exec("gcc $filePath -o $outputExe");
    $output = shell_exec(__DIR__ . "//$outputExe");
    echo $output;
}
if ($language == "cpp") {
    $outputExe = $random . ".exe";
    shell_exec("g++ $filePath -o $outputExe");
    $output = shell_exec(__DIR__ . "//$outputExe");
    echo $output;
}
