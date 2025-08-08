<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Marriage Biodata Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #f9f9f9;
      color: #333;
      line-height: 1.6;
      padding: 30px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      padding: 40px;
    }

    header {
      text-align: center;
      margin-bottom: 40px;
    }

    header h1 {
      font-size: 2.2rem;
      color: #f57224;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1rem;
      color: #666;
    }

    form fieldset {
      border: none;
      margin-bottom: 30px;
      padding: 0;
    }

    legend {
      font-size: 1.4rem;
      font-weight: 600;
      color: #f57224;
      margin-bottom: 20px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      margin-bottom: 18px;
    }

    label {
      font-weight: 600;
      margin-bottom: 6px;
    }

    input,
    textarea {
      padding: 10px 14px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input:focus,
    textarea:focus {
      outline: none;
      border-color: #f57224;
      box-shadow: 0 0 0 3px rgba(245, 114, 36, 0.15);
    }

    textarea {
      resize: vertical;
    }

    button {
      background-color: #f57224;
      color: white;
      padding: 12px 20px;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100%;
      margin-top: 10px;
    }

    button:hover {
      background-color: #d65a13;
    }

    @media (max-width: 600px) {
      .container {
        padding: 25px;
      }

      header h1 {
        font-size: 1.7rem;
      }

      legend {
        font-size: 1.2rem;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <header>
      <h1>Marriage Biodata Form</h1>
      <p>Please fill out the details below to create your biodata.</p>
    </header>

    <form action="submitbio.php" method="post">
      <fieldset>
        <legend>Personal Details</legend>
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" required placeholder="Enter your full name" />
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="number" id="age" name="age" min="18" max="100" required placeholder="Enter your age" />
        </div>
        <div class="form-group">
          <label for="height">Height</label>
          <input type="text" id="height" name="height" required placeholder="e.g., 5'10&quot;" />
        </div>
        <div class="form-group">
          <label for="occupation">Occupation</label>
          <input type="text" id="occupation" name="occupation" required placeholder="Enter your occupation" />
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" id="location" name="location" required placeholder="City, Country" />
        </div>
      </fieldset>

      <fieldset>
        <legend>Education</legend>
        <div class="form-group">
          <label for="degree">Degree</label>
          <input type="text" id="degree" name="degree" required placeholder="Enter your degree" />
        </div>
        <div class="form-group">
          <label for="institution">Institution</label>
          <input type="text" id="institution" name="institution" required placeholder="Enter institution name" />
        </div>
        <div class="form-group">
          <label for="year">Year of Graduation</label>
          <input type="number" id="year" name="year" min="1960" max="2025" required placeholder="Enter year" />
        </div>
      </fieldset>

      <fieldset>
        <legend>Family Background</legend>
        <div class="form-group">
          <label for="father">Father's Name </label>
          <input type="text" id="father" name="father" required placeholder="Enter father's name" />
        </div>
        <div class="form-group">
          <label for="mother">Mother's Name </label>
          <input type="text" id="mother" name="mother" required placeholder="Enter mother's name " />
        </div>
        <div class="form-group">
          <label for="siblings">Siblings</label>
          <input type="text" id="siblings" name="siblings" placeholder="e.g., One younger sister" />
        </div>
      </fieldset>

      <fieldset>
        <legend>Hobbies & Interests</legend>
        <div class="form-group">
          <label for="hobbies">Hobbies</label>
          <textarea id="hobbies" name="hobbies" rows="4" placeholder="List your hobbies and interests"></textarea>
        </div>
      </fieldset>

      <fieldset>
        <legend>Contact Information</legend>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required placeholder="Enter your email" />
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number" />
        </div>
      </fieldset>

      <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>
