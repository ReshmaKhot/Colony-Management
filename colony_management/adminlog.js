function login(){	
	var user=$("#user").val();
	var password=$("#pwd").val();
	$.ajax({
	type:"post",
	url:"login.php",
	data: {
		'pw' : password,
		'user' : user
	},
		success:function(response){
                    
					console.log(response);
		
                    if(response == 'success'){
						window.location.href="tab.php";
						window.alert("success");
                    }else{
                        window.alert("Invalid username and password!");
						
                    }
	
		
	
		
	}
		
	
	
	});
}