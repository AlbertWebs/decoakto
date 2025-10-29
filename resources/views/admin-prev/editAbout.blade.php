@extends('admin.master')
@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<style>
    .modal a.close-modal{
        top:0px !important;
        right:0px !important;
    }
</style>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        @include('admin.sidebar')

        <!--== BODY INNER CONTAINER ==-->

        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Edit About US </a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/privacy"><i class="fa fa-backward" aria-hidden="true"></i> Privacy Policy </a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/terms"><i class="fa fa-backward" aria-hidden="true"></i> Terms and Conditions</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/faq"><i class="fa fa-backward" aria-hidden="true"></i> Frequently Asked Questions</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit About Us</h4>
                        <p> </p>
                        <center>
                            @if(Session::has('message'))
                                          <div class="alert alert-success">{{ Session::get('message') }}</div>
                           @endif

                           @if(Session::has('messageError'))
                                          <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                           @endif
                        </center>
                    </div>
                    @foreach ($About as $item)

                    <div class="bor">
                        <form method="POST" action="{{url('/')}}/admin/edit_About" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="input-field col s12">
                                    <input value="{{$item->title}}" autocomplete="off" name="title" id="list-title" type="text" class="validate" required>
                                    <label for="list-title">Post Title</label>
                                </div>
                            </div>

                             <div class="row">
                                <div class="input-field col s12">
                                    <input value="{{$item->meta}}" autocomplete="off" name="meta" id="list-title" type="text" class="validate" required>
                                    <label for="list-title">Post Meta</label>
                                </div>
                            </div>



                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea required id="article-ckeditor" name="content" class="materialilze-textarea" placeholder="content">{{$item->content}}</textarea>

                                </div>
                            </div>
                            <style>
                                .btn-file {
                                    position: relative;
                                    overflow: hidden;
                                }
                                .btn-file input[type=file] {
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    min-width: 100%;
                                    min-height: 100%;
                                    font-size: 100px;
                                    text-align: right;
                                    filter: alpha(opacity=0);
                                    opacity: 0;
                                    outline: none;
                                    background: white;
                                    cursor: inherit;
                                    display: block;
                                }

                                #img-upload{
                                    width: 100%;
                                }
                            </style>
                            <div class="row">
                                <div class="">
                                    <div class="input-field col s12">
                                        <div class="form-group">
                                            <label>Banner Image</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input name="image" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="{{url('/')}}/uploads/about/{{$item->image_one}}" id='img-upload'/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="submit" class="waves-effect waves-light btn-large" value="Save Changes">
                                </div>
                            </div>

                        </form>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>

@endsection
