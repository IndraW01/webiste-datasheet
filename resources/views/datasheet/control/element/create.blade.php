<x-layout-app>

    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Datasheet</h4>
                <p class="card-description">
                    ELEMENT
                </p>
                <form class="form-sample" action="{{ route('datasheets.control.valve.element.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="element_type" class="col-sm-3 col-form-label">Element Type</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('element_type') is-invalid @enderror" name="element_type" id="element_type" value="{{ old('element_type') }}" />
                                    @error('element_type')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="element_material" class="col-sm-3 col-form-label">Element Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('element_material') is-invalid @enderror" name="element_material" id="element_material" value="{{ old('element_material') }}" />
                                    @error('element_material')
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
                                <label for="body_material" class="col-sm-3 col-form-label">Body Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('body_material') is-invalid @enderror" name="body_material" id="body_material" value="{{ old('body_material') }}"  />
                                    @error('body_material')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="flange_material" class="col-sm-3 col-form-label">Flange Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('flange_material') is-invalid @enderror" name="flange_material" id="flange_material" value="{{ old('flange_material') }}" />
                                    @error('flange_material')
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
                                <label for="bolt_and_nut" class="col-sm-3 col-form-label">Bolt and Nut Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('bolt_and_nut') is-invalid @enderror" name="bolt_and_nut" id="bolt_and_nut" value="{{ old('bolt_and_nut') }}" />
                                    @error('bolt_and_nut')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="fill_fluid" class="col-sm-3 col-form-label">Fill Fluid</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('fill_fluid') is-invalid @enderror" name="fill_fluid" id="fill_fluid" value="{{ old('fill_fluid') }}" />
                                    @error('fill_fluid')
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
                                <label for="painting" class="col-sm-3 col-form-label">Painting</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('painting') is-invalid @enderror" name="painting" id="painting" value="{{ old('painting') }}" />
                                    @error('painting')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="instrument_range" class="col-sm-3 col-form-label">Instrument Range</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('instrument_range') is-invalid @enderror" name="instrument_range" id="instrument_range" value="{{ old('instrument_range') }}" />
                                    @error('instrument_range')
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
                                <label for="calibration_range" class="col-sm-3 col-form-label">Calibration Range</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('calibration_range') is-invalid @enderror" name="calibration_range" id="calibration_range" value="{{ old('calibration_range') }}" />
                                    @error('calibration_range')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="scale" class="col-sm-3 col-form-label">Scale</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('scale') is-invalid @enderror" name="scale" id="scale" value="{{ old('scale') }}" />
                                    @error('scale')
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
                                <label for="static_pressure" class="col-sm-3 col-form-label">Static Pressure Unit</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('static_pressure') is-invalid @enderror" name="static_pressure" id="static_pressure" value="{{ old('static_pressure') }}" />
                                    @error('static_pressure')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="model_no" class="col-sm-3 col-form-label">Model No.</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('model_no') is-invalid @enderror" name="model_no" id="model_no" value="{{ old('model_no') }}" />
                                    @error('model_no')
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
                                <label for="manufacture" class="col-sm-3 col-form-label">Manufacture</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('manufacture') is-invalid @enderror" name="manufacture" id="manufacture" value="{{ old('manufacture') }}"  />
                                    @error('manufacture')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('datasheets.control.valve.element.index') }}" class="btn btn-success">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</x-layout-app>
