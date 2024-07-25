<?php

namespace Database\Seeders;

use App\Functions\Utilities;
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
        $animalsData = Utilities::getCsvInfo(__DIR__ . '/../../resources/assets/animals.csv');

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

}
