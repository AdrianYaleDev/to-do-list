<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

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
                <div class="input-group mb-12">
                    <input type="text" class="form-control" placeholder="Insert task name">
                    
                </div>
				<div class="input-group mb-12 pt-3 d-grid gap-2">
					<button class="btn btn-primary">Add</button>
				</div>
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
                                <tr>
                                    <td>1</td>
                                    <td>Built based on client specification.</td>
                                    <td>
                                        <button class="btn btn-success btn-sm">&#10004;</button>
                                        <button class="btn btn-danger btn-sm">&#10006;</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><s>Cross browser checks to ensure consistency of design (IE, Edge, FF, Chrome)</s></td>
                                    <td>
                                        <button class="btn btn-success btn-sm">&#10004;</button>
                                        <button class="btn btn-danger btn-sm">&#10006;</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Site is navigable with Javascript disabled.</td>
                                    <td>
                                        <button class="btn btn-success btn-sm">&#10004;</button>
                                        <button class="btn btn-danger btn-sm">&#10006;</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><s>Favicon updated & included in site root</s></td>
                                    <td>
                                        <button class="btn btn-success btn-sm">&#10004;</button>
                                        <button class="btn btn-danger btn-sm">&#10006;</button>
                                    </td>
                                </tr>
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
