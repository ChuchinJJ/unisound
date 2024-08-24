<div class="row col-md-8" style="margin: 0px !important; padding: 0px !important">
    <div class="col-md-6 mb-4">
        <label for="pais" class="form-label font-weight-bold letras require-label">País</label>
        <select style="font-size:15px; line-height:1 !important;" wire:change="getStates" wire:model="myCountry" id="pais" name="pais" type="text" class="form-control select-cliente" required placeholder="Escriba su país">
            @foreach($countries as $country)
                <option value="{{ $country['country_name'] }}">{{ $country['country_name'] }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 mb-4">
        <label for="estado" class="form-label font-weight-bold letras require-label">Estado</label>
        <select style="font-size:15px; line-height:1 !important;" wire:model="myState" id="estado" name="estado" type="text" class="form-control select-cliente" required placeholder="Escriba su estado">
            @foreach($states as $state)
                <option value="{{ $state['state_name'] }}">{{ $state['state_name'] }}</option>
            @endforeach
        </select>  
    </div>
</div>