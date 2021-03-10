<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RCSS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="academics.php">Academics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reg.php">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-xs-6 col-sm-6 col-md-7 col-lg-8 col-xl-7 col-xxl-8">
                <table class="table table-borderless">
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Roll No:</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Admission No:</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>College:</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">Register</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-xs-6 col-sm-6 col-md-5 col-lg-4 col-xl-5 col-xxl-4">
                <table class="table table-borderless">
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">Login</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>