// JavaScript Document
$(window).load(
function() 
{
	$("[name='week']").click(function(){
		$("[name='week']").removeClass("active");
		$(this).addClass("active");
		week= $(this).attr("num");
		$("#menu").attr("src","include/back-office/pdf/Menus_Sem"+week+".pdf");
		$("#recette").attr("src","include/back-office/pdf/Recettes_Sem"+week+".pdf");
		$("#listeCourse").attr("src","include/back-office/pdf/Listes de courses_Sem"+week+".pdf");
	});
});