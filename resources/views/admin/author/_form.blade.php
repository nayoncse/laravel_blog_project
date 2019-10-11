<div class="form-group">
    <label class="col-md-12">Author Name</label>
    <div class="col-md-12">
        <input name="name" value="{{ old('name',isset($author)?$author->name:null) }}" type="text" placeholder="Enter category Name" class="form-control form-control-line @error('name') is-invalid @enderror">
    </div>
    @error('name')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div><div class="form-group">
    <label class="col-md-12">Author Email</label>
    <div class="col-md-12">
        <input name="email" value="{{ old('email',isset($author)?$author->email:null) }}" type="email" placeholder="Enter author email" class="form-control form-control-line @error('email') is-invalid @enderror">
    </div>
    @error('email')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div><div class="form-group">
    <label class="col-md-12">Author Phone</label>
    <div class="col-md-12">
        <input name="phone" value="{{ old('phone',isset($author)?$author->phone:null) }}" type="text" placeholder="Enter author phone" class="form-control form-control-line @error('phone') is-invalid @enderror">
    </div>
    @error('phone')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div><div class="form-group">
    <label class="col-md-12">Author Address </label>
    <div class="col-md-12">
        <input name="address" value="{{ old('address',isset($author)?$author->address:null) }}" type="text" placeholder="Enter author address" class="form-control form-control-line @error('address') is-invalid @enderror">
    </div>
    @error('name')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Author Gender</label>
    @php
        if(old("gender")){
            $gender = old('gender');
        }elseif(isset($author)){
            $gender = $author->gender;
        }else{
            $gender = null;
        }
    @endphp
    <div class="col-md-12">
        <input name="gender" @if($gender =='male') checked @endif value="male" type="radio" id="male"><label for="male">male</label>
        <input name="gender" @if($gender=='female') checked @endif value="female" type="radio" id="female"><label for="female">female</label>
        <input name="gender" @if($gender=='others') checked @endif value="others" type="radio" id="others"><label for="others">others</label>
    </div>
    @error('gender')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>