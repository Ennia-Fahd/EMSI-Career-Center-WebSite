<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7050b839a0e8edc2d7e88de91e0ccc9
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OLERead' => __DIR__ . '/../..' . '/php-excel-reader/excel_reader2.php',
        'SpreadsheetReader' => __DIR__ . '/../..' . '/SpreadsheetReader.php',
        'SpreadsheetReader_CSV' => __DIR__ . '/../..' . '/SpreadsheetReader_CSV.php',
        'SpreadsheetReader_ODS' => __DIR__ . '/../..' . '/SpreadsheetReader_ODS.php',
        'SpreadsheetReader_XLS' => __DIR__ . '/../..' . '/SpreadsheetReader_XLS.php',
        'SpreadsheetReader_XLSX' => __DIR__ . '/../..' . '/SpreadsheetReader_XLSX.php',
        'Spreadsheet_Excel_Reader' => __DIR__ . '/../..' . '/php-excel-reader/excel_reader2.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf7050b839a0e8edc2d7e88de91e0ccc9::$classMap;

        }, null, ClassLoader::class);
    }
}
