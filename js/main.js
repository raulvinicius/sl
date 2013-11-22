$(document).ready(
	function()
	{

		resizeVideo();

		$('#menu-principal ul li a').tooltip({
			html: true
		});

		$('#menu-principal ul li a').hover(function()
		{
			console.log( $( this ).closest( 'li' ).attr( 'id' ) )

			$(this).closest('li').css('background', 'url(' + templateUrl + '/img/sentidosdaluz-' + $(this).closest('li').attr('id') + '-iluminado.png)  no-repeat center')

		})

		$('#menu-principal ul li a').mouseout(function()
		{
			console.log( $( this ).closest( 'li' ).attr( 'id' ) )

			$(this).closest('li').css('background', 'url(' + templateUrl + '/img/sentidosdaluz-space.gif)  no-repeat center')

		})

	    $(window).resize(function() 
	    {

	    	resizeVideo();

	    })


	}
);


function resizeVideo()
{
	console.log( $('#galeria-historias #video'). );
	    // obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';

}