<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Entry Form</h2>
<form action="connect.php" method="post" onsubmit="return validateForm()">
    <div class="form-group">
        <label for="student_id">Student ID *</label>
        <input type="number" id="student_id" name="student_id" required>
        <div class="error" id="studentIdError"></div>
    </div>

    <div class="form-group">
        <label for="first_name">First Name </label>
        <input type="text" id="first_name" name="first_name" >
        <div class="error" id="firstNameError"></div>
    </div>

    <div class="form-group">
        <label for="last_name">Last Name </label>
        <input type="text" id="last_name" name="last_name" >
        <div class="error" id="lastNameError"></div>
    </div>

    <div class="form-group">
        <label for="batch">Batch/Class</label>
        <input type="text" id="batch" name="batch">
    </div>

    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="english">english </label>
        <input type="number" id="english" name="english" >
        <div class="error" id="englishError"></div>
    </div>

    <div class="form-group">
        <label for="hindi">Hindi </label>
        <input type="number" id="hindi" name="hindi" >
        <div class="error" id="hindiError"></div>
    </div>

    <div class="form-group">
        <label for="maths">Maths </label>
        <input type="number" id="maths" name="maths" >
        <div class="error" id="mathsError"></div>
    </div>
    <div class="form-group">
        <label for="science">Science </label>
        <input type="number" id="science" name="science" >
        <div class="error" id="scienceError"></div>
    </div>

    <div class="form-group">
        <label for="history">History </label>
        <input type="number" id="history" name="history" >
        <div class="error" id="historyError"></div>
    </div>

    <div class="form-group">
        <label for="geography">Geography </label>
        <input type="number" id="geography" name="geography" >
        <div class="error" id="geographyError"></div>
    </div>

    <div class="form-group">
        <label for="remarks">Remarks</label>
        <textarea id="remarks" name="remarks" maxlength="150"></textarea>
    </div>
    <button type="submit" class="submit-btn">Submit</button>
</form>

<script>
    function validateForm() {
        let isValid = true;

        const studentId = document.getElementById('studentId').value;
        const studentIdError = document.getElementById('studentIdError');
        if (!studentId || isNaN(studentId)) {
            studentIdError.textContent = 'Student ID is required and must be numeric.';
            isValid = false;
        } else {
            studentIdError.textContent = '';
        }

        const firstName = document.getElementById('firstName').value;
        const firstNameError = document.getElementById('firstNameError');
        if (!firstName.match(/^[A-Za-z]+$/)) {
            firstNameError.textContent = 'First name is required and must contain only alphabets.';
            isValid = false;
        } else {
            firstNameError.textContent = '';
        }

        const lastName = document.getElementById('lastName').value;
        const lastNameError = document.getElementById('lastNameError');
        if (!lastName.match(/^[A-Za-z]+$/)) {
            lastNameError.textContent = 'Last name is required and must contain only alphabets.';
            isValid = false;
        } else {
            lastNameError.textContent = '';
        }

        const subjects = ['english', 'hindi', 'math', 'science', 'history', 'geography'];
        subjects.forEach(subject => {
            const subjectValue = document.getElementById(subject).value;
            const subjectError = document.getElementById(subject + 'Error');
            if (isNaN(subjectValue) || subjectValue < 0 || subjectValue > 100) {
                subjectError.textContent = 'Marks for ' + subject.charAt(0).toUpperCase() + subject.slice(1) + ' must be a number between 0 and 100.';
                isValid = false;
            } else {
                subjectError.textContent = '';
            }
        });

        return isValid;
    }
</script>
</body>
</html>
