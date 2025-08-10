@extends('layouts.app')
@section('title', 'Presenco - Scan Qr')
@section('cumbs', 'Scan Qr')

@section('content')
    <div class="scan-qr">
        {!! QrCode::format('svg')->size(275)->generate(env('QR_TOKEN')) !!}
    </div>
@endsection