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

	<script>
		$(".b-op1").click(function () {
			$(".op1").fadeIn("fast", function() {});
            $(".op2").css("display", "none");
			$(".op3").css("display", "none");
			$(".op4").css("display", "none");
			$(".op5").css("display", "none");
        });
		$(".b-op2").click(function () {
            $(".op1").css("display", "none");
            $(".op2").fadeIn("fast", function() {});
			$(".op3").css("display", "none");
			$(".op4").css("display", "none");
			$(".op5").css("display", "none");
        });
		$(".b-op3").click(function () {
            $(".op1").css("display", "none");
            $(".op2").css("display", "none");
            $(".op3").fadeIn("fast", function() {});
			$(".op4").css("display", "none");
			$(".op5").css("display", "none");
        });
		$(".b-op4").click(function () {
            $(".op1").css("display", "none");
            $(".op2").css("display", "none");
            $(".op3").css("display", "none");
            $(".op4").fadeIn("fast", function() {});
			$(".op5").css("display", "none");
        });
		$(".b-op5").click(function () {
            $(".op1").css("display", "none");
			$(".op2").css("display", "none");
			$(".op3").css("display", "none");
			$(".op4").css("display", "none");
            $(".op5").fadeIn("fast", function() {});
        });
	</script>
