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
        <button class="add-btn">
            <span class="add-btn-icon">+</span>
            <span class="add-btn-text">Create User</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="elegant-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>FULLNAME</th>
                    <th>EMAIL ADDRESS</th>
                    <th>ROLE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td><span class="badge blue">Administrator</span></td>
                    <td class="actions">
                        <img src="./assets/images/edit.svg" alt="edit" class="action-edit">
                        <img src="./assets/images/delete.svg" alt="delete" class="action-delete">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td><span class="badge gray">Default</span></td>
                    <td class="actions">
                        <img src="./assets/images/edit.svg" alt="edit" class="action-edit">
                        <img src="./assets/images/delete.svg" alt="delete" class="action-delete">
                    </td>
                </tr>
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
            if (e.target.value.trim() === "") {
                searchLabel.classList.remove('active');
                searchIcon.classList.remove('active');
            } else {
                searchLabel.classList.add('active');
                searchIcon.classList.add('active');
            }
        });
    </script>
@endpush
