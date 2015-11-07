
<!-- This php file will render the profile of the users -->

<!-- jquery functions -->
<script>
    $(document).ready(function(){
        $(#newProfilePic).hide();
    });
</script>

 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">The Social Network</a>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Messages</a></li>
                <li><a href="#">Photos</a></li>
            </ul>
            <!-- <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Log out</a></li>
            </ul>
        	-->
        	<div class="container-fluid">
        	<ul class="nav navbar-nav navbar-right">
        		<button type="button" class="btn btn-default navbar-btn">
        			<a href="logout.php">Log out</a>
        		</button>
        	</ul>
        	</div>
        </div>
    </nav>

    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-4">
                <!--Here is the profile picture, if he changes it I have to change the path to the new picture -->
                <div id="profilePic">
    			     <!-- <img onmouseover="editProfilePic('out')" onmouseout="hideButton('out')" src="pictures/default_profile.jpg" class="img-rounded"> -->
                     <?php
                        require_once 'profilePic.php';
                     ?>
                     <!-- <img onmouseover="editProfilePic('out')" src="pictures/default_profile.jpg" class="img-rounded"> -->
                     <img id="profilePicture" onmouseover="editProfilePic('out')" src="<?php echo $profilePicture ?>" class="img-rounded">
                     <div id="out"></div>
                </div>
                
    			<h1><?php print($_SESSION['Username']) ?></h1>

                <div id="newProfilePic">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileImg" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="btnUpload">
                    </form>
                </div>
    		</div>
    		<div class="col-md-8">
    			<h1>Hello</h1>
    			<p>Here I will create the textarea for the status updates of the user</p>
                <form class="form-horizontal" role="form" method="post" action="status.php">
                        <textarea rows="4" cols="50" name="status" id = "updater">
What's on your mind?
                        </textarea>
                        <input type="submit" value="Post">
                </form>
    		</div>	
    	</div>

        <div class="row">
            <div class="col-md-4">
                <p>Nothing for the moment</p>
            </div>
            <div id = "status" class="col-md-8">
                <!-- The status updates appear here -->
                <?php require_once 'showStatus.php'; ?>
                
            </div>
        </div>

    </div>