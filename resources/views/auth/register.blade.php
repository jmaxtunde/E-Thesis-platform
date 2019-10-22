@extends('layouts.app')

@section('content')
<div class="container">
<br/><br/><br/><br/><br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header"><h1 style="color:#3fa965;">Create a New Students Profile</h1></div></center>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h6 style="color:#3fa965;">Class ID Information</h4><hr>
                        <p>
                        All students must be enrolled in an active Research Group. To enroll in a Research Group, please enter the name of the research group 
                        and the research group enrollment key that you were given by your Supervisor.<br/>
                        Please note that the key and pincode are case-sensitive. If you do not have this information, or the 
                        information you are entering appears to be incorrect, please contact your supervisor.
                        </p>
                        <div class="form-group row">
                            <label for="namerg" class="col-md-4 col-form-label text-md-right">Research Group Name</label>

                            <div class="col-md-6">
                                <input id="namerg" type="text" class="form-control @error('namerg') is-invalid @enderror" name="namerg" value="{{ old('namerg') }}" required autocomplete="name" autofocus>

                                @error('namerg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ekey" class="col-md-4 col-form-label text-md-right">Enrollment Key</label>

                            <div class="col-md-6">
                                <input id="ekey" type="text" class="form-control @error('ekey') is-invalid @enderror" name="ekey" value="{{ old('ekey') }}" required autocomplete="name" autofocus>

                                @error('ekey')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <h6 style="color:#3fa965;">Student's Information</h4><hr><br/>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <h6 style="color:#3fa965;">Password and security</h4><hr>
                        Please keep in mind that your password is case sensitive 
                        (for example, paSS1234 would be different than pass1234) and must be at least 8 characters long.
                        <div class="form-group row">
                        <br/> <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
