  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            {{-- Judul Halaman --}}
            <h1 class="m-0">@yield('title-page')</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">

            {{-- Breadcrumb --}}
            <ol class="breadcrumb float-sm-right">
              @yield('breadcrumb')
            </ol>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        {{-- content fill --}}
        @yield('content')

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
