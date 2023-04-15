@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table pro tbl">
            <thead>

            <tr>
<td>Id</td>
<td>Name</td>
<td>Image</td>
<td>delete video</td>
</tr>
</thead>
<tbody>

@foreach($img as $c)
<tr>
<td>{{$c->id}}</td>
<td>{{$c->name}}</td>
<td><img style="width:200px;height:auto" src="public/img/{{$c->img}}" /></td>
<td><a href="deletevideo/{{$c->id}}">حذف هذا الفيديو</a></td>

</tr>
</tbody>

@endforeach

</table>
        </div>
    </div>
</div>
@endsection
</div>