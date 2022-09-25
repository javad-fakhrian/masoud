<li class="{{$active == 'admin.index' ? 'active' : ''}}">
    <a href="{{route('admin.index')}}" class="has-arrow"><i class="icon-users"></i><span>کاربران</span></a>
</li>
<!-- <li class="{{$active == 'admin.work.create' ? 'active' : ''}}">
    <a href="{{route('admin.work.create')}}" class="has-arrow"><i class="icon-magic-wand"></i><span>ایجاد نمونه کار</span></a>
</li> -->
<li class="{{$active == 'admin.work.create' ? 'active' : ''}} {{$active == 'admin.work.all' ? 'active' : ''}} {{$active == 'admin.work.edit' ? 'active' : ''}}">
    <a class="has-arrow"><i class="icon-magic-wand"></i><span>نمونه کار</span></a>
    <ul aria-expanded="false" class="collapse">
        <li class="{{$active == 'admin.work.create' ? 'active' : ''}}"><a href="{{route('admin.work.create')}}">ایجاد نمونه کار</a></li>
        <li class="{{$active == 'admin.work.all' ? 'active' : ''}}"><a href="{{route('admin.work.all')}}">همه نمونه کار ها</a></li>
    </ul>
</li>
<li class="{{$active == 'admin.contactus' ? 'active' : ''}}">
    <a href="{{route('admin.contactus')}}" class="has-arrow"><i class="icon-envelope-open"></i><span>ارتباط با ما</span></a>
</li>

