<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="rf.css">
</head>
<body>
  <form action="register.php" method="post" enctype="multipart/form-data">
    <h1>Student Registration Form</h1>

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" required>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" name="dob" id="dob" required>

    <label for="gender">Gender:</label>
    <select name="gender" id="gender" required>
      <option value="">Select Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>

    <label for="email">Email Address:</label>
    <input type="email" name="email" id="email" required>

    <label for="phone_number">Phone Number:</label>
    <input type="tel" name="phone_number" id="phone" required>

    <label for="address">Address:</label>
    <textarea name="address" id="address" rows="5" cols="30" required></textarea>

    <label for="education_qualification">Latest Education Qualification:</label>
    <select name="education_qualification" id="education" required>
      <option value="">Select</option>
      <option value="male">Intermediate</option>
      <option value="female">Bachelor's</option>
      <option value="other">Master's</option>
    </select>

    <label for="photo">Upload Photo:</label>
    <input type="file" name="photo" id="photo" accept="image/*" required>

    <img id="photo-preview" src="#" alt="Your photo preview">

    <div class="checkbox">
      <input type="checkbox" name="terms_and_conditions" id="terms_and_conditions" required>
      <label for="terms_and_conditions">I agree to the terms and conditions.</label>
    </div>

    <button type="submit">Submit</button>
  </form>

  <script src="rf.js"></script>
</body>
</html>
 
