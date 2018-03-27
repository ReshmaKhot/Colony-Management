function login(){	
	var user=$("#user").val();
	var password=$("#pwd").val();
	$.ajax({
	type:"post",
	url:"userlogin.php",
	data: {
		'pw' : password,
		'user' : user
	},
		success:function(response){
                    
					console.log(response);
					
					
                    if(response=='success'){
						window.location.href="usernotice.php";
					
                    }else{
                        window.alert("Invalid username and password!");
						
                    }
	
		
	}
		
	
	
	});
}