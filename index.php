<?php
session_start();
ob_start();
require_once('assets/inc/autoload.php');
require_once('assets/inc/header.php');
?>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="grey" data-image="assets/img/sidebar.png">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text" href="/">
                     <img src="assets/img/icon.ico" alt="BlazingLayer"></img>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/">
                        <i class="pe-7s-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="create.php">
                        <i class="pe-7s-plus"></i>
                        <p>Create Server</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="https://facebook.com/XARONNN" target="_blank">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--a class="navbar-brand" href="#"></a-->
                </div>
            </div>
        </nav>


         <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">

                                <div class="typo-line">
                                    <h2>SIMPLE TEAMSPEAK3 SERVER CREATION SCRIPT </h2>
                                </div>
								<div class="typo-line">
                                    <h4>Credits; XARON(for a base code, big thanks :), Marie(creation script)</h4>
                                </div>
        </div>
		</div>
		</div>
		</div>
		</div>
		</div>


        <?php require_once('assets/inc/footer.php'); ?>

    </div>
</div>


</body>
</html>