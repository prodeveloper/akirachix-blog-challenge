@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New blog</div>

                <div class="panel-body">
                    <form action="/blogs/new" method="post">
                        <div class="form-group">
                            <label for="">Title</label>
                        <input type="text" name="title"/>
                        </div>
                        <div class="form-group">
                            <label for="">Body</label>
                        <textarea class="form-control" name="body" rows="3"></textarea>
                        </div>
                        {{ csrf_field() }}
                 
                    
                        <input type="submit" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
