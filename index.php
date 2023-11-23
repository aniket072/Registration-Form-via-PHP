<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration Form</title>
  <style>
  body {
    font-family: sans-serif;
    margin: 0;
    height: 100vh;
    overflow: hidden; /* Hide any overflow from the blurred pseudo-element */

    position: relative;
}

body::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: url('2.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    filter: blur(1px); /* Adjust the blur value as needed */
    z-index: -1; /* Place the pseudo-element behind the content */
}

  .createform{
    width:600px;
    height:850px;
    background:rgba(0,0,0,0.7);
    color: #FFF;
    top:2px;
    left:36%;
    position: absolute;
    transform: translate(-50%, -50%)
    box-sizing: border-box;
    padding:20px;
    border-radius: 20px;
    margin-top: 65px;
    box-shadow: 0 0 100px rgba(128, 0, 0, 0.3);
  
  }
  
  form {
    width: 490px;
    margin: 0 auto;
  }
  
  label {
    display: block;
    margin-bottom: 10px;
  }
  
  input, textarea, select {
    width: 100%;
    padding: 10px;
    border: 1px solid #fff;
    border-radius: 5px;
    box-sizing: border-box;
  }
  
  input[type="file"] {
    width: 200px;
  }
  
  #photo-preview {
    width: 200px;
    height: 200px;
    display: none;
  }
  
  .checkbox {
    margin-top: 10px;
  }
  
  button {
  background-color: #008CBA;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  width: 100px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

  
  button:hover {
    background-color: #005B9E;
  }
  
    </style>
</head>
<body>
  <div class="createform">
    <form action="register.php" method="post" enctype="multipart/form-data">
      <h1>Student Registration Form</h1>

      <label for="first_name">First Name:</label>
      <input type="text" name="firstname" id="first_name" required>

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

      <centre>
      <br>
      
      <button type="submit">Submit</button>
    </form>
</div>
  <script src="rf.js"></script>
</body>
</html>
 
