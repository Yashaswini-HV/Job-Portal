<!DOCTYPE html>
<html>
<head>
    <title>Job Filter</title>
    <link rel="stylesheet" type="text/css" href="itjobs.css">
</head>
<body>
    <form action="filter.php" method="get">
        <h2>Job Filter</h2>
        <h3>Education Level:</h3>
        <label for="Education">Educatin Level:</label>
        <input type="text" id="Education" name="Education">
        
        <h3>Location:</h3>
        <label for="location">Location:</label>
        <input type="text" id="location" name="location">
        
        <h3>Job Type:</h3>
        <label><input type="checkbox" name="job_type[]" value="part_time"> Part-Time</label>
        <label><input type="checkbox" name="job_type[]" value="full_time"> Full-Time</label>
        <label><input type="checkbox" name="job_type[]" value="internship"> Internship</label>
        
        <h3>Experience Level:</h3>
        <label><input type="checkbox" name="experience[]" value="fresher"> Fresher</label>
        <label><input type="checkbox" name="experience[]" value="1"> > 1 year</label>
        <label><input type="checkbox" name="experience[]" value="5"> > 5 years</label>
        <label><input type="checkbox" name="experience[]" value="10"> > 10 years</label>
        
        <h3>Work from Home</h3>
        
        <input type="submit" value="Apply Filter">
    </form>
    <div class="job-cards">
        <?php
        // Array of job listings
        $jobListings = [
            [
                "company" => "Techstack Solutions Inc.",
                "location" => "San Francisco, CA",
                "experience" => "3+ Years",
                "salary" => "Competitive",
                "type" => "Full Time",
                "date" => "August 20, 2023"
            ],
            [
                "company" => "Creative Studio Ltd.",
                "location" => "New York, NY",
                "experience" => "2+ Years",
                "salary" => "Negotiable",
                "type" => "Part Time",
                "date" => "August 18, 2023"
            ],
            [
                "company" => "Analytics Innovators",
                "location" => "Seattle, WA",
                "experience" => "5+ Years",
                "salary" => "Excellent",
                "type" => "Full Time",
                "date" => "August 17, 2023"
            ],
            
            // Add more job listings as needed
        ];

        // Loop through job listings and generate cards
        $cardsPerRow = 3; // Number of cards in each row
        $count = 0;

        foreach ($jobListings as $job) {
            if ($count % $cardsPerRow === 0) {
                echo '<div class="row">';
            }

            echo '<div class="job-card">';
            echo '<div class="icon"><i class="fas fa-building"></i></div>';
            echo '<h2>' . $job["company"] . '</h2>';
            echo '<div class="job-details">';
            echo '<p><i class="fas fa-map-marker-alt"></i> ' . $job["location"] . '</p>';
            echo '<p><i class="fas fa-briefcase"></i> ' . $job["experience"] . '</p>';
            echo '<p><i class="fas fa-money-bill"></i> ' . $job["salary"] . '</p>';
            echo '<p><i class="fas fa-clock"></i> ' . $job["type"] . '</p>';
            echo '<p><i class="fas fa-calendar"></i> ' . $job["date"] . '</p>';
            echo '</div>';
            echo '</div>';

            if (($count + 1) % $cardsPerRow === 0 || $count === count($jobListings) - 1) {
                echo '</div>';
            }

            $count++;
        }
        ?>
    </div>
    <script src="itjobs.js"></script>
</body>
</html>
