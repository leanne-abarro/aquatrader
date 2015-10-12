$(function(){
	
	$("nav a").on("click", function (e){

		e.preventDefault();

		var url = $(this).attr("href");
		var spinner = new Spinner().spin();
		$(".main.group").append(spinner.el);

		$.get(url, function(data){

			$(".main.group").empty().append(data);

		});
	})
});
