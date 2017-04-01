<?php

// use Acme\Users\Person;
// use Acme\Business;
// use Acme\Staff;

// $jeffrey = new Person('Jeffref Way');
// $staff = new Staff([$jeffrey]);
// $laracasts = new Business($staff);
// $laracasts->hire(new Person('Jane Doe'));

// var_dump($staff->getMembers());

// class Math {
// 	public static function add(...$nums){
// 		return array_sum($nums);
// 	}
// }

// var_dump(Math::add(1, 2, 3, 4));

// class Person { 

// 	public $age;
// 	public function haveBirthday(){
// 		static::$age ++;
// 	}
// 	public function age(){
// 		retur $this->age;
// 	}
// }

// $joe = new Person;
// $joe->haveBirthday();

// $jane = new Person;
// $jane->haveBirthday();
// echo $joe->$age;

// class BankAccount {
// 	const TAX = .09;
// }

// echo BankAccount::TAX;

// interface Animal {
// 	public function communicate();
// }

// class Dog implements Animal {
// 	public function communicate(){
// 		echo 'Bark!'."\n";
// 	}
// }

// class Cat implements Animal{
// 	public function commnuicate(){
// 		return 'Meow~'."\n";
// 	}
// }

// (new Dog)->communicate();

// interface Logger {
// 	public function execute($message);
// }

// class LogToFile implements Logger {
// 	public function execute($message){
// 		var_dump("log the message to a file: {$message}");
// 	}
// }

// class LogToDataBase implements Logger{
// 		public function execute($message){
// 		var_dump('log the message to a database');
// 	}
// }

// class UsersController{
// 	protected $logger;
// 	public function __construct(Logger $logger){
// 		$this->logger = $logger;
// 	}
// 	public function show(){
// 		$user = 'John Doe';
// 		$this->logger->execute($user);
// 	}
// }

// (new UsersController(new LogToDataBase))->show();

// interface Repository {
// 	public function save($data);
// }

// class MongoRepository implements Repository {

// }

// class FileRepository implements Repository {

// }

// interface Filterable {
// 	public function filter();
// }

// class Favorited implements Filterable {
// 	public function filter(){

// 	}
// }

// class Unwatched implements Filterable {
// 	public function filter(){
		
// 	}
// }

// class Difficulty implements Filterable {
// 	public function filter(){
		
// 	}
// }

// interface Provider {
// 	public function getAuthorizationURL();
// }

// function login(Provider $provider){
// 	$provider->authorize();
// }

// abstract class Provider {
// 	abstract protected function getAuthorizationURL();
// }

// class FacebookProvider implement Provider {
// 	protected function getAuthorizationURL(){
// 		return '';
// 	}
// }

// new FacebookProvider;


use Acme\RegisterUser;
use Acme\AuthController;

$registration = new Acme\RegisterUser; 
$authController = new Acme\AuthController($registration);
$authController->register();
