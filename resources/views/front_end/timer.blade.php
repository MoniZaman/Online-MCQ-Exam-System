<script type="text/javascript">
function countDown(minites,secs,elem){
	var element=document.getElementById(elem);
	var time=minites+ " :"+secs;
	document.getElementById('minutes').innerHTML=minites;
	document.getElementById('seconds').innerHTML=secs;
	if(secs<1)
	{
		minites=minites-1;
		secs=60;							
	}					
	secs--;
	if (minites==0 &&secs==0) {
		$('#formId').submit();
	}
	else{
		var timer=setTimeout('countDown('+minites+','+secs+',"'+elem+'")',1000);
	}
	$('#time_taken').val(10-time);
}
</script>		
<script type="text/javascript">
$(document).ready(function(){
	var time=$('.time').val();
	countDown(time,0,"status");

});		
</script>

