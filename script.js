document.getElementById('diagnosis-form').addEventListener('submit', function(e) {
    // Get the values from the form
    let age = document.getElementById('age').value;
    let bloodPressure = document.getElementById('blood-pressure').value;
    let cholesterol = document.getElementById('cholesterol').value;
    let smoking = document.getElementById('smoking').value;
    let diabetes = document.getElementById('diabetes').value;
  
    // Simple validation to check if any field is empty
    if (!age || !bloodPressure || !cholesterol || !smoking || !diabetes) {
      alert('Please fill in all the fields.');
      e.preventDefault(); // Prevent form submission
    }
  
    // Optional: Further validation can be added based on the values (e.g., age should be positive)
  });
  