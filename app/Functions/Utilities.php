<?php

namespace App\Functions;

use InvalidArgumentException;


class Utilities{

    public static function getCsvInfo($filePath){

        $csvData = [];

        // apriamo il file
        $fileData = fopen($filePath, 'r');

        // se non lo trovi...
        if ($fileData === false){
            throw new InvalidArgumentException('File not found, check your path!');
        }

        // se invece lo trovi...
        while (($csvRow = fgetcsv($fileData)) !== false){
            $csvData[] = $csvRow;
        }

        //chiudiamo il file
        fclose($fileData);

        return $csvData;
    }
}
