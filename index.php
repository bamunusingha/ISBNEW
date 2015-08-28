<?php
    /*
        This is the main template file. please use this only
        to login to the application.
    */

    /*
        include the header here
    */
    require "header.php";
?>
    <!-- Header Carousel -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 1</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 2</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 3</h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header><!--END OF HEADER-->

    <!-- Page Content (End of page content div is at footer.php)-->
        <div class="container">

            <!-- LOGIN FORM -->
            <div class="text-center" style="padding:50px 0">
            	<div class="logo">login</div>
            	<!-- Main Form -->
            	<div class="login-form-1">
            		<form id="login-form" class="text-left">
            			<div class="login-form-main-message"></div>
            			<div class="main-login-form">
            				<div class="login-group">
            					<div class="form-group">
            						<label for="lg_username" class="sr-only">Username</label>
            						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
            					</div>
            					<div class="form-group">
            						<label for="lg_password" class="sr-only">Password</label>
            						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
            					</div>
            					<div class="form-group login-group-checkbox">
            						<input type="checkbox" id="lg_remember" name="lg_remember">
            						<label for="lg_remember">remember</label>
            					</div>
            				</div>
            				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            			</div>

            		</form>
            	</div>
            	<!-- end:Main Form -->
            </div>

<?php
    /*
        include footer
    */
    require "footer.php";
?>