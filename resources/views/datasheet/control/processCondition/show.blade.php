<x-layout-app>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Datasheet</h4>
                    <ul>
                        <li>No</li>
                        <li>Component: {{ $controlValveProcessCondition->component }}</li>
                        <li>Cases: {{ $controlValveProcessCondition->cases }}</li>
                        <li>Fluid: {{ $controlValveProcessCondition->fluid }}</li>
                        <li>Gas Flow: {{ $controlValveProcessCondition->gas_flow }}</li>
                        <li>Liquid Flow: {{ $controlValveProcessCondition->liquid_flow }}</li>
                        <li>Upstream Pressure: {{ $controlValveProcessCondition->upstream_pressure }}</li>
                        <li>Downstream Pressure: {{ $controlValveProcessCondition->downstream_pressure }}</li>
                        <li>Design Pressure: {{ $controlValveProcessCondition->design_pressure }}</li>
                        <li>Operating Temperature: {{ $controlValveProcessCondition->operating_temperature }}</li>
                        <li>Design Temperature: {{ $controlValveProcessCondition->design_temperature }}</li>
                        <li>Viscosity: {{ $controlValveProcessCondition->viscosity }}</li>
                        <li>Density @ FTP: {{ $controlValveProcessCondition->density_ftp }}</li>
                        <li>Molecular Weight: {{ $controlValveProcessCondition->molecular_weight  }}</li>
                        <li>Vapor Pressure at T: {{ $controlValveProcessCondition->vapor_pressure_at }}</li>
                        <li>Sp. Heat Ratio (Cp/Cv): {{ $controlValveProcessCondition->sp_heat_ratio }}</li>
                        <li>Critical Pressure: {{ $controlValveProcessCondition->critical_pressure }}</li>
                        <li>Critical Temperature: {{ $controlValveProcessCondition->critical_temperature  }}</li>
                        <li>Specific Gravity: {{ $controlValveProcessCondition->specific_gravity }}</li>
                        <li>Calculated Cv (Note 4): {{ $controlValveProcessCondition->calculated_cv }}</li>
                        <li>Valve Opening (Note 4): {{ $controlValveProcessCondition->valve_opening }}</li>
                        <li>Flash. / Cav. / Chocked (Note 4): {{ $controlValveProcessCondition->flash_cav_chocked }}</li>
                        <li>Predicted SPL (Note 5): {{ $controlValveProcessCondition->predicted_spl }}</li>
                        <li>Aksi </li>
                    </ul>
                    <a href="{{ route('datasheets.control.valve.process.condition.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    <a href="{{ route('datasheets.control.valve.process.condition.edit' , ['process_condition' => $controlValveProcessCondition]) }}" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
