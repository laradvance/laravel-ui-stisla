@extends('layouts.app')
@section('content')
 <section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Table</div>
        </div>
    </div>
    <div class="section-body">
         @if (session('status'))
            <div class="alert alert-success" role="alert">
             {{ session('status') }}
            </div>
         @endif
         You are logged in!
    </div>
 </section>
@endsection

