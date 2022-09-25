@section('menu')
    @livewire('admin.rightsidebar', ['active' => 'admin.work.all'])
@endsection

@section('title' , 'همه نمونه کار ها')

<div class="container-fluid">
    <div class="clearfix row">
        <div class="col-lg-6 col-md-6">
            <h2>همه نمونه کار ها</h2>
        </div>

        <div class="container-fluid">

            <div class="clearfix row">
                <div class="col-12">
                    <form>
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="جستجو در توضیخات نمونه کار" wire:model="search">
                            <div class="input-group-append">
                                <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing8">
                            <thead>
                                <tr>
                                    <th>آیدی نمونه کار</th>
                                    <th>توضیحات نمونه کار</th>
                                    <th>نوع نمونه کار</th>
                                    <th>وضعیت نمونه کار</th>
                                    <th>اقدامات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($works as $work)
                                    <tr>
                                        <td class="w60">
                                           {{ $work->id }}
                                        </td>
                                        <td>
                                            {{ \Illuminate\Support\Str::limit($work->description, 20, '...')}}
                                        </td>
                                        <td>
                                            {{$work->type == "pic" ? "عکس یا گیف" : "فیلم"}}
                                        </td>
                                        <td>
                                            @if($work->status == 0)
                                                <span class="btn btn-outline-success" wire:click="activeStatus({{$work->id}})">فعال کردن</span>
                                            @else
                                                <span class="btn btn-outline-danger" wire:click="disableStatus({{$work->id}})">غیر فعال کردن</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            <a href="#"> <button class="ml-1 btn btn-outline-primary" >نمایش</button> </a>      
                                            <button class="ml-1 btn btn-danger" wire:click="deleteWork({{$work->id}})">حذف</button>      
                                            <a href="{{route('admin.work.edit',['work' => $work->id])}}"><button class="ml-1 btn btn-warning">ویرایش</button>      
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div >
            {{ $works->render("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
