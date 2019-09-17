<script>
// Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function validatefn() {
	var p=document.getElementById('psw1').value;
var q=document.getElementById('psw2').value;
if(p!=q)
	{alert("passwords do not match.Please try Again!!");
}
}


</script>