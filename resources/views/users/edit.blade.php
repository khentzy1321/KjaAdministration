@extends('layouts.admin')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xl-12 order-xl-1 mt-2">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Edit Profile') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('profile.index') }}" class="btn btn-sm btn-primary">{{ __('Back to Profile') }}</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                    @foreach ($users as $user)
                        @endforeach
                        <form method="post" action="{{ route('users.update', $user) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $user->name) }}" required autofocus>
                                </div>
                                <!-- <div class="form-group{{ $errors->has('user_type') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="user_type">{{ __('User Type') }}</label>
                                    <select type="text" name="user_type" id="user_type" class="form-control form-control-alternative{{ $errors->has('user_type') ? ' is-invalid' : '' }}" placeholder="{{ __('User Type') }}" value="{{ old('user_type', $user->user_type) }}" required autofocus>
                                        <option value="admin"{{ old('user_type', $user->user_type) === 'admin'? 'selected' : ' '}} >admin</option>
                                        <option value="user" {{ old('user_type', $user->user_type) === 'user'  ? 'selected' : ' '}} >user</option>
                                
                                </select>
                                </div> -->
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', $user->email) }}" required>
                           
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" value="">
                                
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm Password') }}" value="">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection