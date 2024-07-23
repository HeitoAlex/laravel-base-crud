<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use InvalidArgumentException;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $animalsData = $this->getCsvInfo(__DIR__ . '/../resources/assets/animal.csv');

        foreach ($animalsData as $index => $singleAnimalData){

            if($index > 0){
                $newAnimal = new Animal();
                $newAnimal->name = $singleAnimalData[1];
                $newAnimal->class = $singleAnimalData[2];
                $newAnimal->order = $singleAnimalData[3];
                $newAnimal->family = $singleAnimalData[4];
                $newAnimal->diet = $singleAnimalData[5];
                $newAnimal->habitat = $singleAnimalData[6];
                $newAnimal->created_at = $singleAnimalData[7];
                $newAnimal->updated_at = $singleAnimalData[8];
                $newAnimal->save();
            }
        }
    }

    public function getCsvInfo($filePath){

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
