@extends('layouts.app')
@section('title', 'Presenco - Users')
@section('cumbs', 'Users')

@section('content')
    <div class="table-actions">
        <div class="search-control">
            <label for="search" id="search-label" class="search-control-label">Search</label>
            <div class="search-control-input-group">
                <img src="./assets/images/search.svg" alt="search icon" width="20" class="search-control-icon">
                <input type="text" id="search" name="search" placeholder="Search ..." class="search-control-input"
                    autocomplete="off">
            </div>
        </div>
        <a class="add-btn" href="{{ route('users.create') }}">
            <span class="add-btn-icon">+</span>
            <span class="add-btn-text">Create User</span>
        </a>
    </div>
    <div class="table-wrapper">
        <table class="elegant-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>FULLNAME</th>
                    <th>EMAIL ADDRESS</th>
                    <th>GENDER</th>
                    <th>ROLE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->email }}</td>
                        <td><span class="badge {{ $user->gender === 'Male' ? 'green' : 'red' }}">{{ $user->gender }}</span></td>
                        <td><span class="badge {{ $user->role->name === 'Administrator' ? 'blue' : 'gray' }}">{{ $user->role->name }}</span></td>
                        <td class="actions">
                            <a href="{{ route('users.edit', $user->id) }}"><img src="./assets/images/edit.svg" alt="edit" class="action-edit"></a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="confirm('Are you sure you want to delete this user?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background:none;border:none;"><img src="./assets/images/delete.svg" alt="delete" class="action-delete"></button>
                            </form>
                        </td>
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
