@extends('layouts.admin-dashboard.master')

@section('content')

<section style="background-color:lightgray;">
    <div class="container-fluid" >
      <!-- Page Header-->
      
      <div class="row pt-5 justify-content-center">
<div class="col-lg-6">
    <div class="card">
    <form action="{{route('admin_add_task')}}" method="post">
            {{ csrf_field() }}
            <div class="card-header">تسک جدید</div>
                <div class="card-body">
                    <h4 class="card-title">توضیح تسک</h4>
                    <p class="card-text">
                        <input type="text" name="task"> 
                        </p>
                        <button type="submit"  class="btn btn-primary">اضافه کردن تسک</button>
                </div>

        </form>
      
    </div>
  </div>
      </div>
    </div>
</section>
@endsection