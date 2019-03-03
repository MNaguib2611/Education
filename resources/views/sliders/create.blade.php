
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sliders Create</title>
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body class="container">

        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<form enctype="multipart/form-data" method="post"  action="{{url('/sliders')}}">
    {{ csrf_field() }}
<div class="col-lg-6" style="position:relative; top:100px">
    <div class="form-group ">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" required>

    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <div class="form-group">
      <label class="form-check-label" for="image" >Background &nbsp; &nbsp; &nbsp; &nbsp;</label>
      <input type="file" class="form-check-input" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>






