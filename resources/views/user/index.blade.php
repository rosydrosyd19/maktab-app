@extends('layouts.index')

{{-- nama head --}}
@section('title', 'Users')

{{-- nama judul di halaman --}}
@section('title-page', 'Users')

{{-- Breadcrumb --}}
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active">User</li>
@endsection

@section('content')
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach
@endsection