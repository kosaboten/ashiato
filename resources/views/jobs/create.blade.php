<!DOCTYPE html>
<html>
<head>
    <title>Simple Job Application Form</title>
</head>
<body>

    <form action="/submitForm">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <div>
            <label for="region">Region:</label>
            <select id="region" name="region">
                <option value="region1">Region 1</option>
                <option value="region2">Region 2</option>
                <!-- Add other regions as needed -->
            </select>
        </div>
        <div>
            <label for="access">Access:</label>
            <input type="text" id="access" name="access">
        </div>
        <div>
            <label for="job_description">Job Description:</label>
            <textarea id="job_description" name="job_description"></textarea>
        </div>
        <div>
            <label for="employment_status">Employment Status:</label>
            <input type="text" id="employment_status" name="employment_status">
        </div>
        <div>
            <label for="eligibility">Eligibility:</label>
            <textarea id="eligibility" name="eligibility"></textarea>
        </div>
        <div>
            <label for="pay">Pay:</label>
            <input type="text" id="pay" name="pay">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>
        <div>
            <label for="contact">Contact:</label>
            <input type="email" id="contact" name="contact">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>

</body>
</html>

