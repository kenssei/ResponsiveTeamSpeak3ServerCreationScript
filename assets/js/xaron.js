tip = ['','info','success','warning','danger'];
xaron = {
	Mesaj: function(from, hiza, icerik, durum, sure){
		if(durum == 1){
			renk = 2;
			ikon = "pe-7s-check";
		}else if(durum == 2){
			renk = 4;
			ikon = "pe-7s-close-circle";
		}
    	$.notify({
        	icon: ikon,
        	message: icerik
        	
        },{
            type: tip[renk],
            timer: sure*1000,
            placement: {
                from: from,
                align: hiza
            }
        });
	}
}
