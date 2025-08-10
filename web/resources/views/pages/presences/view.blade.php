@extends('layouts.app')
@section('title', 'Presenco - Presences')
@section('cumbs', "Presences - $date")

@section('content')
    <div class="table-actions">
        <div class="search-control">
            <label for="search" id="search-label" class="search-control-label">Search</label>
            <div class="search-control-input-group">
                <img src="{{ asset('assets/images/search.svg') }}" alt="search icon" width="20" class="search-control-icon">
                <input type="text" id="search" name="search" placeholder="Search ..." class="search-control-input"
                    autocomplete="off">
            </div>
        </div>
    </div>
    <div class="table-wrapper">
        <table class="elegant-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>FULLNAME</th>
                    <th>EMAIL</th>
                    <th>PRESENCE AT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presences as $presence)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $presence->user->fullname }}</td>
                        <td>{{ $presence->user->email }}</td>
                        <td>{{ \Carbon\Carbon::parse($presence->created_at)->format('H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        const searchInput = document.getElementById('search');
        const searchLabel = document.getElementById('search-label');
        const searchIcon = document.querySelector('.search-control-icon');

        searchInput.addEventListener('input', (e) => {
            let keyword = e.target.value.toLowerCase().trim();
            const rows = document.querySelectorAll('tbody tr');

            if (keyword === "") {
                searchLabel.classList.remove('active');
                searchIcon.classList.remove('active');
            } else {
                searchLabel.classList.add('active');
                searchIcon.classList.add('active');
            }

            rows.forEach(row => {
                let text = row.textContent.toLowerCase().trim();
                if (text.includes(keyword)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    </script>
@endpush
