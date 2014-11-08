<script>
$(document).ready(function(){
	$("#demosMenu").change(function(){
	  window.location.href = $(this).find("option:selected").attr("id") + '.html';
	});
});
function myFunction() {
    $("#nick").html("Nick")
}
</script>
