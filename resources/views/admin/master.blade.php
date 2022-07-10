@include('admin.layouts.head')

@include('admin.layouts.side')
<!-- Right Panel -->
<div id="right-panel" class="right-panel">

      @include('admin.layouts.nav')
      <!-- Content -->
      <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                  @yield('content')
            </div>
            <!-- .animated -->
      </div>

      @include('admin.layouts.footer')
