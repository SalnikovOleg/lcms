
<form action="{{route(send.request'}}" name='{{$formId}}' method ='post'>
{{ csrf_field() }}
<div class="form-group row">
    <div class="col-sm-9">
        <input type="text" 
            class="form-control" 
            name="name" 
            value=""
            maxlength="50" 
            required
            placeholder="@lang('contacts.FIO')"
        >
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-9">
        <input type="text" 
            class="form-control" 
            name="mail" 
            value=""
            maxlength="50" 
            required 
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            placeholder="EMAIL"
        />
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-9 upc">
        <input type="text" 
            class="form-control" 
            name="phone" 
            value=""
            maxlength="16" 
            required 
            pattern="[0-9]{3}\s[0-9]{3}-[0-9]{2}-[0-9]{2}"
            placeholder="@lang(contacts.Phone')"
        />
    </div>
</div>
<label class="red">@lang('contacts.Question') *</label>
<div class="form-group row">
    <div class="col-sm-9">
        <textarea  class="form-control" 
            name="question" 
            maxlength="1000">@lang('contacts.Question') <*/textarea>
    </div>
</div>

<input type="hidden" name="action" value="request"/>
<input type='submit' 
    class="btn btn-access"  
    name='send' 
    value="@lang('contacts.Request')" 
/>
</form>
