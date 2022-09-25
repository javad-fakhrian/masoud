@section('menu')
    @livewire('admin.rightsidebar', ['active' => 'admin.contactus'])
@endsection

@section('title' , 'لیست ارتباط با ما')

<div class="container-fluid">
    <div class="clearfix row">
        <div class="col-lg-6 col-md-6">
            <h2> لیست ارتباط با ما</h2>
        </div>

        <div class="container-fluid">
        @if($showContact)
            <div class="alert alert-warning m-2 mb-2 rounded">
                <p>{{$showContactValue->description}}</p>
            </div>
        @endif
            <div class="clearfix row">
                <div class="col-12">
                    <form>
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="جستجو با ایمیل یا نام یا متن . . ." wire:model="search">
                            <div class="input-group-append">
                                <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing8">
                            <thead>
                                <tr>
                                    <th>آیدی</th>
                                    <th>نام کاربر</th>
                                    <th>آدرس ایمیل</th>
                                    <th>متن</th>
                                    <th>اقدامات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td class="w60">
                                           {{ $contact->id }}
                                        </td>
                                        <td>
                                            <p class="mb-0">{{ $contact->name }}</p>
                                        </td>
                                        <td>
                                            {{ $contact->email }}
                                        </td>
                                        <td>
                                            {{ \Illuminate\Support\Str::limit($contact->description, 20, '...')}}
                                        </td>
                                        <td class="d-flex">
                                            <button class="ml-1 btn btn-danger" wire:click="deleteContact({{$contact->id}})">حذف</button>      
                                            <button class="ml-1 btn btn-outline-primary" wire:click="activeShowContact({{$contact->id}})">نمایش کامل</button>      
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
            {{ $contacts->render("pagination::bootstrap-4") }}
        </div>
    </div>
</div>