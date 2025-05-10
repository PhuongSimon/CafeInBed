@extends('/layouts/auth')

@push('css-dependencies')
<link href="/assets/css/auth.css" rel="stylesheet" />
@endpush

@section("content")
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="col-lg-5">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Đăng nhập</h1>
                            </div>

                            @if(session()->has('message'))
                            {!! session("message") !!}
                            @endif

                            <form class="user" method="post" action="/auth/login">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                      id="email" name="email" placeholder="Email"
                                      value="{{ @old('email') }}">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                      class="form-control @error('password') is-invalid @enderror" id="password"
                                      name="password" placeholder="Mật khẩu" data-toggle="password">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </form>
                            {{-- <hr> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection