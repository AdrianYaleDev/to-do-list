<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To-Do</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <!-- Logo -->
        <div class="text-center mb-4">
            <img src="../assets/logo.png" alt="Company Logo" class="img-fluid" style="max-height: 60px;">
        </div>

        <!-- Task Input -->
        <div class="row justify-content-center">
            <div class="col-md-4">
				<form action="/addTask" method="POST">
					@csrf
					<div class="input-group mb-12">
						<input type="text" class="form-control" name="taskName" placeholder="Insert task name" required>
					</div>
					<div class="input-group mb-12 pt-3 d-grid gap-2">
						<button type="submit" class="btn btn-primary">Add</button>
					</div>
				</form>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Task</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach ($tasks as $task)
									<tr>
										<td>{{$task['id']}}</td>
										<td> 
										@if ($task['completed'])
											<s>{{ $task['name'] }}</s> 
										@else
											{{ $task['name'] }}
										@endif</td>
										<td>
											<form action="{{ url('/toggleTask/' . $task['id']) }}" method="POST" class="d-inline">
												@csrf
												<button type="submit" class="btn btn-success btn-sm">&#10004;</button> 
											</form>
											<form action="{{ url('/deleteTask/' . $task['id']) }}" method="POST" class="d-inline">
												@csrf
												<button type="submit" class="btn btn-danger btn-sm">&#10006;</button> 
											</form>
										</td>
									</tr>
								@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-4">
            <small class="text-muted">Copyright © <?php echo date('Y'); ?> All Rights Reserved.</small>
        </div>
    </div>

</body>
</html>
