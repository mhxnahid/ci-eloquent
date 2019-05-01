<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Capsule\Manager as Capsule;
use Jenssegers\Blade\Blade;

class Userc extends CI_Controller {
	function __construct()
    {
		parent::__construct();
		
		$this->load->model('user');
		$this->blade = new Blade(Globals::views(), Globals::cache());
    }
    
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function blade(){
		echo $this->blade->make('homepage', ['name' => 'John Doe']);
	}
	
	public function create()
	{
		$data = [
			'email' => 'kiki@fi.com'
		];
		User::create($data);
	}
	
	public function list()
	{
		$users = User::first();
		print_r($users);
	}
	
	public function update()
	{
		$users = User::where('email', 'kiki@fi.com')->first();
		$users->email = 'dix@er.er';
		$users->save();
	}
	
	public function build()
	{
		Capsule::schema()->create('users', function ($table) {
			$table->increments('id');
			$table->string('email')->unique();
			$table->timestamps();
		});
	}
}
