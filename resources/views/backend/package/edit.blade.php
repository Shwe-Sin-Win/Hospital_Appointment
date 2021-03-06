<x-backend>

    @php 
        $id=$package->id;
        $name=$package->name;
        $photo=$package->photo;
        $description=$package->description;
        $cost=$package->cost;

    @endphp

	<main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Package Edit Form </h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <a href="{{route('backside.package.index')}}" class="btn btn-outline-primary">
                        <i class="icofont-double-left icofont-1x"></i>
                    </a>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <form action="{{ route('backside.package.update',$id) }}" method="POST" enctype="multipart/form-data">

                            	@csrf
                                @method('PUT')

                                <input type="hidden" name="oldPhoto" value="{{$photo}}">

                                <div class="form-group row">
                                    <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                                    <div class="col-sm-10">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-old" role="tab" aria-controls="nav-home" aria-selected="true">Old Photo</a>

                                                <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-new" role="tab" aria-controls="nav-profile" aria-selected="false">New Photo</a>

                                            </div>
                                        </nav>

                                         <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-old" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <img src="{{asset($photo)}}" class="img-fluid w-25">  
                                                </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-new" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <input type="file" id="logo_id" name="photo">
                                                </div>
                                                </div>
                                            </div>

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('photo')}}
                                    </div>

                                    </div>
                                </div>
                            </div>
                                
                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="name" value="{{$name}}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('name')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Description  </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="description" value="{{$description}}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('description')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cost" class="col-sm-2 col-form-label"> Costs </label>
                                    <div class="col-sm-10">
                                      <input type="number" class="form-control" id="name_id" name="cost" value="{{$cost}}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('cost')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="icofont-save"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</x-backend>