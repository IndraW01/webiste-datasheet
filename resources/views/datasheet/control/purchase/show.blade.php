<x-layout-app>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Datasheet</h4>
                    <ul>
                        <li>Type: {{ $controlValvePurchase->type }}</li>
                        <li>Size: {{ $controlValvePurchase->size }}</li>
                    </ul>
                    <a href="{{ route('datasheets.control.valve.purchase.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    <a href="{{ route('datasheets.control.valve.purchase.edit' , ['purchase' => $controlValvePurchase]) }}" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
