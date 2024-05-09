<!DOCTYPE html>
<html lang="zxx" class="js">

@extends('cms.layouts.LoginMain')
@section('content')


    
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="{{route('index')}}" class="logo-link">
                        <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                        <img class="logo-dark" style="height: 40px" src="/assets/images/logo-dark.png" srcset="/assets/images/logo-dark.png" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Sign-In</h4>
                                        <div class="nk-block-des">
                                            <p>Access the cms panel using your passcode.</p>
                                        </div>
                                    </div>
                                </div>
                                @if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif
<br>
                        
<form action="{{ route('cms.login') }}" method="POST">
    @csrf <!-- This line generates a CSRF token for security -->
    <div class="form-group">
        <div class="form-label-group">
            <label class="form-label" for="password">Passcode</label>
        </div>
        <div class="form-control-wrap">
            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
            </a>
            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
    </div>
</form>


                               
                                
                                <div class="text-center pt-4 pb-3">
                                </div>
                             
                            </div>
                        </div>
                    </div>
                  
    @endsection
@push('scripts')
</html>