@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">اضافة مقالة  إلي المعرض</div>

                <form method="post" enctype="multipart/form-data" action="{{route('addvideoform')}}">
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">إسم المقالة</label>
    <input name="title" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">المحتوي </label>
    <textarea class="col-lg-12" id="summernote" name="body"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">التاريخ</label>
    <input name="date" required type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">تحميل الملف</label>
    <input accept="image/*" name="img" required type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company name">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">الموءلف  </label>

  <input name="author" required type="twxt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">عنوان SEO</label>
    <input name="metatitle" required type="twxt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">وصف SEO</label>
    <input name="metadesc" required type="twxt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>
</div>
@endsection
