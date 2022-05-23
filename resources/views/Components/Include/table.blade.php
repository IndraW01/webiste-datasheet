<div class="row">
    <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Datasheet</h4>
                    <div class="add">
                        <a href="{{ route($allData) }}" class="btn btn-primary btn-sm">All Data</a>
                    </div>
                </div>
                <p class="card-description">
                    {{ $datasheet }}
                </p>
                <div class="table-responsive pt-3">
                    {{ $slot }}
                </div>
            </div>
          </div>
    </div>
</div>
