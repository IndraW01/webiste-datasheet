<x-layout-app>

    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Datasheet</h4>
                <p class="card-description">
                    General
                </p>
                <form class="form-sample" action="{{ route('datasheets.control.valve.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="tag_no" class="col-sm-3 col-form-label">Tag No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('tag_no') is-invalid @enderror" name="tag_no" id="tag_no" value="{{ old('tag_no') }}" />
                                    @error('tag_no')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="p_id_number" class="col-sm-3 col-form-label">P&ID Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('p_id_number') is-invalid @enderror" name="p_id_number" id="p_id_number" value="{{ old('p_id_number') }}" />
                                    @error('p_id_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="line_number" class="col-sm-3 col-form-label">Line Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('line_number') is-invalid @enderror" name="line_number" id="line_number" value="{{ old('line_number') }}"  />
                                    @error('line_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="line_size" class="col-sm-3 col-form-label">Line Size</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('line_size') is-invalid @enderror" name="line_size" id="line_size" value="{{ old('line_size') }}" />
                                    @error('line_size')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="valve_service_type" class="col-sm-3 col-form-label">Valve Service Type</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('valve_service_type') is-invalid @enderror" name="valve_service_type" id="valve_service_type" value="{{ old('valve_service_type') }}" />
                                    @error('valve_service_type')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="quantity" class="col-sm-3 col-form-label">Quantity</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="quantity" value="{{ old('quantity') }}" />
                                    @error('quantity')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="service" class="col-sm-3 col-form-label">Service</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('service') is-invalid @enderror" name="service" id="service" value="{{ old('service') }}" />
                                    @error('service')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="piping_class" class="col-sm-3 col-form-label">Piping Class</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('piping_class') is-invalid @enderror" name="piping_class" id="piping_class" value="{{ old('piping_class') }}" />
                                    @error('piping_class')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="schedule" class="col-sm-3 col-form-label">Schedule</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('schedule') is-invalid @enderror" name="schedule" id="schedule" value="{{ old('schedule') }}" />
                                    @error('schedule')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('datasheets.control.valve.index') }}" class="btn btn-success">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</x-layout-app>
