$(document).ready(function(){
  var emailSesiLokal = localStorage.getItem('emailId');
  if(emailSesiLokal == null){   
    
  }else{
    window.location.assign('mainApp/dasborUtama.php?emailGet='+emailSesiLokal);    
   // window.location.assign('mainApp/dasborUtama.php?emailGet='+emailSesiLokal);
  }
  
  
	$('#btnMasuk').click(function(){
		var email = $('#txtEmail').val();
		var password = $('#txtPassword').val();

		if(email===""){
			$('#txtEmail').focus();
		}else if(password===""){
			$('#txtPassword').focus();
		}else{
				$('#divStatusLogin').show();

			    $.ajax({
			      type:'GET',
			      dataType : "json",
			      url:'jsonData/loginRoute.php?email='+email+'&password='+password, 
			      success: function(dataLogin,status) {
			        //var dataLogin = $.parseJSON(data);
			        console.log("Data email : " + dataLogin.email);
			        console.log("Data password : " + dataLogin.password);
			        console.log("Status login : " + dataLogin.statusLogin);
			        var stLogin = dataLogin.statusLogin;

			        if(stLogin=="1"){
			          window.location.assign('mainApp/dasborUtama.php?emailGet='+email);
                localStorage.setItem("emailId", email);
                localStorage.setItem("waktuLogin", "07:12:12");
			        }else{
			          $('#divStatusLogin').html("Username or password salah!!!");
			          console.log("Login gagal");
			        }
			        return true;
			      }
			    });
			         
			    }


		
	});
});
