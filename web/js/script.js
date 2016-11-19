//Landing block1 switch
function showEntrance(){
		$(".firstcheck_in").css("left","-100vw");
		$(".secondcheck_in").css("left","0vw");
	}
	
function showRegist(){
		$(".firstcheck_in").css("left","0vw");
		$(".secondcheck_in").css("left","100vw");
	}

//Main page

$(".ad").click(function(e){
	var elem = e ? e.target : window.event.srcElement;
	if($(".chosen").html()){
		$(".chosen").removeClass("chosen")
	}
	if(elem.classList.length < 5){
		$(elem.parentElement).addClass("chosen");
	}else{
		$(elem).addClass("chosen");
	}
} )


function verify(){
	$("#advertname").css("outline","none");
	$("#description").css("outline","none");
	var reg = /@|#|\?|\/|\\|\)|\(|\*|\$|\+|\[|\]|\^|\||{|}|;|=|%|&|!|~|>|</;
	var name = $("#advertname").val()
	var description = $("#description").val()
	var verify_name = name.match(reg);
	var verify_description = description.match(reg)
	if(verify_name == null && verify_description == null && name.length != 0 && description.length != 0){
		$("#step1").css("left","-100vw");
		$("#step2").css("left","0vw");
	}else{
		if(verify_name != null || name.length == 0 ){
			$("#advertname").css("outline","2px solid red");
		}
		if(verify_description != null || description.length == 0){
			$("#description").css("outline","2px solid red");
		}
	}
}
$("a[href^='#']").on('click', function(e){ 
	$('html,body').stop().animate({ scrollTop: $('#first_steps').offset().top }, 600); 
	e.preventDefault(); 
});

//Admin page1
