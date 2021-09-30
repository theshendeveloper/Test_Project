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
                                  dir="rtl"><strong style="font-size: .875rem;">حداکثر حجم بنر ۵ مگابایت می باشد.
                                </strong>
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

                        <div class="form-group video_input">
                            <label for="video"
                                   class="col-form-label text-md-right">ویدئو</label>

                            <div class="form-control @error('video') is-invalid @enderror">
                                <input id="video" class="@error('video') is-invalid @enderror" type="file"
                                       name="video" accept="video/mp4, video/mov, video/ogg">
                            </div>
                            <span class="size-info @error('video') {{Str::contains($message,'۲۰') ? 'd-none' :'' }}@enderror"
                                  dir="rtl"><strong style="font-size: .875rem;">حداکثر حجم ویدئو ۲۰ مگابایت می باشد.
                                </strong>
                                </span>
                            @error('video')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="video_preview" style="display: none;">
                                <div class="progress" style="width: 300px;margin-top: 3rem;background: antiquewhite">
                                    <div class="progress-bar" role="progressbar">
                                        <span>0%</span>
                                    </div>
                                </div>
                                <video class="mt-4" width="300" height="300" controls></video>

                            </div>
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

@push('script')
    <script src="https://cdn.tiny.cloud/1/rr6lb7gurqghw4gvks7rjm25l2nr8p3talrvgtvkotcwpgyp/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        $(document).ready(function () {

            tinymce.init({
                selector: '#content',
                plugins: 'print preview searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link media table hr anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help quickbars emoticons',
                images_upload_url: '{{route('editor.upload',["_token" => csrf_token()])}}',
                automatic_uploads: true,
                toolbar_mode: 'floating',
            });
        });
    </script>
    @endpush