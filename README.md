# Design Patterns
### Abstract Factory Pattern - PHP Implementation Example
#### Marvin Soriano - 2020 (GNU)

#### Context of teh example
Imagine that we have a software who's responsability is to create Cars, but not only "cars", 2 (or more) different car types (Urban and Competition).
This case would be a solid candidate to apply the Abstract Factory Pattern, to help us to abstract and define, an scalable factory of related objects, 
encapsulating its logic independently of the specific implementation of each type of cars

1. Clone the project
```
$ git clone https://github.com/marvinsg/designPatterns.git
```

2. Run composer install
```
$ composer install
```

3. You can lauch tests
```
$ php vendor/bin/phpunit tests/Unit
```