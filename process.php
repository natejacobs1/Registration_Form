<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .details-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .details-group {
            margin-bottom: 10px;
        }
        .details-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="details-container">
        <h2>Registration Successful</h2>
        <div class="details-group">
            <label>First Name:</label>
            <span><?php echo htmlspecialchars($_POST['firstName']); ?></span>
        </div>
        <div class="details-group">
            <label>Last Name:</label>
            <span><?php echo htmlspecialchars($_POST['lastName']); ?></span>
        </div>
        <div class="details-group">
            <label>Email:</label>
            <span><?php echo htmlspecialchars($_POST['email']); ?></span>
        </div>
        <div class="details-group">
            <label>Phone Number:</label>
            <span><?php echo htmlspecialchars($_POST['phone']); ?></span>
        </div>
        <div class="details-group">
            <label>Address:</label>
            <span><?php echo htmlspecialchars($_POST['address']); ?></span>
        </div>
        <div class="details-group">
            <label>Date of Birth:</label>
            <span><?php echo htmlspecialchars($_POST['dob']); ?></span>
        </div>
    </div>
</body>
</html>
