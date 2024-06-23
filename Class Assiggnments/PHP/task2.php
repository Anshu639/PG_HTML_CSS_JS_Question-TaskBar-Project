<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
    <!-- Updated Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <form action="" method="get">
        <fieldset>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td>Male <input type="radio" name="gender" id="male" value="male">
                    Female <input type="radio" name="gender" id="female" value="female"></td>
                </tr>

                <tr>
                    <td>Address:</td>
                    <td><textarea name="address" id="" cols="20" rows="5"></textarea></td>
                </tr>

                <tr>
                    <td><i class="fas fa-phone"></i> Phone </td>
                    <td><input type="tel" name="phone" id="" pattern="[0-9]{10}"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" id=""></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];

    if (!preg_match("/^[a-zA-Z\s]*$/", $name)) {
        echo "Invalid name entry. Please enter only alphabets and spaces.";
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "Invalid phone number entry. Please enter exactly 10 digits.";
    } else {
        echo "Name: $name <br>";
        echo "Gender: $gender <br>";
        echo "Address: $address <br>";
        echo "Phone Number: $phone <br>";
    }
}
?>
</body>
</html>
