@extends('layout')

@section('title')Review @endsection
    

@section('main_content')
<h1>Form for a review</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/review/check" method="post"> 
    @csrf
<label for="email">Email</label>
<input type="email" name="email" id="email" placeholder="Insert your email" class="form-control">
<label for="name">Subject</label>
<input type="text" name="subject" id="subject" placeholder="Insert subject" class="form-control">
<label for="message">Message</label>
<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Insert your message"></textarea><br>
<button type="submit" class="btn btn-success">Send</button>
</form>
<br>
<h1>All Reviews</h1>

@foreach ($reviews as $el)

<div class="alert alert-warning">
    <h3>{{ $el->subject }}</h3>
    <b>{{ $el->email }}</b>
    <p>{{ $el->message }}</p>
</div>
@endforeach
@endsection