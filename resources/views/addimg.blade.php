@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">اضافة صورة إلي المعرض</div>

                <form method="post" enctype="multipart/form-data" action="{{route('addimgform')}}">
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">إسم الصورة</label>
    <input name="name" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">تحميل الملف</label>
    <input accept="image/*" name="img" required type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>
</div>
@endsection
