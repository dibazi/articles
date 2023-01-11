
<section class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Create an Article</h3>
                </div>
                <div class="card-body">

                @if(Session::get('success'))
                <div class="alert alert-success">
                  {{Session::get('success')}}
                </div>
                @endif

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                  {{Session::get('fail')}}
                </div>
                @endif

                <form action="store" method="post">
                  @csrf
                <div class="mb-3">
                  <label for="author" class="form-label">Author</label>
                  <input type="text" name="author" class="form-control" id="author" aria-describedby="author" value="{{old('author')}}">
                  <span style="color:red" >@error('author'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="title" aria-describedby="title" value="{{old('title')}}">
                  <span style="color:red" >@error('title'){{$message}}@enderror</span>

                </div>
                <div class="mb-3">
                  <label for="content" class="form-label">Content of the article</label>
                  <textarea name="content" class="form-control" id="content" cols="3" rows="3"value="{{old('content')}}"></textarea>
                  <span style="color:red" >@error('content'){{$message}}@enderror</span>

                </div>
                <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <input type="category" name="category" class="form-control" id="category" aria-describedby="category"value="{{old('email')}}">
                  <span style="color:red" >@error('category'){{$message}}@enderror</span>

                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                </div>
            </div>
        </section>

