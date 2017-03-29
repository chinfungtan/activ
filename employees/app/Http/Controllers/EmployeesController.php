<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EmployeesController extends Controller
{
    public function employeeList()
    {
		$users = DB::select("SELECT * FROM employees");
		return view('employee', ['users' => $users]);
    }
	
	public function createEmployee() {
		return view('createemployee');
	}

	public function createEmployeeAction() {
		$name = Input::get('name');
		$email_address = Input::get('email_address');
		$contact = Input::get('contact');
		$address = Input::get('address');
		$postal_code = Input::get('postal_code');
		
		DB::insert('insert into employees (employee_name, email, contact_number, address, postal_code) values (?, ?, ?, ? , ?)', [$name, $email_address, $contact, $address, $postal_code]);

		$users = DB::select("SELECT * FROM employees");
		return view('employee', ['users' => $users]);
	}
	
	public function editEmployee($id) {
		$user = DB::select("SELECT * FROM employees WHERE employee_id = ?", [$id]);
		return view('editemployee', ['user' => $user]);
	}
	
	public function editEmployeeAction($id) {
		$name = Input::get('name');
		$email_address = Input::get('email_address');
		$contact = Input::get('contact');
		$address = Input::get('address');
		$postal_code = Input::get('postal_code');
		
		DB::update('update employees set employee_name=?, email=?, contact_number=?, address=?, postal_code=? where employee_id = ?', [$name, $email_address, $contact, $address, $postal_code, $id]);
		
		$users = DB::select("SELECT * FROM employees");
		return view('employee', ['users' => $users]);
	}
	
	public function deleteEmployee($id) {
		DB::delete('delete from employees WHERE employee_id=?', [$id]);
		
		$users = DB::select("SELECT * FROM employees");
		return view('employee', ['users' => $users]);
	}
}