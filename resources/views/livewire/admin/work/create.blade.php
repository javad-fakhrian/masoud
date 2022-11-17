@section('menu')
    @livewire('admin.rightsidebar', ['active' => 'admin.work.create'])
@endsection

@section('head')
    <script src="{{asset('/js/alpine.cdn.min.js')}}"></script>
@endsection

@section('title' , 'ایجاد نمونه کار')

<div class="card">
    <div class="header">
        <h2>ایجاد نمونه کار</h2>
    </div>
    <div class="body">
        <form id="basic-form" wire:submit.prevent="CreateWork" enctype="multipart/form-data" role="form">
            {{-- <div class="form-group">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <label>نوع نمونه کار</label>
                        <br>
                        <label class="fancy-radio">
                            <input type="radio" name="media" value="pic" required="" data-parsley-errors-container="#error-radio" data-parsley-multiple="media" wire:model="type" selected>
                            <span><i></i>عکس و گیف</span>
                        </label>
                        <label class="fancy-radio">
                            <input type="radio" name="media" value="movie" data-parsley-multiple="media" wire:model="type">
                            <span><i></i>فیلم</span>
                        </label>
                        <p id="error-radio"></p>
                    </div>
                </div>                                    
            </div> --}}

            <div class="form-group">
                <div class="mt-4" x-data="{ isUploading: false, progress: 0 }" 
                        x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false" 
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <label for="file" class="block">آپلود مدیا<label>
                    <input id="file" type="file" name="file" wire:model="file">
                    
                    <div class="mt-2" x-show="isUploading">
                        <progress max="100" x-bind:value="progress" ></progress>
                    </div>
                    @error('file')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>    

            <div class="form-group">
                <label>توضیحات</label>
                <textarea class="form-control" rows="5" cols="30" required="" wire:model.lazy="description"></textarea>
                @error('description')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>
        
            <br>
            <button type="submit" class="btn btn-primary">آپلود</button>
        </form>
    </div>
</div>

