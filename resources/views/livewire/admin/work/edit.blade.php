@section('menu')
    @livewire('admin.rightsidebar', ['active' => 'admin.work.edit'])
@endsection

@section('title' , 'ویرایش نمونه کار')

<div class="card">
    <div class="header">
        <h2>ویرایش نمونه کار</h2>
    </div>
    <div class="body">
        <form id="basic-form" wire:submit.prevent="EditWork" enctype="multipart/form-data" role="form">
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
                <p>آدرس مدیا : {{$work->url}}</p>
                <div class="mt-4">
                    <label for="file" class="block">آپلود مدیا<label>
                    <input id="file" type="file" name="file" wire:model="file">
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
            <button type="submit" class="btn btn-warning">ویرایش</button>
        </form>
    </div>
</div>

