<!DOCTYPE html>
<html>
    <head>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
		</style>
        <link rel="stylesheet" href="style.css">
        <title>AWS</title>

    </head>
    <body>

    saljdladjsladjalsj
    <?php

    echo "here....";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
        <div>
            <div class="container-inner">
            
                <h3>STACK NAMasfhagsahE</h3>
                <input type="text" placeholder="Stack Name" id="stackName">
                <div style="margin:10px 10px;">
                    <input type="radio" id="default" name="select" value="default">
                    <label for="default">Default</label>
                    <input type="radio" id="customize" name="select" value="customize">
                    <label for="customize">Customise</label><br>
                    
                </div>

                <div id="templateDetails"  style="display: none;">
                    
                    
					<h4
					>CUSTOMISE YOUR STACK</h4>
                    
                    <h5 class="text-styling">Description</h5>
                    <input type="text" placeholder="Description about the instance type you are about to create.">
                    <h5 class="text-styling">KeyPair</h5>
                    <input type="text" placeholder="Key Pair">
                    <h5 class="text-styling">InstanceType</h5>
                    <input type="text" placeholder="Instance Type">
                    <h5 class="text-styling">DBname</h5>
                    <input type="text" placeholder="DB Name">
                    <h5 class="text-styling">DBuser</h5>
                    <input type="text" placeholder="DB User">
                    <h5 class="text-styling">DBpassword</h5>
					<input type="text" placeholder="DB Password">
					<h5 class="text-styling">DBRootPassword</h5>
					<input type="text" placeholder="DBRootPassword">

                    <br>
                
                    <button value="Create">Create Stack</button>
                </div>
                
            </div>
        </div>
        <script src="script.js"></script>
    </body>
    
</html>