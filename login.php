<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="images/logo/logo_icon.png" type="image/png" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div class="box">
        <div class="page">
            <div class="header">
                <a id="admin" class="active" href="#admin">Admin</a>
                <a id="employee" href="#employee">Employee</a>
            </div>
            <div id="errorMsg"></div>
            <div class="content">
                <form class="admin" name="AdminForm" onsubmit="return validateAdminForm()" method="POST"
                    action="index.php">
                    <input type="text" name="name" id="AdminName" placeholder="Username">
                    <input type="password" name="password" id="AdminPassword" placeholder="Password">
                    <br><br>
                    <input type="submit" value="Login">

                </form>
                <form class="employee" name="EmployeeForm" onsubmit="return validateEmployeeForm()" method="POST"
                    action="daily-employee.php">
                    <input type="text" name="name" id="EmployeeName" placeholder="Username">
                    <input type="password" name="password" id="EmployeePassword" placeholder="Password"><br>
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="js/content/login.js"></script>


</body>

</html>