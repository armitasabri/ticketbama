@extends('layouts.confer.regular')
@section('content')
<div class="background4">
    <div class="container pr-5" style="padding-top:120px;min-height:700px">
        <div class="d-flex justify-content-center h-100">
            <div class="card " style="height: 500px; width: 500px;">
                <div class="card-header">
                    <h3 style="direction: rtl; text-align: right; display: inline-block;">   نظرات شما </h3>
                    

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                     @foreach ($mycomments as $item)
                     <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="pt-2 pb-1 text-bold text-white"> درباره‌ی فیلم "{{$item->Event->title}}"</h5>
                        </div>  
                        <div>
                            <button>
                                حذف نظر
                                </button>
                                <button>
                                    تغییر نظر
                                </button>
                        </div>
                     </div>
                       
                        <h4 class="pb-2" style="color:lightgoldenrodyellow">-{{$item->comment}}</h4>
                    <hr>
                      @endforeach
                    </div>
 



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
