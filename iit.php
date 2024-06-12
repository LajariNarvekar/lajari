<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IIT Student Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="radio"] {
      margin-right: 5px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <h2>IIT Student Registration Form</h2>
  <form>
    <label for="title">Title:</label>
    <select id="title" name="title">
      <option value="Mr.">Mr.</option>
      <option value="Ms.">Ms.</option>
      <option value="Mrs.">Mrs.</option>
    </select>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="roll">Roll Number:</label>
    <input type="text" id="roll" name="roll" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female" required>
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other" required>
    <label for="other">Other</label>

    <label for="address">Address:</label>
    <textarea id="address" name="address" rows="4" required></textarea>

    <label for="discipline">Discipline:</label>
    <select id="discipline" name="discipline">
      <option value="Computer Science">Computer Engineering</option>
      <option value="Electrical Engineering">Electrical Engineering</option>
      <option value="Mechanical Engineering">Mechanical Engineering</option>
      <option value="Civil Engineering">Civil Engineering</option>
      <!-- Add more options as needed -->
    </select>

    <input type="submit" value="Submit">
  </form>

</body>
</html>