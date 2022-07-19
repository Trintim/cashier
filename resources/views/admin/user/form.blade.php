<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name"
                   type="text" placeholder="{{ __('Name') }}" value="{{ isset($user) ? $user->name : old('name') }}"
                   required="true" aria-required="true"/>
            @if ($errors->has('name'))
                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-phone">{{ __('Phone') }}</label>
    <div class="col-sm-7">
        <div class="form-group">
            <input class="form-control" name="phone" id="input-phone"
                   type="text" placeholder="{{ __('Phone') }}" value="{{ isset($user) ? $user->phone : old('phone') }}" required/>
            @if ($errors->has('phone'))
                <span id="phone-error" class="error text-danger"
                      for="input-phone">{{ $errors->first('phone') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-occupation">{{ __('Cargo') }}</label>
    <div class="col-sm-7">
        <div class="form-group">
            <input class="form-control" name="occupation" id="input-occupation"
                   type="text" placeholder="{{ __('occupation') }}" value="{{ isset($user) ? $user->occupation : old('occupation') }}" required/>
            @if ($errors->has('occupation'))
                <span id="occupation-error" class="error text-danger"
                      for="input-occupation">{{ $errors->first('occupation') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Nivel De Acesso') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('access_level') ? ' has-danger' : '' }}">
            <select id="access_level" name="access_level" class="form-control" required @if (!(Auth::user()->access_level == 0)) readonly=readonly tabindex=-1 @endif>
                <option value="">--- Selecione a opção ---</option>
                <option @if (isset($user) && $user->access_level == 0) selected @endif value="0">Administrator Master</option>
                <option @if (isset($user) && $user->access_level == 1) selected @endif value="1">Moderador</option>
                <option @if (isset($user) && $user->access_level == 2) selected @endif value="2">Usuário</option>
            </select>
        </div>
    </div>
</div>
@if (!isset($user))
    <div class="row">
        <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
        <div class="col-sm-7">
            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                       id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}"
                       required/>
                @if ($errors->has('email'))
                    <span id="email-error" class="error text-danger"
                          for="input-email">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-2 col-form-label" for="input-password">{{ __('Password') }}</label>
        <div class="col-sm-7">
            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                       id="input-password" type="password" placeholder="{{ __('Password') }}" value="" required/>
                @if ($errors->has('password'))
                    <span id="password-error" class="error text-danger"
                          for="input-password">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
        <div class="col-sm-7">
            <div class="form-group">
                <input class="form-control" name="password_confirmation" id="input-password-confirmation"
                       type="password" placeholder="{{ __('Confirm Password') }}" value="" required/>
                @if ($errors->has('password'))
                    <span id="password-error" class="error text-danger"
                          for="input-password">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>
    </div>
@endif
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Foto') }}</label>
    <div class="col-sm-7">
        <div class="input-group mb-3">
            <input class="form-control" name="image" id="input-image"
                type="file" placeholder="{{ __('image') }}" value="{{ isset($user) ? $user->image : old('image') }}" {{ isset($user) ? '' : 'required' }}/>
            @if ($errors->has('image'))
                <span id="image-error" class="error text-danger" for="input-image">{{ $errors->first('image') }}</span>
            @endif
        </div>
    </div>
</div>
@if(isset($user))
    <div class="row">
        <label class="col-sm-2 col-form-label">{{ __('Foto Atual') }}</label>
        <div class="col-sm-7" style="display: flex;justify-content:center">
            <div><img class="img-fluid" src="/storage/{{$user->image }}" alt="image" style="max-height: 300px;border-radius:10px ;object-fit: cover"></div>
        </div>
    </div>
@endif
