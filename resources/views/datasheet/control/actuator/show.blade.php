<x-layout-app>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Datasheet</h4>
                    <ul>
                        <li>Actuator Type: {{ $controlValveActuator->actuator }}</li>
                        <li>Travel: {{ $controlValveActuator->travel }}</li>
                        <li>Bench Set: {{ $controlValveActuator->bench }}</li>
                        <li>Supply: {{ $controlValveActuator->supply }}</li>
                        <li>Air Supply: {{ $controlValveActuator->air_supply }}</li>
                        <li>To Actuator: {{ $controlValveActuator->to_actuator }}</li>
                        <li>Fails Valve due to loss supply: {{ $controlValveActuator->fails_valve }}</li>
                        <li>Handwheel: {{ $controlValveActuator->handwheel }}</li>
                        <li>Hydrostatic Testing: {{ $controlValveActuator->hydrostatic }}</li>
                        <li>Mounting Brackets: {{ $controlValveActuator->mounting }}</li>
                        <li>Lockup Device: {{ $controlValveActuator->lockup }}</li>
                        <li>Mechanical Position Indicator: {{ $controlValveActuator->mechanical_position }}</li>
                        <li>Mechanical Stopper: {{ $controlValveActuator->mechanical_stopper }}</li>
                    </ul>
                    <a href="{{ route('datasheets.control.valve.actuator.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    <a href="{{ route('datasheets.control.valve.actuator.edit' , ['actuator' => $controlValveActuator]) }}" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
