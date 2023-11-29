
@extends('backend.master')


@section('content')
<div class="container-fluid px-4">
<h1 class="mt-2">Category Create Form</h1>
<ol class="breadcrumb mb-1">

</ol>

<form action="{{route('category.store')}}" method="post" >
    @csrf

        <div class="form-group">
            <label for="">Name <span style="color:red">*</span></label>
            <input required name="category_name" type="text" class="form-control" id="" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea  class="form-control" placeholder="Enter description" name="description" id="" cols="" rows=""></textarea>

        </div>
        <ol class="breadcrumb mb-1">

        </ol>

        <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection
