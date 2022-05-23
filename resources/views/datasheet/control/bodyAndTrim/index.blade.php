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
                            <a href="{{ route('datasheets.control.valve.body.trim.create') }}" class="btn btn-primary btn-sm">Tambah Valve Body And Trim</a>
                            <a href="{{ route('datasheets.control.valve.') }}" class="btn btn-success btn-sm">Kembali</a>
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
                                    <th>Manufacturer </th>
                                    <th>Valve Body Type </th>
                                    <th>Body Size</th>
                                    <th>End Connect Size </th>
                                    <th>Flange Face Finish </th>
                                    <th>Valve Rated Cv </th>
                                    <th>Body Material </th>
                                    <th>Plug Material </th>
                                    <th>Seat Material </th>
                                    <th>Seal Material </th>
                                    <th>Stem Material  </th>
                                    <th>Bolt and Nut Material </th>
                                    <th>Packing Type & Material </th>
                                    <th>Flow Direction </th>
                                    <th>Model No </th>
                                    <th>Trim Characteristic </th>
                                    <th>Port Size </th>
                                    <th>Outlet </th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($controlValveBodyAndValveTrims as $key => $controlValveBodyAndValveTrim)
                                <tr>
                                        <td>{{ $key + $controlValveBodyAndValveTrims->firstItem() }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->manufacturer }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->valve_body_type }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->body_size }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->end_connect_size }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->flange_face_finish }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->valve_rated_cv }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->body_material }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->plug_material }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->seat_material }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->seal_material }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->stem_material }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->bolt_nut_material }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->packing_type_material }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->flow_direction }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->model_no }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->trim_charac }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->port_size }}</td>
                                        <td>{{ $controlValveBodyAndValveTrim->outlet }}</td>
                                        <td>
                                            <a href="{{ route('datasheets.control.valve.body.trim.show', ['body_trim' => $controlValveBodyAndValveTrim]) }}" class="btn btn-success btn-sm">Show</a>
                                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValveBodyAndValveTrim->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $controlValveBodyAndValveTrims->onEachSide(5)->links() }}
                    </div>
                </div>
              </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
