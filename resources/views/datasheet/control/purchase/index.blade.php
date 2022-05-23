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
                            <a href="{{ route('datasheets.control.valve.purchase.create') }}" class="btn btn-primary btn-sm">Tambah Valve Purchase</a>
                            <a href="{{ route('datasheets.control.valve.') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                    </div>
                    <p class="card-description">
                        Control Valve Purchase
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Type </th>
                                    <th>Size</th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($controlValvePurchases as $key => $controlValvePurchase)
                                <tr>
                                        <td>{{ $key + $controlValvePurchases->firstItem() }}</td>
                                        <td>{{ $controlValvePurchase->type }}</td>
                                        <td>{{ $controlValvePurchase->size }}</td>
                                        <td>
                                            <a href="{{ route('datasheets.control.valve.purchase.show', ['purchase' => $controlValvePurchase]) }}" class="btn btn-success btn-sm">Show</a>
                                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValvePurchase->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $controlValvePurchases->onEachSide(5)->links() }}
                    </div>
                </div>
              </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
