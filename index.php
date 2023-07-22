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
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h1>Create Custom Forms</h1>
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
                    let play =()=> document.getElementById('id').innerHTML =  document.getElementById('userId').value
                </script>
            </div>
            <hr>
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
  See Example
</button>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
            <hr>
            
    </div>

        


    <div class="container mt-5">
        <h1>Contact Us</h1>
        <form id="contactForm" method="post" action="api.php">
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
