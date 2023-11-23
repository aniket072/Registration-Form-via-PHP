document.addEventListener("DOMContentLoaded", function() {
  const form = document.querySelector('form');

  form.addEventListener('submit', function(event) {
    let isValid = true;

    // Validate First Name
    const firstName = document.getElementById('first_name');
    if (firstName.value.trim() === '') {
      alert('Please enter your First Name');
      firstName.focus();
      isValid = false;
      event.preventDefault();
    }

    // Validate Last Name
    const lastName = document.getElementById('last_name');
    if (lastName.value.trim() === '') {
      alert('Please enter your Last Name');
      lastName.focus();
      isValid = false;
      event.preventDefault();
    }

   // Validate Date of Birth
const dob = document.getElementById('dob');
if (dob.value === '') {
  alert('Please enter your Date of Birth');
  dob.focus();
  isValid = false;
  event.preventDefault();
} else {
  const inputDate = new Date(dob.value);
  const maxDate = new Date('2003-12-31'); // Maximum allowed date (December 31, 2003)
  if (inputDate > maxDate) {
    alert('You cannot fill if you born after 2003');
    dob.focus();
    isValid = false;
    event.preventDefault();
  }
}

    // Validate Gender
    const gender = document.getElementById('gender');
    if (gender.value === '') {
      alert('Please select your Gender');
      gender.focus();
      isValid = false;
      event.preventDefault();
    }

    // Validate Email Address
    const email = document.getElementById('email');
    const emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email.value)) {
      alert('Please enter a valid Email Address');
      email.focus();
      isValid = false;
      event.preventDefault();
    }

    // Validate Phone Number
const phoneNumber = document.getElementById('phone_number');
const phoneNumberValue = phoneNumber.value.trim();
const phoneRegex = /^\d{10}$/; // Regular expression to match 10 digits

if (phoneNumberValue === '') {
  alert('Please enter your Phone Number');
  phoneNumber.focus();
  isValid = false;
  event.preventDefault();
} else if (!phoneRegex.test(phoneNumberValue)) {
  alert('Please enter a 10-digit phone number (only integers are allowed)');
  phoneNumber.focus();
  isValid = false;
  event.preventDefault();
}

    // Validate Address
    const address = document.getElementById('address');
    if (address.value.trim() === '') {
      alert('Please enter your Address');
      address.focus();
      isValid = false;
      event.preventDefault();
    }

    // Validate Education Qualification
    const education = document.getElementById('education_qualification');
    if (education.value === '') {
      alert('Please select your Education Qualification');
      education.focus();
      isValid = false;
      event.preventDefault();
    }

    // Validate Photo
    const photo = document.getElementById('photo');
    if (photo.value === '') {
      alert('Please upload your photo');
      isValid = false;
      event.preventDefault();
    }

   
    if (isValid) {
      // If all fields are valid, the form will be submitted
      alert('Form submitted successfully!');
    }
  });
});
