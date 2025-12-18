<!--file:resources/view/html101/blade.php -->
@extends('template.default')
@section('title','Workshop Form')
@section('content')
    <h1>Workshop #Html - Form</h1>
        <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control">
                        <div class= "valid-feedback">
                            Looks good!
                        </div>
                        <div class= "invalid-feedback">
                            Please enter your first name
                        </div>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">สกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control">
                        <div class= "valid-feedback">
                            Looks good!
                        </div>
                        <div class= "invalid-feedback">
                            Please enter your last name.
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="birthday">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input type="date" id="birthday" class="form-control">
                        <div class= "valid-feedback">
                            Looks good!
                        </div>
                        <div class= "invalid-feedback">
                            Please select your date of birth.
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="age">อายุ</label>
                    </div>
                    <div class="col">
                        <input id="age" class="form-control">
                        <div class= "valid-feedback">
                            Looks good!
                        </div>
                        <div class= "invalid-feedback">
                            Please enter your age.
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label>เพศ</label>
                    </div>
                    <div class="col">
                       <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">ชาย</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">หญิง</label>
                        </div>
                        <div id=gender-valid class= "valid-feedback d-none">
                            Looks good!
                        </div>
                        <div id=gender-invalid class= "invalid-feedback d-none d-block">
                            Please select your gender.
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="photo">รูป</label>
                    </div>
                    <div class="col">
                        <input type="file" id="photo" class="form-control">
                        <div class= "valid-feedback">
                            Looks good!
                        </div>
                        <div class= "invalid-feedback">
                            Please choose a file.
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="address">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <textarea id="address" class="form-control" rows="4"></textarea>
                        <div class= "valid-feedback">
                            Looks good!
                        </div>
                        <div class= "invalid-feedback">
                            Please enter your address.
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <select id="color" class="form-select">
                            <option value="">Choose Color</option>
                            <option value="red">สีแดง</option>
                            <option value="yellow">สีเหลือง</option>
                            <option value="orange">สีส้ม</option>
                            <option value="green">สีเขียว</option>
                            <option value="blue">สีฟ้า</option>
                            <option value="navy">สีน้ำเงิน</option>
                            <option value="purple">สีม่วง</option>
                            <option value="white">สีขาว</option>
                            <option value="black">สีดำ</option>
                            <option value="pink">สีชมพู</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a color.
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label>แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col" id="music-group">
                       <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="life" value="life">
                            <label class="form-check-label" for="life">เพื่อชีวิต</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="country" value="country">
                            <label class="form-check-label" for="country">ลูกทุ่ง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="other" value="other">
                            <label class="form-check-label" for="other">อื่นๆ</label>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a music preference.
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                       <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agree" id="agree" >
                            <label class="form-check-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
                            <div class= "valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <button type="reset" class="btn btn-light">Reset</button>
                        <button type="submit" class="btn btn-success ms-2" onclick ="clickme()">Submit</button>
                    </div>
                </div>

        </form>
@endsection

@push('scripts')
    <script>
        let clickme = function (){
            let fname = document.getElementById('fname')
            //fname.value = "from ClickMe"
            //console.log(fname.value)

            if(fname.value == ""){
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
            }else{
                fname.classList.remove('is-invalid')
                fname.classList.add('is-valid')
            }

            let lname = document.getElementById('lname')

            if(lname.value == ""){
                lname.classList.remove('is-valid')
                lname.classList.add('is-invalid')
            }else{
                lname.classList.remove('is-invalid')
                lname.classList.add('is-valid')
            }

            let birthday = document.getElementById('birthday')

            if(birthday.value == ""){
                birthday.classList.remove('is-valid')
                birthday.classList.add('is-invalid')
            }else{
                birthday.classList.remove('is-invalid')
                birthday.classList.add('is-valid')
            }

            let age = document.getElementById('age')

            if(age.value == ""){
                age.classList.remove('is-valid')
                age.classList.add('is-invalid')
            }else{
                age.classList.remove('is-invalid')
                age.classList.add('is-valid')
            }


            let gender_male = document.getElementById('male')
            let gender_female = document.getElementById('female')
            let feedbackgender = document.getElementById('gender-invalid')

            if(!gender_male.checked && !gender_female.checked){
                gender_male.classList.add('is-invalid')
                gender_female.classList.add('is-invalid')
                feedbackgender.classList.remove('d-none')
            } else {
                gender_male.classList.remove('is-invalid')
                gender_female.classList.remove('is-invalid')
                feedbackgender.classList.add('d-none')
            }

            let photo = document.getElementById('photo')

            if(photo.value == ""){
                photo.classList.remove('is-valid')
                photo.classList.add('is-invalid')
            }else{
                photo.classList.remove('is-invalid')
                photo.classList.add('is-valid')
            }

            let address = document.getElementById('address')

            if(address.value == ""){
                address.classList.remove('is-valid')
                address.classList.add('is-invalid')
            }else{
                address.classList.remove('is-invalid')
                address.classList.add('is-valid')
            }

            let music_group = document.getElementById('music-group')
            let music_life = document.getElementById('life')
            let music_country = document.getElementById('country')
            let music_other = document.getElementById('other')

            if (!music_life.checked && !music_country.checked && !music_other.checked) {
                music_group.classList.remove('is-valid')
                music_group.classList.add('is-invalid')
            } else {
                music_group.classList.remove('is-invalid')
                music_group.classList.add('is-valid')
            }

            let agree = document.getElementById('agree')

            if(!agree.checked){
                agree.classList.remove('is-valid')
                agree.classList.add('is-invalid')
            }else{
                agree.classList.remove('is-invalid')
                agree.classList.add('is-valid')
            }

            let color = document.getElementById('color')

            if(color.value == ""){
                color.classList.remove('is-valid')
                color.classList.add('is-invalid')
            }else{
                color.classList.remove('is-invalid')
                color.classList.add('is-valid')
            }
        }

        let myfunc = (callback) =>{
            callback("in Callback")
        }

        callme = (param) => {
            console.log(param)
        }

        myfunc(callme)

    </script>
@endpush

@push('styles')
<style>
    body {
        background-color: #fff8e1; /* สีครีม / เหลืองอ่อน */
    }
</style>
@endpush
