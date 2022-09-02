@extends('layouts.main')

@section('main')
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="card card-lg">
                <div class="card-header bg-primary">
                    註冊
                </div>
                <div class="card-body">
                    <form action="{{ url('/register') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">姓名</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') ?? '' }}">
                            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" value="{{ old('email') ?? '' }}">
                            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" value="{{ old('password') ?? '' }}">
                            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                註冊
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
