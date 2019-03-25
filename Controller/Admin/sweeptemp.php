<?
/*	OXID SweepTemp
	Author: jonas.hess@revier.de
	Licence: GPLv3
*/

$tmp_folder = 'tmp';
$tmp_garbage = Array();
$tmp_smarty = Array();

//Define the Files to sweep by Regex
$tmp_garbage[] = '^[0-9a-z\^\%A-Z_]*oxforgotpw[0-9a-z\^\%A-Z_]*\.php$';
$tmp_garbage[] = '^[0-9a-z\^%A-Z_]*oxcontent[0-9]*oxbaseshop\.php$';
$tmp_garbage[] = '^[0-9a-z\^\%A-Z_]*\.tpl\.php$';
$tmp_garbage[] = '^[0-9a-z\^\%A-Z_]*sort[0-9a-z\^\%A-Z_]*\.tpl\.php$';
$tmp_garbage[] = '^[0-9a-z\^\%A-Z_]*basket[0-9a-z\^\%A-Z_]*\.tpl\.php$';
$tmp_garbage[] = '^[0-9a-z\^%A-Z_]*\_i18n\.txt$';
$tmp_garbage[] = '^[0-9a-z\^%A-Z_]*\_allfields\_1\.txt$';
$tmp_garbage[] = '^oxpec\_[0-9a-z\^%A-Z_]*seo\.txt$';
$tmp_garbage[] = '^oxpec\_[0-9a-z\^%A-Z_]*allviews\.txt$';
$tmp_garbage[] = '^oxpec\_[0-9a-z\^%A-Z_]*\_allfields\_\.txt$';
$tmp_garbage[] = '^oxpec\_langcache\_[0-9a-z\^%A-Z_]*\_default\.txt$';
$tmp_garbage[] = '^oxpec\_[0-9a-z\^%A-Z_]*Cache\.txt$';
$tmp_garbage[] = '^oxpec\_menu\_[0-9a-z\^%A-Z_]*\_xml\.txt$';
$tmp_garbage[] = '^oxpec\_oxuser\_[0-9a-z\^%A-Z_]*\.txt$';
$tmp_garbage[] = '^oxpec\_oxshops\_[0-9a-z\^%A-Z_]*\.txt$';

//Scan folder and delete

$files = scandir($tmp_folder . '/');
$count = 0;
foreach ($tmp_garbage as $regex) {
    foreach ($files as $file) {
        if (preg_match('/' . $regex . '/', $file) && file_exists($tmp_folder . '/' . $file)) {
            unlink($tmp_folder . '/' . $file);
            $count++;
        }
    }
}

// Sweep Smarty-TMP

//Define the Files to sweep by Regex
$smartyfiles = scandir($tmp_folder . '/smarty/');
$smartycount = 0;


foreach ($smartyfiles as $file) {
    if ($file != '.' && $file != '..') {
        unlink($tmp_folder . '/smarty/' . $file);
        $smartycount++;
    }
}

echo $count . ' Temp-File(s) deleted!';
echo ' // ' . $smartycount . ' Smarty-Tempfile(s) deleted!';

