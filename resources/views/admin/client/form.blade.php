<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name"
                   type="text" placeholder="{{ __('Name') }}" value="{{ isset($client) ? $client->name : old('name') }}"
                   required="true" aria-required="true"/>
            @if ($errors->has('name'))
                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <label class="col-sm-2 col-form-label" for="input-profession">{{ __('Profissão') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('profession') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('profession') ? ' is-invalid' : '' }}" name="profession"
                id="input-profession" type="text" placeholder="{{ __('Profissão') }}"
                value="{{ isset($client) ? $client->profession : old('profession') }}" required/>
            @if ($errors->has('profession'))
                <span id="profession-error" class="error text-danger"
                    for="input-profession">{{ $errors->first('profession') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-relationStatus">{{ __('Estado Civil') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('relationStatus') ? ' has-danger' : '' }}">
            <select class="form-control{{ $errors->has('relationStatus') ? ' is-invalid' : '' }}" name="relationStatus"
                id="input-relationStatus" required>
                <option {{(isset($client) ? $client->relationStatus : old('relationStatus')) === "Solteiro (a)" ? 'selected' : ''}}
                    value="Solteiro (a)">Solteiro (a)</option>
                <option {{(isset($client) ? $client->relationStatus : old('relationStatus')) === "Casado (a)" ? 'selected' : ''}}
                    value="Casado (a)">Casado (a)</option>
                <option {{(isset($client) ? $client->relationStatus : old('relationStatus')) === "Divorciado (a)" ? 'selected' : ''}}
                    value="Divorciado (a)">Divorciado (a)</option>
                <option {{(isset($client) ? $client->relationStatus : old('relationStatus')) === "Viúvo (a)" ? 'selected' : ''}}
                    value="Viúvo (a)">Viúvo (a)</option>
            </select>
            @if ($errors->has('relationStatus'))
                <span id="relationStatus-error" class="error text-danger"
                    for="input-relationStatus">{{ $errors->first('relationStatus') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-naturality">{{ __('Naturalidade') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('naturality') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('naturality') ? ' is-invalid' : '' }}" name="naturality"
                id="input-naturality" type="text" placeholder="{{ __('Naturalidade') }}"
                value="{{ isset($client) ? $client->naturality : old('naturality') }}" required/>
            @if ($errors->has('naturality'))
                <span id="naturality-error" class="error text-danger"
                    for="input-naturality">{{ $errors->first('naturality') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-rg">{{ __('RG') }}</label>
    <div class="col-sm-3">
        <div class="form-group{{ $errors->has('rg') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('rg') ? ' is-invalid' : '' }}" name="rg"
                id="input-rg" type="number" placeholder="{{ __('RG') }}"
                value="{{ isset($client) ? $client->rg : old('rg') }}" required/>
            @if ($errors->has('rg'))
                <span id="rg-error" class="error text-danger"
                    for="input-rg">{{ $errors->first('rg') }}</span>
            @endif
        </div>
    </div>

    <label class="col-sm-2 col-form-label centerTxt" for="input-orgExpRG">{{ __('Orgão Expedidor do RG') }}</label>
    <div class="col-sm-2">
        <div class="form-group{{ $errors->has('orgExpRG') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('orgExpRG') ? ' is-invalid' : '' }}" name="orgExpRG"
                id="input-orgExpRG" type="text" placeholder="{{ __('Org. Exp. do RG') }}"
                value="{{ isset($client) ? $client->orgExpRG : old('orgExpRG') }}" required/>
            @if ($errors->has('orgExpRG'))
                <span id="orgExpRG-error" class="error text-danger"
                    for="input-orgExpRG">{{ $errors->first('orgExpRG') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-cpf">{{ __('CPF') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf"
                id="input-cpf" type="number" placeholder="{{ __('CPF') }}"
                value="{{ isset($client) ? $client->cpf : old('cpf') }}" required/>
            @if ($errors->has('cpf'))
                <span id="cpf-error" class="error text-danger"
                    for="input-cpf">{{ $errors->first('cpf') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-phone">{{ __('Phone') }}</label>
    <div class="col-sm-7">
        <div class="form-group">
            <input class="form-control" name="phone" id="input-phone"
                    type="tel" placeholder="{{ __('Phone') }}"
                    value="{{ isset($client) ? $client->phone : old('phone') }}" required/>
            @if ($errors->has('phone'))
                <span id="phone-error" class="error text-danger"
                        for="input-phone">{{ $errors->first('phone') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                    id="input-email" type="email" placeholder="{{ __('Email') }}"
                    value="{{ isset($client) ? $client->email : old('email') }}" required/>
            @if ($errors->has('email'))
                <span id="email-error" class="error text-danger"
                        for="input-email">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-zip_code">{{ __('Zip Code') }}</label>
    <div class="col-sm-7">
        <div class="form-group">
            <input class="form-control" name="zip_code" id="input-zip_code"
                    type="number" placeholder="{{ __('Zip Code') }}"
                    value="{{ isset($client) ? $client->address->zip_code : old('zip_code') }}" required/>
            @if ($errors->has('zip_code'))
                <span id="zip_code-error" class="error text-danger"
                        for="input-zip_code">{{ $errors->first('zip_code') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-addrs">{{ __('Rua') }}</label>
    <div class="col-sm-7">
        <div class="form-group">
            <input class="form-control" name="addrs" id="input-addrs"
                    type="text" placeholder="{{ __('Rua') }}"
                    value="{{ isset($client) ? $client->address->addrs : old('addrs') }}" readonly/>
            @if ($errors->has('addrs'))
                <span id="addrs-error" class="error text-danger"
                        for="input-addrs">{{ $errors->first('addrs') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-country">{{ __('Pais') }}</label>
    <div class="col-sm-3">
        <div class="form-group">
            <input class="form-control" name="country" id="input-country"
                type="text" placeholder="{{ __('Pais') }}"
                value="{{ isset($client) ? $client->address->country : old('country') }}" readonly/>
            @if ($errors->has('country'))
                <span id="country-error" class="error text-danger"
                    for="input-country">{{ $errors->first('country') }}</span>
            @endif
        </div>
    </div>

    <label class="col-sm-2 col-form-label centerTxt" for="input-state">{{ __('Estado') }}</label>
    <div class="col-sm-2">
        <div class="form-group">
            <input class="form-control" name="state" id="input-state"
                type="text" placeholder="{{ __('Estado') }}"
                value="{{ isset($client) ? $client->address->state : old('state') }}" readonly/>
            @if ($errors->has('state'))
                <span id="state-error" class="error text-danger"
                    for="input-state">{{ $errors->first('state') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-city">{{ __('Cidade') }}</label>
    <div class="col-sm-3">
        <div class="form-group">
            <input class="form-control" name="city" id="input-city"
                type="text" placeholder="{{ __('Cidade') }}"
                value="{{ isset($client) ? $client->address->city : old('city') }}" readonly/>
            @if ($errors->has('city'))
                <span id="city-error" class="error text-danger"
                    for="input-city">{{ $errors->first('city') }}</span>
            @endif
        </div>
    </div>

    <label class="col-sm-2 col-form-label centerTxt" for="input-ngbh">{{ __('Bairro') }}</label>
    <div class="col-sm-2">
        <div class="form-group">
            <input class="form-control" name="ngbh" id="input-ngbh"
                type="text" placeholder="{{ __('Bairro') }}"
                value="{{ isset($client) ? $client->address->ngbh : old('ngbh') }}" readonly/>
            @if ($errors->has('ngbh'))
                <span id="ngbh-error" class="error text-danger"
                    for="input-ngbh">{{ $errors->first('ngbh') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-complement">{{ __('Complemento') }}</label>
    <div class="col-sm-3">
        <div class="form-group">
            <input class="form-control" name="complement" id="input-complement"
                type="text" placeholder="{{ __('Complemento') }}"
                value="{{ isset($client) ? $client->address->complement : old('complement') }}" required/>
            @if ($errors->has('complement'))
                <span id="complement-error" class="error text-danger"
                    for="input-complement">{{ $errors->first('complement') }}</span>
            @endif
        </div>
    </div>

    <label class="col-sm-2 col-form-label centerTxt" for="input-number">{{ __('Numero') }}</label>
    <div class="col-sm-2">
        <div class="form-group">
            <input class="form-control" name="number" id="input-number"
                type="number" placeholder="{{ __('Nº') }}"
                value="{{ isset($client) ? $client->address->number : old('number') }}" required/>
            @if ($errors->has('number'))
                <span id="number-error" class="error text-danger"
                    for="input-number">{{ $errors->first('number') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-plan">{{ __('Tipo de Plano') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('plan') ? ' has-danger' : '' }}">
            <select class="form-control{{ $errors->has('plan') ? ' is-invalid' : '' }}" name="plan"
                id="input-plan" required>
                <option {{(isset($client) ? $client->plan : old('plan')) === "Soluções em Escala" ? 'selected' : ''}}
                    value="Soluções em Escala">Soluções em Escala</option>
                <option {{(isset($client) ? $client->plan : old('plan')) === "Soluções em Profundidade" ? 'selected' : ''}}
                    value="Soluções em Profundidade">Soluções em Profundidade</option>
                <option {{(isset($client) ? $client->plan : old('plan')) === "Solução de Assinaturas" ? 'selected' : ''}}
                    value="Solução de Assinaturas">Solução de Assinaturas</option>
            </select>
            @if ($errors->has('plan'))
                <span id="plan-error" class="error text-danger"
                    for="input-plan">{{ $errors->first('plan') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label" for="input-password">{{ __('Senha') }}</label>
    <div class="col-sm-7">
        <div class="form-group">
            <input class="form-control" name="password" id="input-password"
                    type="password" placeholder="{{ __('Senha') }}"
                    value="{{old('password')}}" {{isset($client) ? "" : 'required'}}/>
            @if ($errors->has('password'))
                <span id="password-error" class="error text-danger"
                        for="input-password">{{ $errors->first('password') }}</span>
            @endif
        </div>
    </div>
</div>



<script src="{{ asset('material/js/cliente/cep.js') }}"></script>