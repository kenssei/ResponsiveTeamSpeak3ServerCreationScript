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
                <li>
                    <a href="/">
                        <i class="pe-7s-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
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

<?php
$genel = new genel();
if(isset($_POST['sunucuOlustur'])){
	if(empty($_POST['sunucuAdi']) || empty($_POST['email'])){
		$genel->mesaj('Please fill in all fields!', 2, 4);
	}elseif(strlen($_POST['sunucuAdi']) > 48){
		$genel->mesaj('Server name can be maximum 48 characters!', 2, 4);
	}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	  $genel->mesaj('Invalid email format!', 2, 4);
	}elseif($_POST['slot'] > 150){
	  $genel->mesaj('Max slot limit reached!', 2, 4);
	}elseif(isset($_COOKIE['ip']) && isset($_COOKIE['port'])){
		 $genel->mesaj('You have created a server already!', 2, 4);
		 echo '<meta http-equiv="refresh" content="3; url=ts3server://'.$_COOKIE['ip'].':'.$_COOKIE['port'].'" />';
	}else{
		if($_POST['lokasyon'] == 'fransa'){
			$teamspeak = new ts3admin($fransa['ip'], $fransa['queryPort']);
			$teamspeak->connect();
			$teamspeak->login($fransa['queryName'], $fransa['queryPassword']);
			
			$veriler = array(
				'virtualserver_name' => $_POST['sunucuAdi'].' - hosted by blazinglayer.co.uk',
				'virtualserver_maxclients' =>  $_POST['slot'],
				'virtualserver_weblist_enabled' => '1',
				'virtualserver_log_client' => '1',
				'virtualserver_log_query' => '1',
				'virtualserver_log_channel' => '1',
				'virtualserver_log_permission' => '1',
				'virtualserver_log_server' => '1',
				'virtualserver_log_filetransfer' => '1',
				'virtualserver_hostbanner_url' => 'https://blazinglayer.co.uk/',
				'virtualserver_hostbanner_gfx_url' => 'https://blazinglayer.co.uk/BLAZINGLAYER.jpg',
				'virtualserver_hostbutton_url' => 'https://blazinglayer.co.uk/',
				'virtualserver_hostbutton_gfx_url' => 'https://blazinglayer.co.uk/BLAZINGLAYER.jpg',
				'virtualserver_hostbutton_tooltip' => 'www.BlazingLayer.co.uk',
				'virtualserver_hostmessage' => '[b]If you like this, you are peeing to have a server visit our website!  [url=https://blazinglayer.co.uk/]www.BlazingLayer.co.uk[/url][/b]',
				'virtualserver_hostmessage_mode' => '1',
				'virtualserver_welcomemessage' => '[url=https://blazinglayer.co.uk/]www.BlazingLayer.co.uk[/url]',
				'virtualserver_hostbutton_tooltip' => 'www.BlazingLayer.co.uk',
				'virtualserver_hostbutton_url' => 'https://www.facebook.com/BlazingLayer/?ref=site&mnt=blazecomm',
				'virtualserver_hostbutton_gfx_url' => 'http://i.hizliresim.com/a3L6gQ.png',
				'virtualserver_download_quota' => '128000',
				'virtualserver_upload_quota' => '128000',
				'virtualserver_max_download_total_bandwidth' => '128000',
				'virtualserver_max_upload_total_bandwidth' => '128000',
				'virtualserver_codec_encryption_mode' => 2,
			);
			$sonuc = $teamspeak->serverCreate($veriler);
		}elseif($_POST['lokasyon'] == 'almanya'){
			$teamspeak = new ts3admin($almanya['ip'], $almanya['queryPort']);
			$teamspeak->connect();
			$teamspeak->login($almanya['queryName'], $almanya['queryPassword']);
			
			$veriler = array(
				'virtualserver_name' => $_POST['sunucuAdi'].' - hosted by blazinglayer.co.uk',
				'virtualserver_maxclients' =>  $_POST['slot'],
				'virtualserver_weblist_enabled' => '1',
				'virtualserver_log_client' => '1',
				'virtualserver_log_query' => '1',
				'virtualserver_log_channel' => '1',
				'virtualserver_log_permission' => '1',
				'virtualserver_log_server' => '1',
				'virtualserver_log_filetransfer' => '1',
				'virtualserver_hostbanner_url' => 'https://blazinglayer.co.uk/',
				'virtualserver_hostbanner_gfx_url' => 'https://blazinglayer.co.uk/BLAZINGLAYER.jpg',
				'virtualserver_hostbutton_url' => 'https://blazinglayer.co.uk/',
				'virtualserver_hostbutton_gfx_url' => 'https://blazinglayer.co.uk/BLAZINGLAYER.jpg',
				'virtualserver_hostbutton_tooltip' => 'www.BlazingLayer.co.uk',
				'virtualserver_hostmessage' => '[b]If you like this, you are peeing to have a server visit our website!  [url=https://blazinglayer.co.uk/]www.BlazingLayer.co.uk[/url][/b]',
				'virtualserver_hostmessage_mode' => '1',
				'virtualserver_welcomemessage' => '[url=https://blazinglayer.co.uk/]www.BlazingLayer.co.uk[/url]',
				'virtualserver_hostbutton_tooltip' => 'www.BlazingLayer.co.uk',
				'virtualserver_hostbutton_url' => 'https://www.facebook.com/BlazingLayer/?ref=site&mnt=blazecomm',
				'virtualserver_hostbutton_gfx_url' => 'http://i.hizliresim.com/a3L6gQ.png',
				'virtualserver_download_quota' => '128000',
				'virtualserver_upload_quota' => '128000',
				'virtualserver_max_download_total_bandwidth' => '128000',
				'virtualserver_max_upload_total_bandwidth' => '128000',
				'virtualserver_codec_encryption_mode' => 2,
			);
			$sonuc = $teamspeak->serverCreate($veriler);
		}
		if(!$sonuc['success']){
			$genel->mesaj('An error occurred, please try again later!', 2, 4);
			//DEBUG MESAJ   echo 'An error occurred: '.$sonuc['errors'][0];
		}else{
			if($lokasyon == 'fransa'){
				$sonucIP == $fransa['ip'];
			}elseif($lokasyon == 'almanya'){
				$sonucIP == $almanya['ip'];
			}
			$genel->mesaj('Server successfully created!', 1, 4);
			echo '<meta http-equiv="refresh" content="0; url=ts3server://'.$sonucIP.':'.$sonuc['data']['virtualserver_port'].'?token='.$sonuc['data']['token'].'" />';
			setcookie('ip', $sonucIP);
			setcookie('port', $sonuc['data']['virtualserver_port']);
		}
	}
}
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Create TeamSpeak Server</h4>
                            </div>
                            <div class="content">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Server Name</label>
                                                <input type="text" name="sunucuAdi" class="form-control" required placeholder="Exp: My TeamSpeak Server">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" required placeholder="Exp: marie@blazinglayer.co.uk">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
										<div class="col-md-5">
											<div class="form-group">
											  <label for="sel1">Select Slot:</label>
												  <select class="form-control" name="slot">
												  <?php for($i=5;$i<=150;$i=$i+5) { if($i<(155)) echo '<option value="'.$i.'">'.$i.'</option>'; } ?>
												  </select>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
											  <label for="sel1">Select Location:</label>
												  <select class="form-control" name="lokasyon">
													<option value="fransa">France</option>
													<option value="almanya">Germany</option>
												  </select>
											</div>
										</div>
                                    </div>

                                    <button type="submit" name="sunucuOlustur" class="btn btn-info btn-fill pull-left">Launch Server</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Announcements/Updates</h4>
                                <p class="category">Backend development</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="" data-toggle="checkbox" disabled checked="">
                                                    </label>
                                                </td>
                                                <td>Updated to version 1.0.5!
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 17/04/2017 12:57pm
                                    </div>
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
