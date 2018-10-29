	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
	<!-- Loading -->
	<script type='text/javascript'>
	  window.onload = detectarCarga;
	  function detectarCarga(){
	  $(document).ready(function(){
	   $(document).ready(function () {
	   $('#loading').fadeOut(800);
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
