@extends('layouts.main')
@section('content')
    <div class="container pt-5">
    <div class="row" style="padding: 2rem">
        <div class="col-12" style="max-width: 1300px">
            <div class="card">
                <div class="card-header">
                    <h5>افزودن پست</h5>

                </div>
                <div class="card-body">

                    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title"> عنوان </label>
                            <input class="form-control  @error('title') is-invalid @enderror" name="title"
                                   type="text"
                                   value="{{old('title')}}"
                                   required>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="banner"
                                   class="col-form-label text-md-right">بنر</label>

                            <div class="form-control input-field @error('banner') is-invalid @enderror">
                                <div class="file-drop-area">
                                    <span class="fake-btn">بارگذاری</span>
                                    <span class="file-msg">
                                        فایلی انتخاب نشده است.
                                       </span>
                                    <input id="banner" class="file-input @error('banner') is-invalid @enderror" type="file"
                                           name="banner" accept="image/*">
                                </div>
                                <div class="file_preview mx-auto" id="image_preview">
                                </div>
                            </div>
                            <span class="@error('banner') {{Str::contains($message,'۵') ? 'd-none' :'' }}@enderror text-center"
                                  dir="rtl"><small>حداکثر حجم بنر ۵ مگابایت می باشد.
                                </small>
                                </span>
                            @error('banner')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="content"
                                   class="col-form-label text-md-right">متن</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" id="" cols="30" rows="10">{{old('content')}}</textarea>
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="video"
                                   class="col-form-label text-md-right">ویدئو</label>

                            <div class="form-control @error('video') is-invalid @enderror">
                                <input class="@error('video') is-invalid @enderror" type="file"
                                       name="video" accept="video/*">
                            </div>
                            <span class="@error('video') {{Str::contains($message,'۲۰') ? 'd-none' :'' }}@enderror text-center"
                                  dir="rtl"><small>حداکثر حجم بنر ۲۰ مگابایت می باشد.
                                </small>
                                </span>
                            @error('video')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <button class="btn btn-success my-5" type="submit">
                            افزودن پست
                        </button>
                    </form>

                </div>
            </div>


        </div>
    </div>
    </div>
@endsection