<!-- /.content -->
<div class="clearfix"></div>
<!-- Footer -->
<footer class="site-footer">
      <div class="footer-inner bg-white">
            <div class="row">
                  <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                  </div>
                  <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                  </div>
            </div>
      </div>
</footer>
<!-- /.site-footer -->
</div>
<!-- /#right-panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="{{ asset('adminAssets/assets/js/main.js') }}"></script>

@include('sweetalert::alert')
<!--Local Stuff-->

@yield('javascript')

</body>

</html>
