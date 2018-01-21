@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Posts</a>
                    <h3>Your Blog Post</h3>
                        @if(count($posts)>0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td><a href="/posts/{{$item->id}}/edit" class="btn bt-default">Edit</a></td>
                                        <td>{!!Form::open(['action'=>['PostsController@destroy',$item->id],'method'=>'POST','class'=>'pull->right'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                            {!!Form::close()!!}</td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                           <p> You have no posts</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
