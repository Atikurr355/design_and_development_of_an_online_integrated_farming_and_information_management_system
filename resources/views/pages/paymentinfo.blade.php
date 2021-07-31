@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-center">
            <h1>পেমেন্ট শ্চিত করুন</h1>
        </div> 
        <div class="payment_info">
        <form action="/action_page.php">
            <div class="form-group">
                <label for="pament_type"> টাকা পাঠানোর মাধ্যম: <label>
                <select class="form-control" name="pament_type" id="pament_type">
                    <option value="">বিকাশ</option> 
                    <option value=""> রকেট </option>
                </select>     
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-warning">যাচাই করুন</button>
            <button type="reset" class="btn btn-danger"> পুনরায় লিখুন</button>
        </form>
        </div>
    </div>
@endsection
