<!-- HTML File: survey-form.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <link rel="stylesheet" href="Form_style.css">
</head>
<body>
    <div class="container">
        <h1>SURVEY FORM</h1>
        <p>We appreciate your participation in our industry. Please take the survey & leave a remark below to help with future improvement.</p>
        
        <form action="formData.php "method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            
            <div class="gender-container">
            <label>Gender:</label>
                
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label>
                

                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label>

                <input type="radio" id="other" name="gender" value="Other">
                <label for="other">Other</label>
            </div>
            
            <label for="address">Address</label>
            <input type="text" id="address" name="address">
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone">
            
            <label for="question1">Question 1. Type here your question. Which is your question?</label>
            <textarea id="question1" name="question1" rows="3"></textarea>
            
            <label for="question2">Question 2. Type here your question. Which is your question?</label>
            <textarea id="question2" name="question2" rows="3"></textarea>
            
            <label for="question3">Question 3. Type here your question. Which is your question?</label>
            <textarea id="question3" name="question3" rows="3"></textarea>
        </form>
    </div>
</body>
</html>