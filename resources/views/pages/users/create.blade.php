@extends('layouts.app')
@section('title', 'Presenco - Create User')
@section('cumbs', 'Create User')

@section('content')
    <form action="{{ route('users.store') }}" class="form-control" method="POST">
        @csrf
        <div class="twin-form-input-group">
            <div class="form-input-group">
                <label for="fullname" class="form-label">Fullname :</label>
                <input type="text" class="form-input" name="fullname" id="fullname" placeholder="Enter your fullname ..."
                    autocomplete="off" value="{{ old('fullname') }}">
                @error('fullname')
                    <small class="form-validation">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="twin-form-input-group">
            <div class="form-input-group">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-input" name="email" id="email" placeholder="Enter your email ..."
                    autocomplete="off" value="{{ old('email') }}">
                @error('email')
                    <small class="form-validation">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="twin-form-input-group">
            <div class="form-input-group">
                <label for="gender" class="form-label">Gender :</label>
                <input type="text" class="form-input" name="gender" id="gender" list="gender-options"
                    placeholder="Enter your gender ..." autocomplete="off" value="{{ old('gender') }}">
                @error('gender')
                    <small class="form-validation">{{ $message }}</small>
                @enderror
            </div>
            <datalist id="gender-options">
                <option value="Male">
                <option value="Female">
            </datalist>
        </div>
        <button type="submit" class="form-button-submit">
            <span class="form-button-text">Submit</span>
        </button>
    </form>
@endsection
