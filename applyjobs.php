<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <link rel="stylesheet" href="jobdet.css">
</head>
<style>
    /* styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    
}

.job-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two columns with equal width */
    gap: 20px; /* Gap between job listings */
    max-width: 800px; /* Adjust as needed */
    margin: 20px auto;
}

.job-listing {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.job-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.job-company {
    font-size: 18px;
    color: #555;
    margin-bottom: 5px;
}

.job-location {
    font-size: 16px;
    color: #777;
    margin-bottom: 15px;
}

.job-description {
    font-size: 16px;
    line-height: 1.5;
    color: #333;
    margin-bottom: 20px;
}

.apply-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.2s;
}

.apply-button:hover {
    background-color: #0056b3;
}

</style>
<body>
    <div class="job-container">
        <div class="job-listing">
            <div class="job-title">Front-End Developer</div>
            <div class="job-company">Acme Inc.</div>
            <div class="job-location">New York, NY</div>
            <div class="job-description">
                <p>We are looking for a talented Front-End Developer to join our team...</p>
            </div>
            <div class="job-apply">
                <a href="Apply.php" class="apply-button">Apply Now</a>
            </div>
        </div>

        <div class="job-listing">
            <div class="job-title">Back-End Developer</div>
            <div class="job-company">Tech Solutions Ltd.</div>
            <div class="job-location">San Francisco, CA</div>
            <div class="job-description">
                <p>We are seeking an experienced Back-End Developer to work on exciting projects...</p>
            </div>
            <div class="job-apply">
                <a href="Apply.php" class="apply-button">Apply Now</a>
            </div>
        </div>

        <div class="job-listing">
            <div class="job-title">UX Designer</div>
            <div class="job-company">Design Innovators Inc.</div>
            <div class="job-location">Los Angeles, CA</div>
            <div class="job-description">
                <p>Join our creative team as a UX Designer and help us create stunning user experiences...</p>
            </div>
            <div class="job-apply">
                <a href="Apply.php" class="apply-button">Apply Now</a>
            </div>
        </div>

        <div class="job-listing">
            <div class="job-title">Data Scientist</div>
            <div class="job-company">Data Insights Co.</div>
            <div class="job-location">Chicago, IL</div>
            <div class="job-description">
                <p>We're looking for a Data Scientist to analyze and interpret complex data sets...</p>
            </div>
            <div class="job-apply">
                <a href="Apply.php" class="apply-button">Apply Now</a>
            </div>
        </div>

        <div class="job-listing">
            <div class="job-title">Product Manager</div>
            <div class="job-company">InnovateTech Solutions</div>
            <div class="job-location">Seattle, WA</div>
            <div class="job-description">
                <p>Join our team as a Product Manager and drive the development of innovative products...</p>
            </div>
            <div class="job-apply">
                <a href="Apply.php" class="apply-button">Apply Now</a>
            </div>
        </div>
    </div>
</body>
</html>
