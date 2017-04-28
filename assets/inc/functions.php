<?php
class genel{
	public function mesaj($icerik, $durum, $sure){
		if(isset($icerik) && isset($durum)){
			echo "<script type='text/javascript'>$(document).ready(function(){ xaron.Mesaj('bottom','left','$icerik',$durum,$sure); });</script>";
		}
	}
}
