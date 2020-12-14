
<!------- Footer Section -------->
  <footer class="text-center">
    <p>&Copy Right Zetta Zone - 2020 </p>
    <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
    <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
  </footer>

<!--------- Start Loading ----------->

 <div class="loading-overlay">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
</div>

<!--------- End Loading ----------->
<!-- Vendor JS Files -->
<script src="assets/js/vendors/wow.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Template Main JS File -->
<script src="assets/js/custom.js" type="text/javascript"></script>
<!-- Template WOW JS Code -->
<script>
    new WOW().init();
    </script>
<!-- Template Loading JS Code -->
<script>
    $(window).on('load', function(){ 
        $(".loading-overlay").fadeOut(2000, function(){
$("body").css("overflow","auto");
$(this).remove();
});
});
</script>

</body>

</html>