<div class="form-group row">
    <label class="col-form-label col-md-2">Nama Permission</label>
    <div class="col-md-10">
    <input type="text" name="name" id="name" class="form-control" value="{{old('name')?? $permission->name}} " >
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Nama Guard</label>
    <div class="col-md-10">
    <input type="text" id="guard_name" name="guard_name" placeholder="default to web"class="form-control" value="{{old('guard_name') ?? $permission->guard_name}}">
    </div>
    </div>
    <button type="submit"  class="btn btn-primary">{{$submit}}</button>
