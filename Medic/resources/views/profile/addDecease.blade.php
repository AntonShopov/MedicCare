@extends('layouts.main')
@section('content')
<div style="font-size: 20; font-weight: bold; padding-left: 10%; padding-right: 10%; color: white">
    <form action="{{ route('store',['id'=> auth()->user()->id]) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <div style="text-align: center;  margin-top: 35px; font-size: 30">
                Add decease
            </div>
            <div style="padding-top: 5%">
                <div>
                    <label>Decease:</label>
                    <input name="name" class="form-control" type="text" required>
                </div>
                <div>
                    <label>Date of examination:</label>
                    <input name="time" class="form-control" type="text" required>
                </div>
                <div>
                    <label>Description & Symptoms:</label>
                    <textarea name="description" class="form-control" rows="10" required></textarea>
                </div>
            </div>
            <div class="pull-right" style="padding-top: 10px">
                <button type="submit" class="btn btn-primary" style="">Save</button>
            </div>
        </div>
    </form>
</div>
@stop