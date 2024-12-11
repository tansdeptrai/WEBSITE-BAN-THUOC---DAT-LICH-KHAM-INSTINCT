@extends('admin.layout')
@section('titlepage','')

@section('content')

<div class="container-fluid mt-4 px-4">
    <h1 class="mt-4">Update Packages</h1>
    <form action="{{ route('admin.variantPackages.packageUpdate') }}" method="post"  id="demoForm">
        @csrf
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $package->name}}" name="name" placeholder="Name">
        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <input type="hidden" name="id" value="{{ $package->id }}">
      <input type="submit" class="btn btn-primary" name="them" value="SAVE">
      <a href="{{ route('admin.variantPackages.variantPackageList') }}">
      <input type="button" class="btn btn-primary" value="LIST_VARIANT">
        </a>
    </form>
  </div>

@endsection