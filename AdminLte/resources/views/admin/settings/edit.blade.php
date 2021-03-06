  @extends('admin.layouts.master')
  @section('content')
  	<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
      <section class="content">
       <div class="row">
          <!-- left column -->
          <div class="col-md-12">
             @if(session()->has('success'))
              <div class="alert alert-success" role="alert">
                <strong>{{ session()->get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header bg-primary">
                <h3 class="box-title text-uppercase sys-info">Update System Settings Information</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ url('admin/system/setting/'.$setting->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="box-body">
                  <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('name') ? 'has-error':''}}">
                        <label for="name">Name&nbsp;<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" value="{{ $setting->name }}" name="name" placeholder="Enter company name">
                        @if($errors->has('name'))
                         <strong>
                            <p class="text-danger" ><i class="fa fa-warning"></i>{{ $errors->first('name') }}</p>
                          </strong>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('email') ? 'has-error':''}}">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" value="{{ $setting->email }}" id="email" name="email" placeholder="Enter company email">
                      @if($errors->has('email'))
                         <strong>
                            <p class="text-danger" ><i class="fa fa-warning"></i>{{ $errors->first('email') }}</p>
                          </strong>
                        @endif
                    </div>  
                    </div>
                    
                  </div>
                  <div class="col-md-12">
                  <div class="col-md-6">
                        <div class="form-group {{ $errors->has('title') ? 'has-error':''}}">
                        <label for="title">Title</label>
                        <textarea class="form-control"  name="title" id="title" placeholder="Enter company title">{{ $setting->title }}</textarea>
                        @if($errors->has('title'))
                         <strong>
                            <p class="text-danger" ><i class="fa fa-warning"></i>{{ $errors->first('title') }}</p>
                          </strong>
                        @endif
                    </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                        <label for="details">Details</label>
                        <textarea class="form-control"  name="details" id="details" placeholder="Enter company details">{{ $setting->details }}</textarea>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('address') ? 'has-error':''}}">
                        <label for="address">Address</label>
                        <textarea class="form-control"  name="address" id="address" placeholder="Enter company address">{{ $setting->address }}</textarea>
                        @if($errors->has('address'))
                         <strong>
                            <p class="text-danger" ><i class="fa fa-warning"></i>{{ $errors->first('address') }}</p>
                          </strong>
                        @endif
                    </div>
                    </div>
                   <div class="col-md-6">
                      <div class="form-group {{ $errors->has('facebook') ? 'has-error':''}}">
                      <label for="facebook">Facebook</label>
                      <input type="text" class="form-control" value="{{ $setting->facebook }}" id="facebook" name="facebook" placeholder="Enter facebook">
                      @if($errors->has('facebook'))
                         <strong>
                            <p class="text-danger" ><i class="fa fa-warning"></i>{{ $errors->first('facebook') }}</p>
                          </strong>
                        @endif
                    </div>  
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('phone') ? 'has-error':''}}">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" value="{{ $setting->phone }}" placeholder="Enter phone number">
                      @if($errors->has('phone'))
                         <strong>
                            <p class="text-danger" ><i class="fa fa-warning"></i>{{ $errors->first('phone') }}</p>
                          </strong>
                        @endif
                    </div>  
                    </div>
                    <div class="col-md-6">
                      <div class="form-group {{ $errors->has('twitter') ? 'has-error':''}}">
                      <label for="twitter">Twitter</label>
                      <input type="text" class="form-control" name="twitter" value="{{ $setting->twitter }}" id="twitter" placeholder="Enter twitter">
                      @if($errors->has('twitter'))
                         <strong>
                            <p class="text-danger" ><i class="fa fa-warning"></i>{{ $errors->first('twitter') }}</p>
                          </strong>
                        @endif
                    </div>  
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                       <div class="form-group {{ $errors->has('logo') ? 'has-error':''}}">
                      <label for="">Logo</label>
                      <input type="file" class="form-control" id="logo" name="logo" placeholder="Enter logo">
                      @if($errors->has('logo'))
                         <strong>
                            <p class="text-danger" ><i class="fa fa-warning"></i>{{ $errors->first('logo') }}</p>
                          </strong>
                        @endif
                      <br>
                       <div class="row">
                          <div class='col-md-6'>
                            @if($setting->logo)
                              <img style="width: 100px;height: 100px;" class="thumbnail img-responsive" src="{{asset($setting->logo)}}"/>
                            @else
                            <span class="label label-danger">No Image Provided</span>
                            @endif
                          </div>
                      </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group {{ $errors->has('googleplus') ? 'has-error':''}}">
                        <label for="googleplus">Google Plus</label>
                        <input type="text" class="form-control" name="googleplus" id="googleplus" placeholder="Enter google plus">
                        @if($errors->has('googleplus'))
                         <strong>
                            <p class="text-danger" ><i class="fa fa-warning"></i>{{ $errors->first('googleplus') }}</p>
                          </strong>
                        @endif
                    </div>  
                     <div class="col-md-6 col-md-offset-6 text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!--Menubar auto select-->
    <script type="text/javascript">
          $("#systemSettings").addClass("active");
          $("#systemSettings").parent().parent().addClass("menu-open");
          $("#systemSettings").parent().css("display","block");
  </script>
    <!--Menubar auto select-->
  @endsection 
