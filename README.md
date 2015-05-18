# solid-zoo
This is essentially a code kata. The goal is to implement a version of the zoo described below. Like all code katas, can may be implemented in any language. This is a PHP implementation.

## PHP Requirements
1. Do not violate any SOLID principle
1. Provide passing tests with 100% code coverage.
1. Any test tool (PHPUnit, Behat, etc.) is acceptable.
1. Use PSR-4 autoloading.
1. Use PSR-2 code styling.
1. Make it as DRY as possible.
1. Make it as simple as possible.
1. The code and tests must be readable. Clarity always has priority over syntactic sugar.
1. All dependencies must be managed by composer.
1. The composer.json must
  * pass ````composer diagnose````.
  * correctly separate app dependencies from dev dependencies.
1. This app must run on the command line, not in the browser. If necessary, use symfony/console.

## Challenge
You are to develop an application for the management of a zoo. You will need to implement the zoo requirements in OOP. All normal best practices should be used. The following are the requirements for the zoo. 

* The zoo is occupied by animals.
* The zoo can perform a Sound Off. Each animal in the zoo speaks and tells their energy level when a sound off occurs.
* Each animal has an integer value that keeps track of its current energy level.
* Each animal has an integer value that keeps track of the total number of its species that has been created.
* Each animal can eat, speak, sleep, and play.
* By default, animals get +8 energy for sleeping, +3 for eating, and -5 for playing.
* By default, animals say "Grrr" when speaking.
* By default, animals say "YE-AH!" when playing.
* If an animal doesn't have enough energy to play, he will say, "I'm tired."
* Animals eat food.
* Animal won't eat just any food. They must know what kind of food it is.
* The following foods are available in the zoo
  + Steak
  + Fish
  + Grain
* The following animals currently exist in the zoo
  + Lions
  + Tigers
  + Bears
* Lions can say "Roar" in addition to their usual "Grrr".
* Bears get +10 energy for sleeping.
* Tigers get -8 energy for playing.
* Tigers get no energy for eating grain.
* Some animals can be trained. Trainable animals can dance.
* Only bears are trainable. When a bear dances, it says, "Look, Ma! I'm dancing!"

