$(document).ready(
	function () {
		$("#LoginForm").submit(
			function()
			{
				$("#LoginResult").fadeOut();
				$("#LoginResult").removeClass('error');
				var login_inp = $("#login").val();
				var pass_inp = $("#pass").val();
				$.ajax(
				{
					method: "POST",
					url: "../app/login.php",
					//dataType: "json",
					data: {
						login: login_inp,
						pass: pass_inp
					},
					error: function(XHR) 
					{ 
						$("#LoginResult").html(XHR.responseText);
						$("#LoginResult").addClass("error");
					},
					success: function (data)
					{
						if(data != "Ok")
						{
							$("#LoginResult").html(data);
						    $("#LoginResult").addClass("error");
						}
						else
						{
							location.replace("../");
						}

					}
				});
				$("#LoginResult").fadeIn();
				return false;
			}
		)
	}
);