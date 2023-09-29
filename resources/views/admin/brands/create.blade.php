@extends('admin.layouts.base')
@section('title', 'ブランド新規作成')
@section('content')
<div class="pcoded-content">
  <!-- Page-header start -->
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="page-header-title">
            <h2 class="mt-2">ブランド新規作成</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page-header end -->
  <div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
      <div class="page-wrapper">
        <!-- Page body start -->
        <div class="page-body">
          <div class="row">
            <div class="col-sm-12">
              <!-- Basic Form Inputs card start -->
              <div class="card">
                <div class="card-header">
                  <h4>新規作成</h4>
                </div>
                <div class="card-block">
                  <form action="{{ route('admin.brands.create') }}" method="post">
                    @csrf
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label" for="name">ブランド名</label>
                      <div class="col-sm-10">
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control"
                          placeholder="ブランド名" required>
                        @error('name')
                        <div class="error-box">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="btn-toolbar">
                      <div class="ml-2">
                        <a class="btn btn-secondary waves-effect waves-light"
                          href="{{ route('admin.brands.index') }}">戻る</a>
                      </div>
                      <div class="ml-auto mr-2">
                        <button class="btn btn-primary waves-effect waves-light">登録</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Basic Form Inputs card end -->
            </div>
          </div>
        </div>
        <!-- Page body end -->
      </div>
    </div>
    <!-- Main-body end -->
  </div>
</div>
@endsection