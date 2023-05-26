@extends('layouts.form')
@section('title', 'Iniciar Sesión' )

@section('content')

   <!-- Page content -->
<div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body px-lg-5 py-lg-2">
            @if($errors->any())
            <div class="text-center text-muted mb-2">
                <h4>Se encontraron el siguiente error</h4>
            </div>

            <div class="alert alert-danger mb-4" role="alert">
                {{ $errors->first() }}
            </div>
            @else
                <div class="text-center text-muted mb-4">
                    <small>{{ __('Reset Password') }}</small>
                </div>

            @endif




                <form method="POST" action="{{ route('password.email') }}">
                @csrf
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <div
                   class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                       </div>
              </div>


              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4"> {{ __('Send Password Reset Link') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
