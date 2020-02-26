<form action="{{route('send.question')}}" name='{{$formId}}' method ='post'>
<label>@lang('contacts.LeaveMessage')</label>
{{ csrf_field() }}
<div class="form-group row">
    <label class="col-sm-3 col-form-label">@lang('contacts.Name') *</label>
    <div class="col-sm-9">
        <input type="text" 
            class="form-control" 
            name="name" 
            value=""
            maxlength="50" 
            required
        >
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">@lang('contacts.Email') *</label>
    <div class="col-sm-9">
        <input type="text" 
            class="form-control" 
            name="mail" 
            value=""
            maxlength="50" 
            required 
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
        />
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">@lang('contacts.Phone') *</label>
    <div class="col-sm-9">
        <input type="text" 
            class="form-control" 
            name="phone" 
            value=""
            maxlength="50" 
            required 
            pattern="[0-9]{3}\s[0-9]{3}-[0-9]{2}-[0-9]{2}"
            placeholder="095 286-12-23"
        />
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">@lang('contacts.Theme')</label>
    <div class="col-sm-9">
        <input type="text" 
            class="form-control" 
            name="theme"    
            value=""
            maxlength="100"
        />
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">@lang('contacts.Question') *</label>
    <div class="col-sm-9">
        <textarea  class="form-control" 
            name="message" 
            maxlength="1000"
            required
        ></textarea>
    </div>
</div>
<input type="hidden" name="action" value="question"/>
<input type='submit' class="btn btn-access"  name='send' 
    value="@lang('contacts.Send')" 
/>
</form>
