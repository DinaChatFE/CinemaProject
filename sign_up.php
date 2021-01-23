<head>
    <title>Home</title>
    <link href="assets/css/home.css" type="text/css" rel="stylesheet">
    <link href="assets/css/booking.css" type="text/css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>


<body>
    <div class="container" style="font-family: sans-serif; max-width: 500px">

        <form>
            <h3 style="padding: 20px 0px 20px 0px;">Sign up to </h3>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="password" class="form-control" id="address" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="phonenumber">Phone number</label>
                <input type="text" class="form-control" id="phonenumber" placeholder="Phone number">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" class="custom-select">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>

            <input type="submit" class="btn btn-primary " id="submit_sign_up" value="Submit">
            <a href="log_in.php" class="float-right">Log in instead!</a>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/Authentication.js"></script>
</body>