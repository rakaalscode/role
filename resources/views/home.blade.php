@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Dashboard 
                {{ Auth::user()->hak_akses == 1 ? 'Admin' : ''}}
                {{ Auth::user()->hak_akses == 0 ? 'User' : ''}}
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(\Session::has('error'))
                        <div class="alert alert-danger">
                        {{\Session::get('error')}}
                        </div>
                    @endif

                    You are logged in!
                    
                    @if(Auth::user()->hak_akses == 1)
                    <div class="panel-body">
                        <a href="{{url('admin/routes')}}">Admin</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
