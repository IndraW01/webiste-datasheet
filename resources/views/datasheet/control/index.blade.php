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
                            <a href="{{ route('datasheets.control.valve.general.index') }}" class="btn btn-primary btn-sm">All Data</a>
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
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $controlValveGeneral->tag_no }}</td>
                                        <td>{{ $controlValveGeneral->p_id_number }}</td>
                                        <td>{{ $controlValveGeneral->line_number }}</td>
                                        <td>{{ $controlValveGeneral->line_size }}</td>
                                        <td>
                                            <a href="{{ route('datasheets.control.valve.general.show', ['general' => $controlValveGeneral]) }}" class="btn btn-success btn-sm">Show</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Datasheet</h4>
                        <div class="add">
                            <a href="{{ route('datasheets.control.valve.general.index') }}" class="btn btn-primary btn-sm">All Data</a>
                        </div>
                    </div>

                    <p class="card-description">
                        Control Valve Process Condition
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
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $controlValveGeneral->tag_no }}</td>
                                        <td>{{ $controlValveGeneral->p_id_number }}</td>
                                        <td>{{ $controlValveGeneral->line_number }}</td>
                                        <td>{{ $controlValveGeneral->line_size }}</td>
                                        <td>
                                            <a href="{{ route('datasheets.control.valve.general.show', ['general' => $controlValveGeneral]) }}" class="btn btn-success btn-sm">Show</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Datasheet</h4>
                        <div class="add">
                            <a href="{{ route('datasheets.control.valve.general.index') }}" class="btn btn-primary btn-sm">All Data</a>
                        </div>
                    </div>

                    <p class="card-description">
                        Control Valve Body And Valve Trim
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Manufacturer</th>
                                    <th>Valve Body Type</th>
                                    <th>Body Size</th>
                                    <th>End Connect. Size </th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($controlValveBodyAndValveTrims as $key => $controlValveBodyAndValveTrim)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->manufacturer }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->valve_body_type }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->body_size }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->end_connect_size }}</td>
                                        <td>
                                            <a href="{{ route('datasheets.control.valve.body.trim.show', ['body_trim' => $controlValveBodyAndValveTrim]) }}" class="btn btn-success btn-sm">Show</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
