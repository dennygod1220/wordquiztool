@extends('layouts.main')

@section('main')
    <div class="container">

        <div class="row d-flex align-items-center justify-content-center">

            <div class="card">
                <div class="card-header bg-primary">
                    登入
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <li class="text-danger">{{ $errors->first() }}</li>
                    @endif
                    <form action="{{ url('/login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" value="{{ old('email') ?? '' }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                登入
                            </button>
                            <small class="ml-2">
                                <a href="{{ url('register') }}">
                                    註冊
                                </a>
                            </small>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
