<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center">Student Registration</h2>

        <form action="register.php" method="POST">
            <input type="text" name="name" class="form-control mb-3"
                   placeholder="Enter Name" required>

            <input type="email" name="email" class="form-control mb-3"
                   placeholder="Enter Email" required>

            <input type="text" name="course" class="form-control mb-3"
                   placeholder="Enter Course" required>

            <button class="btn btn-primary w-100">Register</button>
        </form>
    </div>
</div>

</body>
</html>
