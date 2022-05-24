<x-layout-app>

    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Datasheet</h4>
                <p class="card-description">
                    ACTUATOR
                </p>
                <form class="form-sample" action="{{ route('datasheets.control.valve.actuator.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="actuator" class="col-sm-3 col-form-label">Actuator Type</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('actuator') is-invalid @enderror" name="actuator" id="actuator" value="{{ old('actuator') }}" />
                                    @error('actuator')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="travel" class="col-sm-3 col-form-label">Travel</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('travel') is-invalid @enderror" name="travel" id="travel" value="{{ old('travel') }}" />
                                    @error('travel')
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
                                <label for="bench" class="col-sm-3 col-form-label">Bench Set</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('bench') is-invalid @enderror" name="bench" id="bench" value="{{ old('bench') }}"  />
                                    @error('bench')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="supply" class="col-sm-3 col-form-label">Supply</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('supply') is-invalid @enderror" name="supply" id="supply" value="{{ old('supply') }}" />
                                    @error('supply')
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
                                <label for="air_supply" class="col-sm-3 col-form-label">Air Supply</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('air_supply') is-invalid @enderror" name="air_supply" id="air_supply" value="{{ old('air_supply') }}" />
                                    @error('air_supply')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="to_actuator" class="col-sm-3 col-form-label">To Actuator</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('to_actuator') is-invalid @enderror" name="to_actuator" id="to_actuator" value="{{ old('to_actuator') }}" />
                                    @error('to_actuator')
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
                                <label for="fails_valve" class="col-sm-3 col-form-label">Fails Valve due to loss supply</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('fails_valve') is-invalid @enderror" name="fails_valve" id="fails_valve" value="{{ old('fails_valve') }}" />
                                    @error('fails_valve')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="handwheel" class="col-sm-3 col-form-label">Handwheel</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('handwheel') is-invalid @enderror" name="handwheel" id="handwheel" value="{{ old('handwheel') }}" />
                                    @error('handwheel')
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
                                <label for="hydrostatic" class="col-sm-3 col-form-label">Hydrostatic Testing</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('hydrostatic') is-invalid @enderror" name="hydrostatic" id="hydrostatic" value="{{ old('hydrostatic') }}" />
                                    @error('hydrostatic')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="mounting" class="col-sm-3 col-form-label">Mounting Brackets</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('mounting') is-invalid @enderror" name="mounting" id="mounting" value="{{ old('mounting') }}" />
                                    @error('mounting')
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
                                <label for="lockup" class="col-sm-3 col-form-label">Lockup Device </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('lockup') is-invalid @enderror" name="lockup" id="lockup" value="{{ old('lockup') }}" />
                                    @error('lockup')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="mechanical_position" class="col-sm-3 col-form-label">Mechanical Position Indicator</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('mechanical_position') is-invalid @enderror" name="mechanical_position" id="mechanical_position" value="{{ old('mechanical_position') }}" />
                                    @error('mechanical_position')
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
                                <label for="mechanical_stopper" class="col-sm-3 col-form-label">Mechanical Stopper</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('mechanical_stopper') is-invalid @enderror" name="mechanical_stopper" id="mechanical_stopper" value="{{ old('mechanical_stopper') }}"  />
                                    @error('mechanical_stopper')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('datasheets.control.valve.actuator.index') }}" class="btn btn-success">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</x-layout-app>
