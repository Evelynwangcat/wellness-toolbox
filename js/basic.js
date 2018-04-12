window.onload=function () {
	// body...
	console.log("loaded2");
	// $( ".title" ).hover2(function(){
	// // 	$( this).addClass( "bgred" );
	// 	$( this ).addClass( "bgred" );
	// },
	// function(){
	// // 	$( this).addClass( "bgred" );
	// 	$( this ).removeClass( "bgred" );
	// })
	// for (var i = 0; i < 5; i++) {
	// 	$("#slidecontainer div[i]"){
	// 		$( this ).addClass( "displaynone" );
	// 	}
	// }
	$("#controler1").click(function(){
		
		$("#slidecontainer div").removeClass( "displayBlock" ).addClass( "displayNone" );
		$("#body").removeClass( "displayNone" ).addClass( "displayBlock" );                       
		$("#controler span").removeClass( "tabLight" ).addClass( "tab" );
		$("#controler1").removeClass( "tab" ).addClass( "tabLight" );
	})
	$("#controler2").click(function(){
		
		$("#slidecontainer div").removeClass( "displayBlock" ).addClass( "displayNone" );
		$("#achieve").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#controler span").removeClass( "tabLight" ).addClass( "tab" );
		$("#controler2").removeClass( "tab" ).addClass( "tabLight" );
	})
	$("#controler3").click(function(){
		
		$("#slidecontainer div").removeClass( "displayBlock" ).addClass( "displayNone" );
		$("#connect").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#controler span").removeClass( "tabLight" ).addClass( "tab" );
		$("#controler3").removeClass( "tab" ).addClass( "tabLight" );
	})
	$("#controler4").click(function(){
		
		$("#slidecontainer div").removeClass( "displayBlock" ).addClass( "displayNone" );
		$("#enjoy").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#controler span").removeClass( "tabLight" ).addClass( "tab" );
		$("#controler4").removeClass( "tab" ).addClass( "tabLight" );
	})
	$("#controler5").click(function(){
		
		$("#slidecontainer div").removeClass( "displayBlock" ).addClass( "displayNone" );
		$("#setBack").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#controler span").removeClass( "tabLight" ).addClass( "tab" );
		$("#controler5").removeClass( "tab" ).addClass( "tabLight" );
	})

}