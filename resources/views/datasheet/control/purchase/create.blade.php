<x-layout-app>

    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Datasheet</h4>
                <p class="card-description">
                    PURCHASE
                </p>
                <form class="form-sample" action="{{ route('datasheets.control.valve.purchase.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="type" class="col-sm-3 col-form-label">Type</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value="{{ old('type') }}" />
                                    @error('type')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="size" class="col-sm-3 col-form-label">Size</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('size') is-invalid @enderror" name="size" id="size" value="{{ old('size') }}" />
                                    @error('size')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('datasheets.control.valve.purchase.index') }}" class="btn btn-success">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</x-layout-app>
