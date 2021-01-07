<div class="container sidebar-body">
 
  <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h4 class=""><span class="new-span">Dashboard</span></h4>
      <hr>
      <h5 class="mb-0">

        <button class="sidbar-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Create New Admin
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <ul>
          <li><a href="{{ route('createadmin') }}">Create New Admin</a></li>
          <li><a href="{{ route('createadminlist') }}">Admin List</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="sidbar-btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          Subscribes
        </button>
      </h5>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <ul>
          <li><a href="{{ route('subscribelist') }}">Client Subscribes List</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingthree">
      <h5 class="mb-0">
        <button class="sidbar-btn" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
          Photographers
        </button>
      </h5>
    </div>

    <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordion">
      <div class="card-body">
        <ul>
          <li><a href="{{ route('photographerlist') }}">Photgrapher List</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingfour">
      <h5 class="mb-0">
        <button class="sidbar-btn" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
          Slider Images
        </button>
      </h5>
    </div>

    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
      <div class="card-body">
        <ul>
          <li><a href="{{ route('imageslidercreate') }}">Upload Images</a></li>
          <li><a href="{{ route('imagesliderlist') }}">Images List</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingfive">
      <h5 class="mb-0">
        <button class="sidbar-btn" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
          Message
        </button>
      </h5>
    </div>

    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
      <div class="card-body">
        <ul>
          <li><a href="{{ route('messagelist') }}">Message List</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>