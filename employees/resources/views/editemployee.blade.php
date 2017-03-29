<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employees</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			form label {
				display: inline-block;
				width: 250px;
				padding: 5px;
				text-align: left;
			}
			
			form input[type="submit"] {
				border: none;
				padding: 5px;
				color: #000;
			}
			
			form input[type="submit"]:hover {
				background-color: #999;
				color: #636b6f;
			}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Employees
                </div>
				
				<h3>Edit Employee</h3>
				<form action="{{ url('/employee', ['id' => $user[0]->employee_id]) }}" class="employeeForm" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<label for="name">Name: </label><input type="text" id="name" name="name" value="{{ $user[0]->employee_name }}" required/><br />
					<label for="email_address">Email: </label><input type="email" id="email_address" name="email_address" value="{{ $user[0]->email }}" required/><br />
					<label for="contact">Contact Number: </label><input type="text" id="contact" name="contact" value="{{ $user[0]->contact_number }}" required/><br />
					<label for="address">Address: </label><input type="text" id="address" name="address" value="{{ $user[0]->address }}" required/><br />
					<label for="postal_code">Postal Code: </label><input type="number" id="postal_code" name="postal_code" value="{{ $user[0]->postal_code }}" required/><br />
					<label for="submit"></label><input type="submit" id="submit" name="submit" /><br />
				</form>				
				<br />
                
				<div class="links">
                    <a href="{{ url('/employee') }}">View Employees</a>
                </div>
            </div>
        </div>
    </body>
</html>
