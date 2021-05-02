@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail">E-Mail Address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="email">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputPassword">E-Mail Address</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="password">
                </div>
            
                <!--<div class="form-group">
                    <label for="exampleInputFile">File Input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example Uploading File</p>
                </div>
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Check-me Out
                    </label>
                </div>-->
            
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection