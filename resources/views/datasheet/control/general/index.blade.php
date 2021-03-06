<x-layout-app>
    @push('css-for-this-page')
        <style>
            .garis-parent {
                position: relative;
            }
            .garis {
                position: absolute;
                width: 1px;
                height: 51px;
                background-color: #ccc9c9;
                top: -18px;
                right: 50%;
            }
        </style>
    @endpush
    <div class="row">


        <div class="col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Datasheet</h4>
                        <div class="add">
                            <a href="{{ route('datasheets.control.valve.general.create') }}" class="btn btn-primary btn-sm">Tambah Valve General</a>
                            <a href="{{ route('datasheets.control.valve.') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                    </div>
                    <p class="card-description">
                        Control Valve General
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tag No</th>
                                    <th>P&ID Number</th>
                                    <th>Line Number</th>
                                    <th>Line Size</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($controlValveGenerals as $key => $controlValveGeneral)
                                    <tr>
                                        <td>{{ $key + $controlValveGenerals->firstItem() }}</td>
                                        <td>{{ $controlValveGeneral->tag_no }}</td>
                                        <td>{{ $controlValveGeneral->p_id_number }}</td>
                                        <td>{{ $controlValveGeneral->line_number }}</td>
                                        <td>{{ $controlValveGeneral->line_size }}</td>
                                        <td>
                                            <a href="{{ route('datasheets.control.valve.general.show', ['general' => $controlValveGeneral]) }}" class="btn btn-success btn-sm">Show</a>
                                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValveGeneral->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $controlValveGenerals->onEachSide(5)->links() }}
                    </div>
                </div>
              </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
