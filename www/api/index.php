<?php

include __DIR__ . '/../../vendor/autoload.php';

use Silex\Application;

$app = new Application();

$app->get("/", function (Application $app) {
    return $app->json([
        'status' => true,
    ]);
});

$app->get('gridData', function (Application $app) {
    return $app->json([
        ['lastName' => uniqid(), 'name' => "Al", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 4, 'src' => "images/person1.gif"],
        ['lastName' => "Friese", 'name' => "Andy", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 2, 'src' => "images/person1.gif"],
        ['lastName' => "Mann", 'name' => "Anita", 'checked' => false, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "female", 'rating' => 3, 'src' => "images/person1.gif"],
        ['lastName' => "Schutt", 'name' => "Doris", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "female", 'rating' => 4, 'src' => "images/person1.gif"],
        ['lastName' => "Open", 'name' => "Doris", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "female", 'rating' => 2, 'src' => "images/person1.gif"],
        ['lastName' => "Dewit", 'name' => "Kenya", 'checked' => false, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "female", 'rating' => 3, 'src' => "images/person1.gif"],
        ['lastName' => "Zar", 'name' => "Lou", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 1, 'src' => "images/person1.gif"],
        ['lastName' => "Burr", 'name' => "Tim", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 2, 'src' => "images/person1.gif"],
        ['lastName' => "Hughes", 'name' => "Tish", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 5, 'src' => "images/person1.gif"],
        ['lastName' => "Lester", 'name' => "Mo", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 3, 'src' => "images/person1.gif"],
        ['lastName' => "Case", 'name' => "Justin", 'checked' => false, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 3, 'src' => "images/person1.gif"],
        ['lastName' => "Time", 'name' => "Justin", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 4, 'src' => "images/person1.gif"],
        ['lastName' => "Barr", 'name' => "Gaye", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 2, 'src' => "images/person1.gif"],
        ['lastName' => "Poole", 'name' => "Gene", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 1, 'src' => "images/person1.gif"],
        ['lastName' => "Ander", 'name' => "Corey", 'checked' => false, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 5, 'src' => "images/person1.gif"],
        ['lastName' => "Early", 'name' => "Brighton", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 3, 'src' => "images/person1.gif"],
        ['lastName' => "Noring", 'name' => "Constance", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "female", 'rating' => 4, 'src' => "images/person1.gif"],
        ['lastName' => "Haas", 'name' => "Jack", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 2, 'src' => "images/person1.gif"],
        ['lastName' => "Tress", 'name' => "Matt", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "male", 'rating' => 4, 'src' => "images/person1.gif"],
        ['lastName' => "Turner", 'name' => "Paige", 'checked' => true, 'linkText' => "www.sap.com", 'href' => "http://www.sap.com", 'gender' => "female", 'rating' => 3, 'src' => "images/person1.gif"]
    ]);
});

$app->run();
