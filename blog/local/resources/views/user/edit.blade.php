<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
</head>
<body>
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <form class="form-horizontal form-row-seperated" action="{{ URL::action('UserController@update') }}"
          method="Post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ old('id', $getUserById['id'])}}">
        <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <input type="text" class="form-control"
                   value="{{ old('username', $getUserById['username'])}}" name="username">
        </div>
        <div class="form-group">
            <label for="Sex">Sex</label>
            <select name="sex" class="form-control">
                <option value="0" <?php if($getUserById['sex'] == 0) echo "selected='selected'" ?>>
                    Male
                </option>
                <option value="1"<?php if($getUserById['sex'] == 1) echo "selected='selected'" ?>>
                    Female
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>