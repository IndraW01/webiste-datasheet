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
                            <a href="{{ route('datasheets.control.valve.pneumatic.controller.create') }}" class="btn btn-primary btn-sm">Tambah Valve Pneumatic Controller</a>
                            <a href="{{ route('datasheets.control.valve.') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                    </div>
                    <p class="card-description">
                        Control Valve Pneumatic Controller
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Function </th>
                                    <th>Ouput Signal </th>
                                    <th>Control Modes</th>
                                    <th>Output Action</th>
                                    <th>Mounting  </th>
                                    <th>Weather Proof Protection </th>
                                    <th>Repeatability </th>
                                    <th>Certifications </th>
                                    <th>Hazardous Area Class </th>
                                    <th>Supply in/out gauge </th>
                                    <th>Instrument Gas Supply  </th>
                                    <th>Filter Regulator Valve </th>
                                    <th>Controller Pneumatic Connection </th>
                                    <th>Supply</th>
                                    <th>Output</th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($controlValvePneumatics as $key => $controlValvePneumatic)
                                <tr>
                                        <td>{{ $key + $controlValvePneumatics->firstItem() }}</td>
                                        <td>{{ $controlValvePneumatic->function }}</td>
                                        <td>{{ $controlValvePneumatic->output_signal }}</td>
                                        <td>{{ $controlValvePneumatic->control_modes }}</td>
                                        <td>{{ $controlValvePneumatic->output_action }}</td>
                                        <td>{{ $controlValvePneumatic->mounting }}</td>
                                        <td>{{ $controlValvePneumatic->weather_proof }}</td>
                                        <td>{{ $controlValvePneumatic->repeatabiity }}</td>
                                        <td>{{ $controlValvePneumatic->certifications }}</td>
                                        <td>{{ $controlValvePneumatic->hazardous }}</td>
                                        <td>{{ $controlValvePneumatic->suply_in }}</td>
                                        <td>{{ $controlValvePneumatic->instrument_gas }}</td>
                                        <td>{{ $controlValvePneumatic->filter_regulator }}</td>
                                        <td>{{ $controlValvePneumatic->controller_pneumatic }}</td>
                                        <td>{{ $controlValvePneumatic->suply }}</td>
                                        <td>{{ $controlValvePneumatic->output }}</td>
                                        <td>
                                            <a href="{{ route('datasheets.control.valve.pneumatic.controller.show', ['pneumatic_controller' => $controlValvePneumatic]) }}" class="btn btn-success btn-sm">Show</a>
                                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValvePneumatic->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $controlValvePneumatics->onEachSide(5)->links() }}
                    </div>
                </div>
              </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
