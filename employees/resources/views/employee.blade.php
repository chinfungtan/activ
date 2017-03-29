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

            a {
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
			
			.employee-list tr th {
				color: #FF6600;
			}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Employees
                </div>
				
				<div class="employee-list">
					<table>
						<tr>
							<th>Employee Name</th>
							<th>Email</th>
							<th>Contact Number</th>
							<th>Address</th>
							<th>Postal Code</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<?php
						foreach ($users as $user) {
							echo "<tr>";
								echo "<td>".$user->employee_name."</td>";
								echo "<td>".$user->email."</td>";
								echo "<td>".$user->contact_number."</td>";
								echo "<td>".$user->address."</td>";
								echo "<td>".$user->postal_code."</td>";
								echo "<td><a href='".url('/editEmployee', ['id' => $user->employee_id])."'>Edit</a></td>";
								echo "<td><a href='".url('/employee', ['id' => $user->employee_id])."'>Delete</a></td>";
							echo "</tr>";
						}
						?>
					</table>
				</div>
				<br />
                
				<div class="links">
                    <a href="{{ url('/createEmployee') }}">Add Employee</a>
                </div>
            </div>
        </div>
    </body>
</html>
