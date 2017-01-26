<?php

namespace App;

use Exception;

class Main {

    public function getCategories() {
        return $this->getCategoryData();
    }

    private function getCategoryData() {
        return  [
            "explicit",
            "dev",
            "movie",
            "food",
            "celebrity",
            "science",
            "political",
            "sport",
            "religion",
            "animal",
            "music",
            "history",
            "travel",
            "career",
            "money",
            "fashion"
        ];
    }

    public function getRandomJokes($randomNumber) {

        if( !is_integer($randomNumber)) {
            throw new Exception("The random number should be an integer. Please try again.");
        }

        $jokes = [
          "Jon Skeet’s code doesn’t follow a coding convention. It is the coding convention.",
          "Jon Skeet can divide by Zero.",
          "Jon Skeet points to null, null quakes in fear.",
          "Jon Skeet is the traveling salesman. Only he knows the shortest route.",
          "When Jon pushes a value onto a stack, it stays pushed.",
          "Drivers think twice before they dare interrupt Jon’s code.",
          "Jon Skeet does not sleep…. He waits.",
          "Jon Skeet can stop an infinite loop just by thinking about it.",
          "Jon Skeet uses Visual Studio to burn CDs.",
          "Jon Skeet has the key to Open Source. He just doesn’t want to close it."
        ];

        return $jokes[$randomNumber];
    }
}
