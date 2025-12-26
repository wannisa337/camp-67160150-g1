@extends('template.default')

@section('content')
<h1 class="mb-4">Result #Html - Form</h1>
<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>ชื่อ</label>
    </div>
    <div class="col">
        <input value="{{ $fname }}" readonly class="form-control">
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>สกุล</label>
    </div>
    <div class="col">
        <input value="{{ $lname }}" readonly class="form-control">
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>วันเกิด</label>
    </div>
    <div class="col">
        <input value="{{ $birthday }}" readonly class="form-control">
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>อายุ</label>
    </div>
    <div class="col">
        <input value="{{ $age }}" readonly class="form-control">
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>เพศ</label>
    </div>
    <div class="col">
        <input value="{{ $gender }}" readonly class="form-control">
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>ที่อยู่</label>
    </div>
    <div class="col">
        <textarea readonly class="form-control" rows="4">{{ $address }}</textarea>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>สีที่ชอบ</label>
    </div>
    <div class="col">
        <input value="{{ $color }}" readonly class="form-control">
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>แนวเพลง</label>
    </div>
    <div class="col">
        <input value="{{ $music }}" readonly class="form-control">
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>การยินยอม</label>
    </div>
    <div class="col">
        <input value="{{ $agree }}" readonly class="form-control">
    </div>
</div>
@endsection
@push('styles')
<style>
    body {
        background-color: #fff8e1; /* สีครีม / เหลืองอ่อน */
    }
</style>
@endpush
