<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hiring.css">
    <!-- Include the font-awesome CSS (for font icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Hiring Now</title>
</head>
<body>
    <h1 class="centered-heading">Hiring Now</h1>
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
</body>
</html>
