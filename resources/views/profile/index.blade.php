@extends('layouts.frontprofile')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-8 mx-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="caption mx-auto">
                                <div class="image">
                                @if ($headline->image_path)
                                    <img src="{{ asset('storage/image/' . $headline->image_path)}}">
                                @endif    
                                </div>
                                <div class="title mx-auto">
                                <h1>{{ str_limit($headline->title, 70) }}</h1>
                                </div>
                            </div>
                    <div class="col-md-12">
                        <P class="name mx-auto">{{ str_limit($headline->name, 70) }}</P>
                    </div>    
                    <div class="col-md-12">
                        <P class="gender mx-auto">{{ str_limit($headline->gender, 70) }}</P>
                    </div>
                    <div class="col-md-12">
                        <p class="hobby mx-auto">{{ str_limit($headline->hobby, 70) }}</p>
                    </div>
                    <div class="col-md-12">
                        <p class="introduction mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
           <div class="posts col-md-8 mx-auto mt-4">
               @foreach($posts as $post)
                   <div class="post">
                       <div class="row">
                           <div class="text col-md-6">
                               <div class="date">
                                   {{ $post->updated_at->format('Y年m月d日') }}
                               </div>
                               <div class="name">
                                   {{ str_limit($post->name, 150) }}
                               </div>
                               <div class="gender mt-3">
                                   {{ str_limit($post->gender, 150) }}
                               </div>
                               <div class="hobby mt-3">
                                   {{ str_limit($post->hobby, 150) }}
                               </div>
                               <div class="introduction mt-3">
                                   {{ str_limit($post->introduction, 750) }}
                               </div>
                           </div>
                       </div>
                       <hr color="#c0c0c0">
                @endforeach       
                   </div>
                   
           </div>
        </div>
    </div>
    @endsection