@extends('layouts.site')

@section('content')
<div class="col-lg-8 col-md-8">
            
        @foreach($topics as $topic)
             <!-- POST -->
        <div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="{{ asset('/images/avatar.jpg')}}" alt="">
                            <div class="status green">&nbsp;</div>
                        </div>  
                    </div>
                    
                    <div class="posttext pull-left">
                    <h2><a href="#">{{$topic->titre}}</a></h2>
                        <p>{{$topic->message}}</p>
                    </div>
                    <div class="clearfix">
                            <form action="{{route('topics.update', ['id' => $topic->id])}}">
                            <div class="pull-right"><button class="btn btn-default" type="submit">Modifier</button></div>
                            @csrf
                            @method("PATCH")
                            </form>

                            <form action="{{route('topics.destroy', ['id' => $topic->id])}}" method="POST">
                            @csrf
                            @method("DELETE")
                                    <div class="pull-right"><button class="btn btn-default" type="submit">Supprimer</button></div>
        
                                    </form>


                    </div>
                </div>
                
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            {{count($topics)}}
                            <div class="mark"></div>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div><!-- POST -->
       
            @endforeach

    </div>


@endsection