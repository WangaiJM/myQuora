@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Questions</h2></div>

                <div class="card-body">
                    @foreach($questions->all() as $question)
                        <div class="card-header">
                            <h2><a href="/question/{{$question->id}}">{{$question->title}}</a></h2>
                        </div>
                        <div class="card-body">
                            <p>
                                {{str_limit($question->body, 250)}}
                            </p>
                        </div>
                    @endforeach
                    <div class="text-center d-flex justify-content-center">
                        {{$questions->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
