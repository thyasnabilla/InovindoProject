@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        <div class="text-center">
                            {{ __('Link verifikasi telah dikirim ke email anda.') }}<br>
                            {{ __('Segera cek email dan klik tombol "Verifikasi Email" agar bisa melanjutkan proses pendaftaran.') }}
                            <br>
                            {{ __('Jika anda tidak menerima link verifikasi') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit"
                                    class="btn btn-link p-0 m-0 align-baseline">{{ __('klik disini untuk mengirimkan ulang') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection