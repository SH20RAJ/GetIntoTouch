<!DOCTYPE html>
<html>
<head>
    <title>GetIntoTouch - Create Custom Forms</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">GetIntoTouch</a>
            <!-- Add your navigation links here -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#create">Create API</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Usage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h1>Create Custom Forms & Get API URL</h1>
        <p>Send the Form Details Submission by users on your Telegram App.</p>
        <!-- Add your custom forms and functionality here -->
    
            
            <div class="alert alert-dismissible alert-success">
            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> -->
            <h4 class="alert-heading">Your API URL</h4>
            <p class="mb-0">https://getintotouch.sh20raj.com/api.php?id=<span id="id">{//Your Telegram User ID}</span></p>
            </div>

            <div class="mt-4">
                    <div class="form-group">
                        <label for="userId">Telegram User ID:</label>
                        <input type="text" class="form-control" id="userId" name="id" placeholder="Enter your Telegram User ID" required>
                    </div>
                    <button onclick="play()" class="btn btn-primary">Get</button>
                <script>
                    let play =()=> {
                    var id = document.getElementById('userId').value;
                    document.getElementById('id').innerHTML = id ;
                    }
                </script>
            </div>
            <hr>
            <h1 id="usage">Usage</h1>
            <p>Paste your Telegram User ID here. Get your User ID from 
                <a href="https://telegram.me/userinfobot">https://telegram.me/userinfobot</a> 
                and paste it below to obtain your API URL. <br>
                Set the API URL in the action attribute of your form and the 
                method as POST or create an AJAX/Fetch request on the API URL 
                https://getintotouch.sh20raj.com/api.php?id={//Your User ID} 
                to receive all data as a Telegram notification/messages.
                from <strong>@getintotouchbot</strong> - <a href="https://telegram.me/getintotouchbot">https://telegram.me/getintotouchbot</a>.
            </p>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            Usage Example Code
            </button>
            <hr>
            <h1 id="test">Test</h1>
            <form id="messageForm" method="post" enctype="multipart/form-data" action="api.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Upload Photo:</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
            
    </div>

        


    <div class="container mt-5">
        <h1>Contact Us</h1>
        <form id="contactForm" method="post" action="https://getintotouch.sh20raj.com/api.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2023 GetIntoTouch. All rights reserved.</p>
    </footer>

    <!-- Add Bootstrap JS and jQuery link here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
