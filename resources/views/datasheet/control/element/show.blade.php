<x-layout-app>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Datasheet</h4>
                    <ul>
                        <li>Element Type: {{ $controlValveElement->element_type }}</li>
                        <li>Element Material: {{ $controlValveElement->element_material }}</li>
                        <li>Body Material: {{ $controlValveElement->body_material }}</li>
                        <li>Flange Material: {{ $controlValveElement->flange_material }}</li>
                        <li>Bolt and Nut Material: {{ $controlValveElement->bolt_and_nut }}</li>
                        <li>Fill Fluid: {{ $controlValveElement->fill_fluid }}</li>
                        <li>Painting: {{ $controlValveElement->painting }}</li>
                        <li>Instrument Range: {{ $controlValveElement->instrument_range }}</li>
                        <li>Calibration Range: {{ $controlValveElement->calibration_range }}</li>
                        <li>Scale: {{ $controlValveElement->scale }}</li>
                        <li>Static Pressure Unit: {{ $controlValveElement->static_pressure }}</li>
                        <li>Model No.: {{ $controlValveElement->model_no }}</li>
                        <li>Manufacture: {{ $controlValveElement->manufacture }}</li>
                    </ul>
                    <a href="{{ route('datasheets.control.valve.element.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    <a href="{{ route('datasheets.control.valve.element.edit' , ['element' => $controlValveElement]) }}" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
