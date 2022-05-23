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
                            <a href="{{ route('datasheets.control.valve.actuator.create') }}" class="btn btn-primary btn-sm">Tambah Valve Actuator</a>
                            <a href="{{ route('datasheets.control.valve.') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                    </div>
                    <p class="card-description">
                        Control Valve Actuator
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Actuator Type </th>
                                    <th>Travel</th>
                                    <th>Bench Set </th>
                                    <th>Supply</th>
                                    <th>Air Supply</th>
                                    <th>To Actuator</th>
                                    <th>Fails Valve due to loss supply</th>
                                    <th>Handwheel</th>
                                    <th>Hydrostatic Testing</th>
                                    <th>Mounting Brackets</th>
                                    <th>Lockup Device</th>
                                    <th>Mechanical Position Indicator</th>
                                    <th>Mechanical Stopper</th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($controlValveActuators as $key => $controlValveActuator)
                                <tr>
                                        <td>{{ $key + $controlValveActuators->firstItem() }}</td>
                                        <td>{{ $controlValveActuator->actuator }}</td>
                                        <td>{{ $controlValveActuator->travel }}</td>
                                        <td>{{ $controlValveActuator->bench }}</td>
                                        <td>{{ $controlValveActuator->supply }}</td>
                                        <td>{{ $controlValveActuator->air_supply }}</td>
                                        <td>{{ $controlValveActuator->to_actuator }}</td>
                                        <td>{{ $controlValveActuator->fails_valve }}</td>
                                        <td>{{ $controlValveActuator->handwheel }}</td>
                                        <td>{{ $controlValveActuator->hydrostatic }}</td>
                                        <td>{{ $controlValveActuator->mounting }}</td>
                                        <td>{{ $controlValveActuator->lockup }}</td>
                                        <td>{{ $controlValveActuator->mechanical_position }}</td>
                                        <td>{{ $controlValveActuator->mechanical_stopper }}</td>
                                        <td>
                                            <a href="{{ route('datasheets.control.valve.actuator.show', ['actuator' => $controlValveActuator]) }}" class="btn btn-success btn-sm">Show</a>
                                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValveActuator->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $controlValveActuators->onEachSide(5)->links() }}
                    </div>
                </div>
              </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
