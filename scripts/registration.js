$('#loginform')[0].reset();

$("#login").on("input keyup change click", function() {
  $("div[data-group='login'], ul[data-group='login']").show();
  $("div[data-group='email'], ul[data-group='email']").hide();
  $("ul[data-group='password1']").hide();
  $("ul[data-group='password2']").hide();
});

$("#email").on("input keyup change click", function() {
  $("div[data-group='login'], ul[data-group='login']").hide();
  $("div[data-group='email'], ul[data-group='email']").show();
  $("ul[data-group='password1']").hide();
  $("ul[data-group='password2']").hide();
});

$("#pass").on("input keyup change click", function() {
  $("div[data-group='login'], ul[data-group='login']").hide();
  $("div[data-group='email'], ul[data-group='email']").hide();
  $("ul[data-group='password1']").show();
  $("ul[data-group='password2']").hide();
});

$("#confirm").on("input keyup change click", function() {
  $("div[data-group='login'], ul[data-group='login']").hide();
  $("div[data-group='email'], ul[data-group='email']").hide();
  $("ul[data-group='password1']").hide();
  $("ul[data-group='password2']").show();
});

$("#email").on("input keyup change", function() {
	if ($("#email").val().length != 0) {
		if(isValidEmailAddress($("#email").val())) {
			$("#condition1").addClass("correct");
		} else {
			$("#condition1").removeClass("correct");
		}
	} else {
		$("#condition1").removeClass("correct");
	}
});

$("#login").on("input keyup change", function() {
	if($("#login").val().length > 3 && $("#login").val().length < 21) {
		$("#condition2").addClass("correct");
	} else {
		$("#condition2").removeClass("correct");
	}
	if (/[A-zА-яё]/i.test($("#login").val().charAt(0))) {
		$("#condition3").addClass("correct");
	} else {
		$("#condition3").removeClass("correct");
	}
	
	if (/[A-z]/i.test($("#login").val())) {
		$("#condition4").addClass("correct");
	} else {
		$("#condition4").removeClass("correct");
	}
	if (/[А-яё]/i.test($("#login").val()) || $("#login").val().length == 0 || /[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test($("#login").val())) {
		$("#condition4").removeClass("correct");
	} else {
		$("#condition4").addClass("correct");
	}
});

$("#pass").on("input keyup change", function() {
	if($("#pass").val().length > 4 && $("#login").val().length < 21) {
		$("#condition5").addClass("correct");
	} else {
		$("#condition5").removeClass("correct");
	}
	if (/[A-z]/i.test($("#pass").val())) {
		$("#condition6").addClass("correct");
	} else {
		$("#condition6").removeClass("correct");
	}
	if (/[А-яё]/i.test($("#pass").val()) || $("#pass").val().length == 0) {
		$("#condition6").removeClass("correct");
	} else {
		$("#condition6").addClass("correct");
	}
});

$("#confirm").on("input keyup change", function() {
	if($("#pass").val() == $("#confirm").val())
	{
		$("#condition7").addClass("correct");
	} else {
		$("#condition7").removeClass("correct");
	}
});

$("#checkbox-signup").on("input keyup change", function() {
	if($("#checkbox-signup").is(":checked") == true && $("#condition1").attr('class') == 'correct' && $("#condition2").attr('class') == 'correct' && $("#condition3").attr('class') == 'correct' && $("#condition4").attr('class') == 'correct' && $("#condition5").attr('class') == 'correct' && $("#condition6").attr('class') == 'correct' && $("#condition7").attr('class') == 'correct')
	{
		$("#signup").prop('disabled', false);
	} else {
		$("#signup").prop('disabled', true);
	}
});



function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}