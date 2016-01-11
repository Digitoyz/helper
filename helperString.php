<?php
/**
 * Created by PhpStorm.
 * User: saika
 * Date: 11/01/2016
 * Time: 15:25
 */

class helper
{

    public static function csvToArray($filename)
    {
        $han = fopen($filename, 'r');
        $data = array();
        $header = fgetcsv($han);
        while (($row = fgetcsv($han)) !== false) {
            $data[] = array_combine($header, $row);
        }
        fclose($han);
        return $data;
    }

    public static function arrayToCsv($filename, $data)
    {
        $han = fopen($filename, 'w+');
        fputcsv($han, array_keys($data[0]));
        foreach ($data as $row) {
            fputcsv($han, $row);
        }
        fclose($han);
    }

    public static function test()
    {
        echo "\n\nWORKING\n\n";
    }

}