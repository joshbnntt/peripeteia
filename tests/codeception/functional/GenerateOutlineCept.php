<?php 
$I = new FunctionalTester($scenario);
$I->am('a teacher');
$I->wantTo('Generate a new Course Outline');

$I->amOnPage('/courseoutline/create');

$I->fillField('course_name', 'Data Structures and Algorithms');
$I->fillField('credit_hours', '5');
$I->fillField('instructor_name', 'Dr Howell');
$I->fillField('office_location', 'AC 201');
$I->fillField('office_hours', 'T II TH IV');
$I->fillField('email', 'rHowell@faculty.pcci.edu');
$I->fillField('course_description', 'You learn about data structures');
$I->fillField('course_prerequisites', 'C Programming');
$I->fillField('course_texts', 'Data Structures and Algorithms');
$I->fillField('course_outcomes', 'You learn about pointer arithematic');

$I->click('Submit!');

$I->seeCurrentUrlEquals('/courseoutline/display');
$I->seeCurrentUrlEquals('/courseoutline/create');
