

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<!-- Loading -->
	<script type='text/javascript'>
		window.onload = detectarCarga;
		function detectarCarga(){
		    $(document).ready(function() {
				$('#loading').fadeTo(2000, 1, function() {
                    $('.sk-circle').fadeOut(100);
                    $('#loading')
                        .css('height', '0px')
                        .css('transition', '.5s')
                        .prev()
                        .css({
                            "transition": ".5s",
                            "display": "none",
                        });
                });
			});
		}
	</script>

	<script>
		$(".b-menu").click(function() {
			$("#menu").fadeIn("slow", function() {

			});
		});
		$(".b-menu-a").click(function() {
			$("#menu").fadeOut("slow", function() {

			});
		});
	</script>

	<script>
		$(function() {
			$(window).scroll(function() {
				$("#menu").fadeOut("slow", function() {

				});
			});
		});
	</script>
