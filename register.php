<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/2ae35ec2f8.js" crossorigin="anonymous"></script>

</head>

<body>
  <?php require "./componants/navbar.php"; ?>
    <div class="container">
        <form action="registration_handler.php">
            <div class="row gy-4">
                <div class="col-sm-12 col-md-6">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="">Phone number</label>
                    <input type="tel" name="ph" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="">Date of birth</label>
                    <input type="date" name="dob" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="">Blood group</label>
                    <input type="text" name="bloodgroup" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="">Height (cm)</label>
                    <input type="number" name="height" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="">Weight (kg)</label>
                    <input type="number" name="weight" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="">Place</label>
                    <input type="text" name="place" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="">Hospital (near to you)</label>
                    <input type="text" name="hospital" class="form-control" required>
                </div>
                <div class="col-12">
                    <button class="btn btn-danger">SAVE</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="js/bootstrap.js"></script>

</html>