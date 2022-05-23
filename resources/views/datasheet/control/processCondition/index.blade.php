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
                            <a href="{{ route('datasheets.control.valve.process.condition.create') }}" class="btn btn-primary btn-sm">Tambah Valve Process Condition</a>
                            <a href="{{ route('datasheets.control.valve.') }}" class="btn btn-success btn-sm">Kembali</a>
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
                                    <th>Component</th>
                                    <th>Cases</th>
                                    <th>Fluid</th>
                                    <th>Gas Flow</th>
                                    <th>Liquid Flow</th>
                                    <th>Upstream Pressure</th>
                                    <th>Downstream Pressure</th>
                                    <th>Design Pressure</th>
                                    <th>Operating Temperature</th>
                                    <th>Design Temperature</th>
                                    <th>Viscosity</th>
                                    <th>Density @ FTP</th>
                                    <th>Molecular Weight</th>
                                    <th>Vapor Pressure at T</th>
                                    <th>Sp. Heat Ratio (Cp/Cv)</th>
                                    <th>Critical Pressure</th>
                                    <th>Critical Temperature</th>
                                    <th>Specific Gravity</th>
                                    <th>Calculated Cv (Note 4)</th>
                                    <th>Valve Opening (Note 4)</th>
                                    <th>Flash. / Cav. / Chocked (Note 4)</th>
                                    <th>Predicted SPL (Note 5)</th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($controlValveProcessConditions as $key => $controlValveProcessCondition)
                                <tr>
                                        <td>{{ $key + $controlValveProcessConditions->firstItem() }}</td>
                                        <td>{{ $controlValveProcessCondition->component }}</td>
                                        <td>{{ $controlValveProcessCondition->cases }}</td>
                                        <td>{{ $controlValveProcessCondition->fluid }}</td>
                                        <td>{{ $controlValveProcessCondition->gas_flow }}</td>
                                        <td>{{ $controlValveProcessCondition->liquid_flow }}</td>
                                        <td>{{ $controlValveProcessCondition->upstream_pressure }}</td>
                                        <td>{{ $controlValveProcessCondition->downstream_pressure }}</td>
                                        <td>{{ $controlValveProcessCondition->design_pressure }}</td>
                                        <td>{{ $controlValveProcessCondition->operating_temperature }}</td>
                                        <td>{{ $controlValveProcessCondition->design_temperature }}</td>
                                        <td>{{ $controlValveProcessCondition->viscosity }}</td>
                                        <td>{{ $controlValveProcessCondition->density_ftp }}</td>
                                        <td>{{ $controlValveProcessCondition->molecular_weight  }}</td>
                                        <td>{{ $controlValveProcessCondition->vapor_pressure_at }}</td>
                                        <td>{{ $controlValveProcessCondition->sp_heat_ratio }}</td>
                                        <td>{{ $controlValveProcessCondition->critical_pressure }}</td>
                                        <td>{{ $controlValveProcessCondition->critical_temperature  }}</td>
                                        <td>{{ $controlValveProcessCondition->specific_gravity }}</td>
                                        <td>{{ $controlValveProcessCondition->calculated_cv }}</td>
                                        <td>{{ $controlValveProcessCondition->valve_opening }}</td>
                                        <td>{{ $controlValveProcessCondition->flash_cav_chocked }}</td>
                                        <td>{{ $controlValveProcessCondition->predicted_spl }}</td>
                                        <td>
                                            <a href="{{ route('datasheets.control.valve.process.condition.show', ['process_condition' => $controlValveProcessCondition]) }}" class="btn btn-success btn-sm">Show</a>
                                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValveProcessCondition->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $controlValveProcessConditions->onEachSide(5)->links() }}
                    </div>
                </div>
              </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
