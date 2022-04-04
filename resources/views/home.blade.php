<x-layout-app>

    @push('css-for-this-page')
        <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/js/select.dataTables.min.css') }}">
    @endpush

    <div class="row">
        <div class="col-sm-12">
            <div class="statistics-details d-flex align-items-center justify-content-between">
                <div>
                  <p class="statistics-title">Dummy</p>
                  <h3 class="rate-percentage">32.53%</h3>
                  <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                </div>
                <div>
                  <p class="statistics-title">Dummy</p>
                  <h3 class="rate-percentage">7,682</h3>
                  <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                </div>
                <div>
                  <p class="statistics-title">Dummy</p>
                  <h3 class="rate-percentage">68.8</h3>
                  <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                </div>
                <div class="d-none d-md-block">
                  <p class="statistics-title">Dummy</p>
                  <h3 class="rate-percentage">2m:35s</h3>
                  <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                </div>
              </div>
        </div>
      </div>

    @push('js-for-this-page')
        <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    @endpush

    @push('costum-js-this-page')
        <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/dashboard.js') }}"></script>
        <script src="{{ asset('assets/js/Chart.roundedBarCharts.js') }}"></script>
    @endpush
</x-layout-app>
