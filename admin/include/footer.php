<!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 </strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"> </script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!--<script src="ad.js"></script>-->
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('.timepicker').timepicker({
          showInputs: false
        })
        $('.timepicker1').timepicker({
          showInputs: false
        })
        
            //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass   : 'iradio_flat-green'
        })    
    })
    
</script>
</body>
</html>
 <!--Loader JavaScript -->
  <script src="dist/js/jquery.loadingModal.js"></script>
    <script type="text/javascript">
      
    </script>
    
    <script type="text/javascript">
        $(document).ajaxStart(function(){
            	$('body').loadingModal({text: 'Please Wait...'});
       	$('body').loadingModal('animation', 'spinner').loadingModal('backgroundColor', 'black').loadingModal('opacity','0.6');
        	$('body').loadingModal('show');
        });

        $( document ).ajaxError(function() {
            	$('body').loadingModal({text: 'Please Wait...'});
       	$('body').loadingModal('animation', 'spinner').loadingModal('backgroundColor', 'black').loadingModal('opacity','0.6');
        	$('body').loadingModal('hide');
        });

        $(document).ajaxStop(function(){
            	$('body').loadingModal({text: 'Please Wait...'});
       	$('body').loadingModal('animation', 'spinner').loadingModal('backgroundColor', 'black').loadingModal('opacity','0.6');
        	$('body').loadingModal('hide');
        	
        });

        // document.onkeydown = function(evt) {
        //     evt = evt || window.event;
        //     var isEscape = false;
        //     if ("key" in evt) {
        //         isEscape = (evt.key === "Escape" || evt.key === "Esc");
        //     } else {
        //         isEscape = (evt.keyCode === 27);
        //     }
        //     if (isEscape) {
        //         $('body').loadingModal('hide');
        //     }
        // };
    </script>

