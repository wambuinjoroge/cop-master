
<!-- jQuery 2.1.4 -->
    <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
	
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/plugins/jQueryUI/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
	<script>
	function getAbsolutePath() {
		var loc = window.location;
		var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
	  return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
	}
		var contextPath = getAbsolutePath();
	</script>
    <script >
      function show1(){
             document.getElementById('div1').style.display ='none';
                      }
      function show2(){
      document.getElementById('div1').style.display = 'block';
                      } 
       function show3(){
      document.getElementById('div2').style.display = 'block';
                      } 
         function show4(){
      document.getElementById('div2').style.display = 'block';
                      } 
      function show5(){
      document.getElementById('div2').style.display = 'none';
                      } 
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('assets/plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
	
    
	