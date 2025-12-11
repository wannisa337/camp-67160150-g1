<!--file:resources/view/html101/blade.php -->
<!Doctype html>

<html>
    <head>
        <title>ส่วนหัวของ HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML - FORM</h1>
            <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">สกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="birthday">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input type="date" id="birthday" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="age">อายุ</label>
                    </div>
                    <div class="col">
                        <input id="age" class="form-control">
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
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="photo">รูป</label>
                    </div>
                    <div class="col">
                        <input type="file" id="photo" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="address">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <textarea id="address" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <select id="color" class="form-select">
                            <option>สีแดง</option>
                            <option>สีเหลือง</option>
                            <option>สีส้ม</option>
                            <option>สีเขียว</option>
                            <option>สีฟ้า</option>
                            <option>สีน้ำเงิน</option>
                            <option>สีม่วง</option>
                            <option>สีขาว</option>
                            <option>สีดำ</option>
                            <option>สีชมพู</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label>แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
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
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                       <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agree" id="agree" >
                            <label class="form-check-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button type="reset" class="btn btn-light">Reset</button>
                        <button type="submit" class="btn btn-success ms-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>