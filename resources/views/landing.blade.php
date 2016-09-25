@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Latest blogs</div>

                <div class="panel-body">
                    <table>
                        @foreach($blogs as $blog)
                        <tr>
                            
                            <td><a href="{{url('blogs/view/')}}/{{$blog->id}}">{{$blog->title}}</a></td>
                            
                         
                        </tr>
                        @endforeach
                        {{$blogs->links()}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
