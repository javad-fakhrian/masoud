<div>
    <form wire:submit.prevent="CreateContactus" enctype="multipart/form-data" role="form" >
        <div class="input-wrap"><i class="fa fa-user-plus"></i><input wire:model.lazy="contact.name" name="name" type="text" id="name" class="inputForm2"  placeholder="نام*"></div>
        <div class="input-wrap"><i class="fa fa-envelope"></i><input name="email" wire:model.lazy="contact.email" type="text" id="email"  placeholder="ایمیل*"></div>
        <div class="input-wrap"> <i class="fa fa-phone"></i> <input type="text" wire:model.lazy="contact.phone" name="phone" id="phone" placeholder="تلفن*"  /> </div>
        <textarea name="comments" wire:model.lazy="contact.description" id="comments" placeholder="متن*"></textarea>
        <button type="submit" id="submit"><span>ارسال پیام</span></button>
    </form>
    
</div>
