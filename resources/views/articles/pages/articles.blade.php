<div class="body container mt-5 antialiased">


<div class="gallery">

@foreach($data as $data)

  <div class="content">
     
      <h3>{{$data->title}}</h3>
      <p>{{$data->content}}</p>
      <h6>{{$data->author}}</h6>
      <ul>
          <li><i class="fa fa-star checked"></i></li>
          <li><i class="fa fa-star checked"></i></li>
          <li><i class="fa fa-star checked"></i></li>
          <li><i class="fa fa-star "></i></li>
          <li><i class="fa fa-star "></i></li>
      </ul>
      <button id="button" class="buy">Read</button>
  </div>

@endforeach

</div>

</div>
