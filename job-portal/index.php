<!DOCTYPE html>
<html>
<head>
    <title>Job Portal</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom CSS styles here -->
    <style>
        /* Add any custom styles here */
        .website-name {
            font-size: 24px;
            font-weight: bold;
        }
        .header-img {
            height: 100vh;
            width: 100%;
            object-fit: cover;
            position: relative;
        }
        .header-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
            width: 100%;
        }
        .header-content h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .navbar-nav {
            margin-left: 10px;
        }
		/* Flex container for the search bar */
		.search-bar {
			display: flex;
			align-items: center;
			background-color: #f2f2f2;
			padding: 5px;
			border-radius: 20px; /* Rounded corners */
			width: 700px; /* Adjust width as needed */
		}

		/* Style for the search input fields */
		.search-input {
			flex: 1;
			padding: 8px;
			border: none;
			background-color: transparent;
			outline: none;
			font-size: 16px;
		}

		/* Style for the search icon */
		.search-icon {
			margin-left: 5px;
			cursor: pointer;
		}
		.container {
			display: flex;
			justify-content: center;
		}
    </style>
</head>
<body>
    <!-- Header section -->
    <header class="bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark container ">
            <a class="navbar-brand" href="#">
                <div class="website-name">Job Portal</div>
            </a>

            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="#">Home</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="jobSearchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Job Search
                    </a>
                    <div class="dropdown-menu" aria-labelledby="jobSearchDropdown">
                        <!-- Add dropdown content for Job Search here if needed -->
                        <a class="dropdown-item" href="#">Job by Company</a>
                        <a class="dropdown-item" href="#">Job by Title</a>
                        <!-- Add more options as needed -->
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="popularJobsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Popular Jobs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="popularJobsDropdown">
                        <!-- Add dropdown content for Popular Jobs here if needed -->
                        <a class="dropdown-item" href="#">IT Jobs</a>
                        <a class="dropdown-item" href="#">HR Jobs</a>
						<a class="dropdown-item" href="#">Sales Jobs</a>
                        <a class="dropdown-item" href="#">Banking Jobs</a>
						<a class="dropdown-item" href="#">Finance Jobs</a>
                        <a class="dropdown-item" href="#">BPO Jobs</a>
						<a class="dropdown-item" href="#">Civil Engineer Jobs</a>
                        <a class="dropdown-item" href="#">Managerial Jobs</a>
						<a class="dropdown-item" href="#">Engineer Jobs</a>
                        <!-- Add more options as needed -->
                    </div>
                </div>
                <a class="nav-link" href="#">Hiring Now</a>
                <a class="nav-link" href="#">About Us</a>
                <a class="nav-link" href="#">Contact</a>
                <!-- Add login button or user-related information here -->
                <a class="btn  nav-link" href="#">Login</a>
            </div>
        </nav>
        <!-- Add relevant picture here -->
        <img src="\job-portal\job.jpg" alt="Job Portal Picture" class="header-img">
        <div class="header-content">
            <h2>Find your dream job now </h2>
				<div class="container">
					<div class="search-bar">
					<!-- Using PHP to get the search form data -->
					<form action="search.php" method="get">
						<input type="text" name="designation" class="search-input" placeholder="Enter Designation">
						<input type="text" name="experience" class="search-input" placeholder="Experience">
						<input type="text" name="location" class="search-input" placeholder="Enter Location">
						<button type="submit" class="search-icon">&#128269;</button>
					</form>
					</div>
				</div>
            <!-- Additional content if needed -->
        </div>
    </header>

    <!-- Main content section -->
    <div class="container content">
        <div class="row">
            <div class="col-md-8">
                <!-- Add relevant content here -->
            </div>
            <div class="col-md-4">
                <!-- Additional content if needed -->
            </div>
        </div>
    </div>
	
    <!-- Add Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
