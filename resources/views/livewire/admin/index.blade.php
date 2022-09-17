@section('menu')
    <li class="active">
        <a href="#Dashboard" class="has-arrow"><i class="icon-speedometer"></i><span>کاربران</span></a>
    </li>
@endsection

<div class="container-fluid">
    <div class="clearfix row">
        <div class="col-lg-6 col-md-6">
            <h2> لیست کاربران</h2>
        </div>

        <div class="container-fluid">

            <div class="clearfix row">
                <div class="col-12">
                    <form>
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="جستجو کاربر" wire:model="search">
                            <div class="input-group-append">
                                <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing8">
                            <thead>
                                <tr>
                                    <th>آیدی کاربر</th>
                                    <th>نام کاربر</th>
                                    <th>آدرس ایمیل</th>
                                    <th>اقدامات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="w60">
                                           {{ $user->id }}
                                        </td>
                                        <td>
                                            <p class="mb-0">{{ $user->name }}</p>
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td class="d-flex">
                                            <button class="ml-1 btn btn-danger" wire:click="deleteUser({{$user->id}})">حذف</button>      
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
            {{ $users->render("pagination::bootstrap-4") }}
        </div>
    </div>
</div>